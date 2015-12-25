@extends('app.layout')

@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="card-title">
                @if($invoice->id)
                    Invoice #{{$invoice->id}}
                @else
                    New invoice
                @endif
            </h4>
        </div>
        <div class="card-block m-x-1">
            {!! Form::model($invoice, ['route' => ['invoice_save', $invoice->id]]) !!}
                <div class="row m-a-1">
                    <div class="form-group row col-sm-12 col-md-6">
                        <div class="col-xs-12">
                            {!! Form::label('number', 'Number') !!}
                            <p>{{$invoice->number}}</p>
                        </div>
                    </div>
                    <div class="form-group row col-sm-12 col-md-6">
                        <div class="col-xs-12">
                            {!! Form::label('sellerName', 'Seller name') !!}
                            {!! Form::text('sellerName', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-xs-12">
                            {!! Form::label('sellerNIP', 'Seller NIP') !!}
                            {!! Form::text('sellerNIP', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group col-xs-12 row">
                        <table class="table table-condensed">
                            <tr>
                                <th>#</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                            @foreach($invoice->items()->get() as $key => $item)
                            <tr class="items-row">
                                <td>{{$key + 1}}</td>
                                <td>{!! Form::text('items[' . $key . '][productCode]', $item->productCode, ['class' => 'form-control']) !!}</td>
                                <td>{!! Form::text('items[' . $key . '][productName]', $item->productName, ['class' => 'form-control']) !!}</td>
                                <td>{!! Form::text('items[' . $key . '][quantity]', $item->quantity, ['class' => 'form-control']) !!}</td>
                                <td>{!! Form::text('items[' . $key . '][price]', $item->price, ['class' => 'form-control']) !!}</td>
                                {!! Form::hidden('items[' . $key . '][id]', $item->id, ['class' => 'form-control']) !!}
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="5">
                                    <button type="button" class="btn btn-secondary btn-block" id="add-item-button">
                                        Add item
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group row m-b-1 col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block">
                            Save
                        </button>
                    </div>
                </div>
            {!! Form::close() !!}
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $('#add-item-button').on('click', function(e) {
                        var rowKey = $('.items-row').length;
                        var rowTemplate = ''
                            + '<tr class="items-row">'
                            + '<td>' + (rowKey + 1) + '</td>'
                            + '<td>{!! Form::text('items[__rowKey__][productCode]', null, ['class' => 'form-control']) !!}</td>'
                            + '<td>{!! Form::text('items[__rowKey__][productName]', null, ['class' => 'form-control']) !!}</td>'
                            + '<td>{!! Form::text('items[__rowKey__][quantity]', null, ['class' => 'form-control']) !!}</td>'
                            + '<td>{!! Form::text('items[__rowKey__][price]', null, ['class' => 'form-control']) !!}</td>'
                            + '{!! Form::hidden('items[__rowKey__][id]', -1, ['class' => 'form-control']) !!}'
                            + '</tr>';
                        $(rowTemplate.replace(/__rowKey__/g, rowKey)).insertBefore($(e.target).parents('tr'));
                    });
                });
            </script>
        </div>
    </div>
@endsection
