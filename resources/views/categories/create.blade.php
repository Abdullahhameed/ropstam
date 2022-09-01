@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Create Category</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="post" action="{{ route('categories.store') }}" id="validate_form">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" name="name" class="form-control" id="name" placeholder="Name"  required data-parsley-trigger="keyup">
                            </div>
                            <div class="form-group">
                                <label for="description">Discription</label>
                                <textarea class="form-control" name="description" id="description" rows="3" required data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="50" data-parsley-minlength-message="Come on! You need to enter at least a 10 character comment.." data-parsley-validation-threshold="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2 mt-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
