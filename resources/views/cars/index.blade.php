@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>Car List</h4>
                        <a class="btn btn-success" href="{{ route('cars.create') }}"> Create Car</a>
                    </div>
                </div>

                <div class="card-body mt-3">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered mt-3" id="datatable-crud-car">
                        
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Name</th>
                                <th>Color</th>
                                <th>Model</th>
                                <th>RegistrationNo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#datatable-crud-car').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('cars.index') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'category.name',
                    name: 'category'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'color',
                    name: 'color'
                },
                {
                    data: 'model',
                    name: 'model'
                },
                {
                    data: 'registration_no',
                    name: 'registration_no'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                },
            ],
            order: [
                [0, 'desc']
            ]
        });

    });
</script>
</body>


@endsection