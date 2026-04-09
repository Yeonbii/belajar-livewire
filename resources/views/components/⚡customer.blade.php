<?php

use App\Data\Customer;
use Livewire\Component;

new class extends Component
{
    public Customer $customer;
 
    public function mount()
    {
        $this->customer = new Customer('Caleb', 29);
    }
};
?>

<div>
  <h3>Nama {{ $this->customer->name }}</h3>
  <h4>Umur {{ $this->customer->age }}</h4>
</div>