@extends('base')

@section('content')
<h1>Edit</h1>

<div class="row">
    <div class="col-md-4">
        {!! Form::model($cars, ['url'=>'/edit-car/' . $cars->id, 'method'=>'put']) !!}

        <div class="mb-3">
            {!! Form::label("Make", "Make:") !!}
            {!! Form::text("Make", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("Model", "Model:") !!}
            {!! Form::text("Model", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("Year", "Year:") !!}
            {!! Form::number("Year", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("plate_no", "Plate Number:") !!}
            {!! Form::text("plate_no", null, ['class'=>'form-control']) !!}
        </div>

        <button class="btn btn-primary" type="submit">Save</button>

        {!! Form::close() !!}
    </div>
</div>
@endsection
