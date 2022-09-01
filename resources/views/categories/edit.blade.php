@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit Category</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="post" action="{{ route('categories.update', $category) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" name="name" value="{{ $category->name }}" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="description">Discription</label>
                                <textarea class="form-control" name="description" id="description" rows="3">{{ $category->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2 mt-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
