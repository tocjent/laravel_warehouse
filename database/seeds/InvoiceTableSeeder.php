<?php

use Illuminate\Database\Seeder;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoices = factory(App\Core\Invoice\Invoice::class, 5)->create();
        foreach ($invoices as $invoice) {
            $items = factory(App\Core\Invoice\InvoiceItem::class, 5)->make();
            foreach($items as $item) {
                $item->invoice_id = $invoice->id;
                $item->save();
            }
            $invoice->save();
        }
    }
}
