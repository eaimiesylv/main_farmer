<?php 
namespace App\Traits;

Trait ConvertUserTypeTrait{
    // Accessor: Convert numeric value to string representation
    public function getTypeAttribute($value)
    {
        switch ($value) {
            case 1:
                return 'franchise';
            case 2:
                return 'franchisee';
            case 3:
                return 'retail_customer';
           case 4:
               return 'agent';
            default:
                return 'unknown';
        }
    }

    // Mutator: Convert string representation to numeric value
    public function setTypeAttribute($value)
    {
        switch ($value) {
            case 'franchise':
                $this->attributes['type'] = 1;
                break;
            case 'franchisee':
                $this->attributes['type'] = 2;
                break;
            case 'retail_customer':
                $this->attributes['type'] = 3;
                break;
            case 'agent':
               $this->attributes['type'] = 4;
               break;
            default:
                $this->attributes['type'] = 0; // You can set a default value or handle the case accordingly
        }
    }
}








?>