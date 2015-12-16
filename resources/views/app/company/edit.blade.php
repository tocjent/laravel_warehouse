@extends('app.layout')

@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="card-title">
                @if($company->id)
                    Company #{{$company->id}}
                @else
                    New company
                @endif
            </h4>
        </div>
        <div class="card-block m-x-1">
            {!! Form::model($company, ['route' => ['company_save', $company->id]]) !!}
            <div class="row m-a-1">
                <div class="form-group row">
                    <div class="col-xs-6">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                        {!! Form::label('NIP', 'NIP') !!}
                        {!! Form::text('NIP', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-12">
                        {!! Form::label('address') !!}
                    </div>
                    <div class="col-xs-4">
                        {!! Form::text('address[street]', $company->address->street, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-4">
                        {!! Form::text('address[postalCode]', $company->address->postalCode, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-4">
                        {!! Form::text('address[city]', $company->address->city, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group row m-b-1">
                    <button type="submit" class="btn btn-primary btn-block">
                        Save
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
