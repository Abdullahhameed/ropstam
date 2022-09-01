@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Car</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="post" action="{{ route('cars.store') }}" id="validate_form">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="name">Select Category</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>    
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required data-parsley-trigger="keyup">
                            </div>
                            <div class="form-group mt-2">
                                <label for="color">Color</label>
                                <input type="text" name="color" class="form-control" id="color" placeholder="Color" required data-parsley-trigger="keyup">
                            </div>
                            <div class="form-group mt-2">
                                <label for="model">Model</label>
                                <input type="text" name="model" class="form-control" id="model" placeholder="Model" required data-parsley-trigger="keyup">
                            </div>
                            <div class="form-group mt-2">
                                <label for="make">Make</label>
                                <input type="text" name="make" class="form-control" id="make" placeholder="Make" required data-parsley-trigger="keyup">
                            </div>
                            <div class="form-group mt-2">
                                <label for="registration_no">Registration No</label>
                                <input type="text" name="registration_no" class="form-control" id="registration_no" placeholder="Registration No" required data-parsley-trigger="keyup">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2 mt-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
