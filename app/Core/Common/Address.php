<?php
namespace App\Core\Common;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['street', 'postalCode', 'city'];
}
