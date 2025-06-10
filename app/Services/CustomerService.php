<?php

namespace App\Services;

use App\Models\Customer;
use BlueFission\Services\Database;
use BlueFission\DevElation;
use BlueFission\Net\HTTPClient; 
use BlueFission\Connections\Curl;


class CustomerService
{
    public static function all()
    {
        return Database::query('SELECT * FROM customers');
    }

    public static function find($id)
    {
        $result = Database::query("SELECT * FROM customers WHERE id = ?", [$id]);
        return $result[0] ?? null;
    }

    public static function create(array $data)
    {
        $customer = new Customer();
        $customer->assign($data);
    
        DevElation::do('before.save.customer', $customer);
    
        $saved = Database::save('customers', $customer->toArray());
    
        // ✅ Setup the Curl request manually
        $curl = new Curl();
        $curl->url('https://webhook.site/your-real-id');
        $curl->method('POST');
        $curl->header('Content-Type: application/json');
        $curl->data(json_encode([
            'email' => $customer->field('email'),
            'name' => $customer->field('first_name') . ' ' . $customer->field('last_name'),
            'created_at' => now(),
        ]));
    
        // ✅ Process request using HTTPClient
        $client = new HTTPClient($curl);
        $client->process(); // <--- This is the real method that executes the HTTP request
    
        return $saved;
    }

    public static function update($id, array $data)
    {
        $data['id'] = $id;
        $customer = new Customer();
        $customer->assign($data);

        DevElation::do('before.save.customer', $customer);

        return Database::save('customers', $customer->toArray());
    }

    public static function delete($id)
    {
        return Database::query("DELETE FROM customers WHERE id = ?", [$id]);
    }
}
