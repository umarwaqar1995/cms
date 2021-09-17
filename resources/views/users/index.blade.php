@extends('layouts.app')

@section('content')
<div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("users.create") }}">
                Add User
            </a>
        </div>
    
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header"><i class="fa fa-align-justify"></i> Combined All Table</div>
<div class="card-body">
<table class="table table-responsive-sm table-bordered table-striped table-sm">
<thead>
<tr>
<th></th>
<th>Name</th>
<th>User Name</th>
<th>Role</th>
<th>Status</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach($users as $key => $user)
<tr data-entry-id="{{ $user->id }}">
<td></td>
<td>{{ $user->name ?? '' }}</td>
<td>{{ $user->email ?? '' }}</td>
<td>{{ $user->role ?? '' }}</td>
<td><span class="badge badge-success">Active</span></td>
<td><a class="btn btn-xs btn-primary" href="{{route('users.edit', $user->id)}}">edit</a>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('Are You Sure') }}');" style="display: inline-block;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-xs btn-danger" value="delete">
    </form>
</td>

</tr>
@endforeach
</tbody>
</table>
<nav>
<ul class="pagination">
<li class="page-item"><a class="page-link" href="#">Prev</a></li>
<li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">4</a></li>
<li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
</nav>
</div>
</div>
</div>

</div>


@endsection