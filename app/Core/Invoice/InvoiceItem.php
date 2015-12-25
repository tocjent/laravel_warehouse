<?php

namespace App\Core\Invoice;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    protected $table = 'invoice_items';

    /**
     * @return Invoice
     */
    public function invoice()
    {
        return $this->belongsTo('App\Core\Invoice\Invoice');
    }
}
