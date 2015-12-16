<?php
namespace App\Core\Company;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function address()
    {
        return $this->hasOne('App\Core\Address', 'id', 'address_id');
    }
}
