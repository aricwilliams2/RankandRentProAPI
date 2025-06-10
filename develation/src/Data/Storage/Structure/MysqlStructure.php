<?php
namespace BlueFission\Data\Storage\Structure;

/**
 * Class MySQLStructure
 *
 * Extends the base Structure class and implements a structure specific to MYSQL database.
 */
class MySQLStructure extends Structure {
	/**
	 * Fields of the table
	 *
	 * @var array
	 */
	protected $_fields = [];

	/**
	 * Comment of the table
	 *
	 * @var string
	 */
	protected $_comment;

	/**
	 * Query for creating the table
	 *
	 * @var array
	 */
	protected $_query = [];

	/**
	 * Definitions of the fields
	 *
	 * @var array
	 */
	protected $_definitions = [];

	/**
	 * Additional field properties
	 *
	 * @var array
	 */
	protected $_extras = [];

	/**
	 * Additional table properties
	 *
	 * @var array
	 */
	protected $_additions = [];

	/**
	 * Constant for numeric field type
	 */
	const NUMERIC_FIELD = 'numeric';

	/**
	 * Constant for decimal field type
	 */
	const DECIMAL_FIELD = 'decimal';

	/**
	 * Constant for boolean field type
	 */
	const BOOLEAN_FIELD = 'boolean';

	/**
	 * Constant for tinytext field type
	 */
	const TINYTEXT_FIELD = 'tinytext';

	/**
	 * Constant for text field type
	 */
	const TEXT_FIELD = 'text';

	/**
	 * Constant for mediumtext field type
	 */
	const MEDIUMTEXT_FIELD = 'mediumtext';

	/**
	 * Constant for longtext field type
	 */
	const LONGTEXT_FIELD = 'longtext';

	/**
	 * Constant for json field type
	 */
	const JSON_FIELD = 'json';

	/**
	 * Constant for date field type
	 */
	const DATE_FIELD = 'date';

	/**
	 * Constant for datetime field type
	 */
	const DATETIME_FIELD = 'datetime';

	/**
	 * MySQLStructure constructor.
	 *
	 * @param string $name The name of the table.
	 */
	public function __construct($name)
	{
		$this->_query[] = "CREATE TABLE `{$name}`";
	}

	/**
	 * Creates a new field for the table
	 *
	 * @param string $name Name of the field
	 * @param string $type Type of the field
	 * @param null|int $size Size of the field
	 *
	 * @return MySQLField
	 */
	private function newField($name, $type, $size = null)
	{
		$field = new MySQLField($name);
		$field->type($type)->size($size);
		$this->_fields[$name] = $field;

		return $field;
	}

	/**
	 * Adds a comment to the table
	 *
	 * @param string $text Comment for the table
	 */
	public function comment($text) {
		$this->_comment = $text;
	}

	/**
	 * Adds a primary field to the table
	 *
	 * @param string $name Name of the primary field
	 * @param int $size Size of the primary field
	 */
	public function primary($name, $size = 11)
	{
		$this->numeric($name, 11)->primary();
	}

	/**
	 * Adds an incrementing primary field to the table
	 *
	 * @param string $name Name of the incrementing field
	 * @param int $size Size of the incrementing field
	 */
	public function incrementer($name, $size = 11)
	{
		$this->numeric($name, 11)->primary()->autoincrement();
	}

	/**
	 * Creates a new numeric field.
	 *
	 * @param string $name The name of the field.
	 * @param int $size The size of the field.
	 * @return object
	 */
	public function numeric($name, $size = 11)
	{
		return $this->newField($name, self::NUMERIC_FIELD, $size);
	}

	/**
	 * Creates a new decimal field.
	 *
	 * @param string $name The name of the field.
	 * @param int $size The size of the field.
	 * @return object
	 */
	public function decimal($name, $size = 11)
	{
		return $this->newField($name, self::DECIMAL_FIELD, $size);
	}

	/**
	 * Creates a new boolean field.
	 *
	 * @param string $name The name of the field.
	 * @param int $size The size of the field.
	 * @return object
	 */
	public function boolean($name, $size = 1)
	{
		return $this->newField($name, self::BOOLEAN_FIELD, $size);
	}

	/**
	 * Creates a new text field.
	 *
	 * @param string $name The name of the field.
	 * @param int $size The size of the field.
	 * @return object
	 */
	public function tinytext($name, $size = 255)
	{
		return $this->newField($name, self::TINYTEXT_FIELD, $size);
	}

	/**
	 * Creates a new text field.
	 *
	 * @param string $name The name of the field.
	 * @param int $size The size of the field.
	 * @return object
	 */
	public function text($name, $size = 45)
	{
		return $this->newField($name, self::TEXT_FIELD, $size);
	}

	/**
	 * Creates a new mediumtext field.
	 *
	 * @param string $name The name of the field.
	 * @param int $size The size of the field.
	 * @return object
	 */
	public function mediumtext($name, $size = null)
	{
		return $this->newField($name, self::MEDIUMTEXT_FIELD, $size);
	}

	/**
	 * Creates a new longtext field.
	 *
	 * @param string $name The name of the field.
	 * @param int $size The size of the field.
	 * @return object
	 */
	public function longtext($name, $size = null)
	{
		return $this->newField($name, self::LONGTEXT_FIELD, $size);
	}

	/**
	 * Creates a new json field.
	 *
	 * @param string $name The name of the field.
	 * @return object
	 */
	public function json($name)
	{
		return $this->newField($name, self::JSON_FIELD);
	}

	/**
	 * Creates a new date field.
	 *
	 * @param string $name The name of the field.
	 * @return object
	 */
	public function date($name)
	{
		return $this->newField($name, self::DATE_FIELD);
	}

	/**
	 * Creates a new datetime field.
	 *
	 * @param string $name The name of the field.
	 * @return object
	 */
	public function datetime($name)
	{
		return $this->newField($name, self::DATETIME_FIELD);
	}

	/**
	 * Creates two new datetime fields: "created" and "updated".
	 *
	 * @return void
	 */
	public function timestamps()
	{
		$this->datetime('created');
		$this->datetime('updated');
	}

	/**
	 * Builds the table.
	 *
	 * @return string
	 */
	public function build()
	{
		foreach ($this->_fields as $field) {
			$this->_definitions[] = $field->definition();
			
			$extras = $field->extras();
			if ( $extras ) {
				$this->_extras[] = $extras;
			}
			
			$additions = $field->additions();
			if ( $additions ) {
				$this->_additions[] = $additions;
			}
		}

		if ( $this->_comment ) {
			$this->_additions[] = "COMMENT='".addslashes($this->_comment)."'";
		}

		$definitions = array_merge($this->_definitions, $this->_extras);

		$this->_query[] = "(". implode(",\n", $definitions) . ")";

		$this->_query = array_merge($this->_query, $this->_additions);
		
		$query = implode("\n", $this->_query);

		$query .= ';';

		return $query;
	}

}