<?php

namespace App\Models;

use BlueFission\Obj;
use BlueFission\DataTypes;

class Customer extends Obj
{
    protected $_types = [
        'id' => DataTypes::INTEGER,
        'first_name' => DataTypes::STRING,
        'last_name' => DataTypes::STRING,
        'email' => DataTypes::STRING,
        'phone' => DataTypes::STRING,
        'street' => DataTypes::STRING,
        'city' => DataTypes::STRING,
        'state' => DataTypes::STRING,
        'zip' => DataTypes::STRING,
        'country' => DataTypes::STRING,
        'property_type' => DataTypes::STRING,
        'lot_size' => DataTypes::STRING,
        'has_sprinkler_system' => DataTypes::BOOLEAN,
        'gate_code' => DataTypes::STRING,
        'preferred_day' => DataTypes::STRING,
        'preferred_time' => DataTypes::STRING,
        'service_type' => DataTypes::STRING,
        'service_frequency' => DataTypes::STRING,
        'notes' => DataTypes::STRING,
        'created_at' => DataTypes::DATETIME,
        'updated_at' => DataTypes::DATETIME,
    ];

    public function __construct()
    {
        parent::__construct();

        // Optional: set defaults
        $this->field('country', 'USA');
        $this->field('has_sprinkler_system', false);
    }
}
