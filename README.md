# develation-test

DevElation test application

use `composer install` to load vendor files.

If you encounter

```
curl error 28 while downloading https://api.github.com/repos/bluefission/develation: Resolving timed out after 1000
  5 milliseconds
```

Try again as sometimes GitHub fails to serve the files to composer as a vcs

## Overview

The goal is to use DevElation to built 2 tools:

-   https://tarheelturfcrm.com/ - CRM for landscapers
-   https://www.rankandrenttool.com/ - crm for ranking websites with seo and rent to local businesses

This application _can_ be built in DevElation, especially with the `https://github.com/BlueFissionTech/opus` framework (what we often use instead of Laravel in house). Using DevElation in conjunction with Laravel can be done (especially if you want to extend service classes with DevElation features) but many features are redundant since many native Laravel features are also native DevElation features:

```php
BlueFission\Data\Storage\MySQL; // Similar to Eloquent Models
BlueFission\Collections\Collection; // Duplicates many Laravel Collection features
BlueFission\Services\Mapping; // Provides applications routes
BlueFission\Services\Application; // Functions like Laravel Kernel

```

For this reason, it's best to utilize only the Object mapping and Behavioral features of DevElation when working with Laravel. This however doesn't teach or reflect fundamental features of the the library.

### Question Responses:

-   Just to make sure I'm right, do I have to extend `Obj` before using features like `field()`, `snapshot()`, or `delta()`, and will it break if not?

*   You _can_ use `Obj` directly, but that's a very verbose way of using the class, and denies you the ability to utilize reusabilty. For instance:

```php
$person = new Obj();
$person->field('name', 'John Doe');

echo $person->name; // John Doe
```

Provides a simple, ready to use dynamic object, but doesn't given you the benefit of configuration of the object like this would:

```php
class Person extends BlueFission\Obj {
	protected $_data = ['name' => null, 'email' => null, 'phone' => null];
}
$person = new Person();
$person->name = 'John Doe';
```

Or more advanced features like:

```php
class Person extends BlueFission\Obj {
	protected $_data = ['name' => null, 'email' => null, 'phone' => null];
	protected $types = [ 'name' => BlueFission\DataTypes::STRING ];

	protected $_exposeValueObject = true;
}

$person = new Person();

$person->name = 'John Doe';
$person->name->snapshot();
$person->name = 'Mike Smith';
echo $person->name; // Mike Smith
$person->name->reset();
echo $person->name; // John Doe
```

--

-   Does Database::save() always perform an insert, or can it auto‑detect and do an update if an ID exists?

*   Datastorage objects like `BlueFission\Data\Storage\MySQL` auto detect primary keys and will update if they are present

```php
$cartItems = new BlueFission\Data\Storage\MySQL(['location'=>'ecommerce_db', 'name'=>'cart_items']);
$cartItems->assign(['id'=>1, 'product_id'=>1, 'quantity'=>1]);
$cartItems->write(); // executes updates if entry id of 1 exists
```

Though a more advance extension of this functionality exists in `https://github.com/BlueFissionTech/bluecore/blob/main/src/BlueCore/Model/BaseModel.php`

--

-   Can we enforce validation rules or constraints on customer fields like email or phone numbers?

*   Absolutely! This works through the `$_exposeValueObject` member and the `Obj::constraint()` method:

```php
$obj->field('age')->constraint(function(&$value) {
	if ($value['age'] < 0) {
		$value['age'] = 0;
	}

    if (!is_numeric($value['age'])) {
        throw new InvalidArgumentException("Age must be numeric.");
    }
});
$obj->age = 30; // Valid
$obj->age = -12; // Sets age to 0
$obj->age = 'thirty'; // Throws exception
```

-   How can we set default values for customer fields using DevElation?

*   Like this:

```php
class Person extends BlueFission\Obj {
	protected $_data = ['name' => 'Default Name', 'email' => 'me@test.com', 'phone' => '555-5555'];
}
```

--

-   Can I define relationships, like a customer having many jobs or invoices, using Develation?

*   No, not directly through DevElation but you can through `BlueFission/Opus` which is built on DevElation. That works like this:

```php
namespace App\Domain\Communication\Models;

use BlueFission\Framework\Model\ModelSql as Model;

class CommunicationModel extends Model
{
    protected $_table = ['communications'];
    protected $_fields = [
        'communication_id',
        'user_id',
        'recipient_id',
        'communication_type_id',
        'channel',
        'communication_content',
        'communication_status_id',
    ];

    protected $_related = [
        'users',
        'communication_parameters',
        'communication_attachments',
        'communication_types',
        'communication_statuses',
    ];

    public function user()
    {
        return $this->ancestor('App\Domain\User\Models\UserModel', 'user_id');
    }

    public function recipient()
    {
        return $this->ancestor('App\Domain\User\Models\UserModel', 'recipient_id', 'user_id');
    }

    public function parameters()
    {
        return $this->descendents('App\Domain\Communication\Models\CommunicationParameterModel', 'communication_id');
    }
}
```

--

-   Does Develation handle SQL injection protection inside Database::query() or save()?

*   Yes, DevElation uses real escape string features and handles sanitization within the database models.

--

-   Is there a way to whitelist allowed fields in a model like Customer to avoid mass assignment issues? A “safe list” of fields that can be changed in bulk (e.g. via set() or hydrate()), and ignore or block dangerous ones?

Exmaple: protected $fillable = ['name', 'phone']; // ✅ allow these

protected $guarded = ['is_admin']; // ❌ block these

-   THAT IS AN EXCELLENT QUESTION! And I don't believe I built that feature in. It wouldn't be hard to make, though.

--

-   Can I automatically run some code every time a Customer is created, updated, or deleted? And can I log those actions?

*   Yes, you can. We don't have an Observer pattern like Laravel (yet) but that can be easily implemented with the Event system that exists:

```php
class Person extends \BlueFission\Obj {
    protected $_data = [
        'name' => null,
        'age' => null
    ];

    protected $_types = [
        'name' => \BlueFission\DataTypes::STRING,
        'age' => \BlueFission\DataTypes::INTEGER
    ];

    protected $_lockDataType = true;

    protected $_exposeValueObject = true;

    public function __construct() {
        parent::__construct();
        $this->when(Event::CHANGE, function() {
            echo "My values have changed";
        });
    }
}
```

Save and Update events are exposed in the Database objects and the Blue Core models which all extend `Obj`.

--

-   Can I customize the Obj class so it automatically supports things like created_at, updated_at, or “soft deletes” (marking as deleted without actually removing the row)?

*   You can, espcially with the event mechanisms. It would be easy to extend, however that feature is already built into the BlueCore framework.

--

-   Can I delay loading customer data until I actually need it (lazy loading)?

Or store customer data temporarily in memory to avoid hitting the database repeatedly (caching)?

-   There is not a robust lazy loading feature formally built into the framework yet, but you can extend that feature in. I would like that to be something we build into the Opus/BlueCore models formally in the next release, though
