<?php

namespace App\Data;

use Livewire\Wireable;
 
class Customer implements Wireable
{
    // protected $name;
    // protected $age;
    
    public $name;
    public $age;
 
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
 
    // Dari state component ke json
    public function toLivewire()
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
        ];
    }
 
    // Dari json kembali ke object php lagi
    public static function fromLivewire($value)
    {
        $name = $value['name'];
        $age = $value['age'];
 
        return new static($name, $age);
    }
}