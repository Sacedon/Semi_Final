@extends('base')

@section('content')

    <h1>Delete this Car?</h1>

    <div class="row w-50">
        <div class="col md-5 ">
            {!! Form::model($cars, ['url'=>'/edit-car/' . $cars->id]) !!}
                <div class="infos">
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

                </div>

            </div>

            {!! Form::close() !!}

            <form action="{{url('/confirmdelete-car/'.$cars->id)}}" method="post">
                {{ method_field('DELETE')}}
                {{ csrf_field()}}
                <div class="form-group float-end">
                    <button href="" class="btn btn-success m-1" type="submit"> <i class="fa fa-check" aria-hidden="true"></i> &nbsp; Yes</button>
                    <a href="/" class="btn btn-warning m-1"> <i class="fa fa-times" aria-hidden="true"></i> &nbsp; No</a>
                </div>

            </form>

        </div>
    </div>
@endsection
