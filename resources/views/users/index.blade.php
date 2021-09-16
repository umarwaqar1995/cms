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
<th>Name</th>
<th>User Name</th>
<th>Role</th>
<th>Status</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>Vishnu Serghei</td>
<td>2012/01/01</td>
<td>Member</td>
<td><span class="badge badge-success">Active</span></td>
<td><a class="btn btn-xs btn-primary" href="#">edit</a>
    <a class="btn btn-xs btn-danger" href="#">delete</a>
</td>

</tr>
<tr>
<td>Zbyněk Phoibos</td>
<td>2012/02/01</td>
<td>Staff</td>
<td><span class="badge badge-danger">Banned</span></td>
<td><a class="btn btn-xs btn-primary" href="#">edit</a>
    <a class="btn btn-xs btn-danger" href="#">delete</a>
</td>
</tr>
<tr>
<td>Einar Randall</td>
<td>2012/02/01</td>
<td>Admin</td>
<td><span class="badge badge-secondary">Inactive</span></td>
<td><a class="btn btn-xs btn-primary" href="#">edit</a>
    <a class="btn btn-xs btn-danger" href="#">delete</a>
</td>
</tr>
<tr>
<td>Félix Troels</td>
<td>2012/03/01</td>
<td>Member</td>
<td><span class="badge badge-warning">Pending</span></td>
<td><a class="btn btn-xs btn-primary" href="#">edit</a>
    <a class="btn btn-xs btn-danger" href="#">delete</a>
</td>
</tr>
<tr>
<td>Aulus Agmundr</td>
<td>2012/01/21</td>
<td>Staff</td>
<td><span class="badge badge-success">Active</span></td>
<td><a class="btn btn-xs btn-primary" href="#">edit</a>
    <a class="btn btn-xs btn-danger" href="#">delete</a>
</td>
</tr>
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