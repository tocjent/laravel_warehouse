<?php

namespace App\Core\Invoice;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['sellerName', 'sellerNIP'];
}
