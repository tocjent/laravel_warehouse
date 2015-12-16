<?php
namespace App\Core\Company;

use Illuminate\Database\Eloquent\Model;
use App\Core\Common\Address;

class Company extends Model
{
    protected $fillable = ['name', 'NIP'];

    protected $guarded = ['address'];

    /**
     * @return Address
     */
    public function address()
    {
        return $this->hasOne('App\Core\Common\Address', 'id', 'address_id');
    }
}
