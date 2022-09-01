@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Car</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="post" action="{{ route('cars.update', $car) }}" id="validate_form">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Select Category</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @selected($category->id == $car->category_id)>{{ $category->name }}</option>    
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $car->name }}" class="form-control" id="name" placeholder="Name"  required data-parsley-trigger="keyup">
                            </div>
                            <div class="form-group mt-2">
                                <label for="color">Color</label>
                                <input type="text" name="color" value="{{ $car->color }}" class="form-control" id="color" placeholder="Color"  required data-parsley-trigger="keyup">
                            </div>
                            <div class="form-group mt-2">
                                <label for="model">Model</label>
                                <input type="text" name="model" value="{{ $car->model }}" class="form-control" id="model" placeholder="Model"  required data-parsley-trigger="keyup">
                            </div>
                            <div class="form-group mt-2">
                                <label for="make">Make</label>
                                <input type="text" name="make" value="{{ $car->make }}" class="form-control" id="make" placeholder="Make"  required data-parsley-trigger="keyup">
                            </div>
                            <div class="form-group mt-2">
                                <label for="registration_no">Registration No</label>
                                <input type="text" name="registration_no" value="{{ $car->registration_no }}" class="form-control" id="registration_no" placeholder="Registration No"  required data-parsley-trigger="keyup">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2 mt-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
