<?php

namespace App\Core\Invoice;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['sellerName', 'sellerNIP'];

    protected $table = 'invoices';

    /**
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany('App\Core\Invoice\InvoiceItem');
    }
}
