@extends('base')

@section('content')

<div class="float-end">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
        <i class="fa-solid fa-circle-plus"></i>Add
    </button>
</div>

<h1>Cars</h1>

<table class="table table-bordered">
    <thead>
        <tr class="bg-primary text-white">
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
            <th>Plate Number</th>
            <th class="text-center">Edit</th>
            <th class="text-center">Delete</th>
        </tr>
        <style>
            .table{
                box-shadow: 10px 10px 20px 1px rgba(0, 0, 0, 0.199);
                font-family: sans-serif

            }
        </style>
    </thead>
    <tbody>

        @foreach($cars as $car)
            <tr>
                <td>{{$car->Make}}</td>
                <td>{{$car->Model}}</td>
                <td>{{$car->Year}}</td>
                <td class="text-end">{{$car->plate_no}}</td>
                <td class="text-center">
                    <a href="{{url('/edit-car/' . $car->id)}}" class="btn btn-success">
                        <i class="fa-sharp fa-solid fa-pen-to-square"></i>Edit
                </a></td>
                <td class="text-center">
                    <a href="{{url('/delete-car/'. $car->id)}}" class="btn btn-danger">
                        <i class="fa-solid fa-dumpster-fire"></i>Delete
                </a></td>
            </tr>
        @endforeach

    </tbody>
</table>

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add to Car List</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="d-grid gap-4 col-8 mx-auto">
                {{-- <a href="{{url('/employees/create')}}" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>Add</a>
                <a href="{{url('/employees/edit')}}" class="btn btn-success"><i class="fa-solid fa-user-pen"></i>Edit</a>
                <button type="button" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}

                <h1>Add Car</h1>

                <div class="row">
                    <div class="col-md-12">
                        {!! Form::open(['url'=>'/cars', 'method'=>'post']) !!}

                        <div class="mb-3">
                            {!! Form::label("make", "Make:") !!}
                            {!! Form::text("make", null, ['class'=>'form-control','placeholder'=>""]) !!}
                        </div>

                        <div class="mb-3">
                            {!! Form::label("model", "Model:") !!}
                            {!! Form::text("model", null, ['class'=>'form-control','placeholder'=>""]) !!}
                        </div>

                        <div class="mb-3">
                            {!! Form::label("year", "Year:") !!}
                            {!! Form::number("year", null, ['class'=>'form-control','placeholder'=>""]) !!}
                        </div>

                        <div class="mb-3">
                            {!! Form::label("plate_no", "Plate Number:") !!}
                            {!! Form::text("plate_no", null, ['class'=>'form-control','placeholder'=>""]) !!}
                        </div>

                        <button class="btn btn-primary" type="submit">Save</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>



@endsection
