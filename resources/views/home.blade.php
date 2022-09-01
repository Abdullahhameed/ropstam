@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card text-center mx-auto" style="width:400px">
                        <div class="card-body">
                          <h4 class="card-title">Total Cars</h4>
                          <p class="card-text text-danger">{{ $car }}</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
