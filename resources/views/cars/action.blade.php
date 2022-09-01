
<a href="{{ route('cars.edit',$id) }}" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-success edit">
    <i class="fa fa-edit" aria-hidden="true"></i>
</a>
<form action="{{ route('cars.destroy', $id) }}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button class="btn btn-danger m-1"><i class="fa fa-trash" aria-hidden="true"></i></button>
</form>