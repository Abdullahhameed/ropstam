@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>Category List</h4>
                        <a class="btn btn-success" href="{{ route('categories.create') }}"> Create Category</a>
                    </div>
                </div>

                <div class="card-body mt-3">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered mt-3" id="datatable-crud">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Created at</th>
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
        $('#datatable-crud').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('categories.index') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
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

        $('body').on('click', '.delete', function() {

            if (confirm("Delete Record?") == true) {
                var id = $(this).data('id');

                // ajax
                $.ajax({
                    type: "POST",
                    // url: 'categories.destroy'+(object)id,
                    url: "{{ url('categories/delete') }}",
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(res) {

                        var oTable = $('#datatable-crud').dataTable();
                        oTable.fnDraw(false);
                    }
                });
            }

        });
    });
</script>
</body>


@endsection