@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <a class="btn btn-success" href="{{ route("sales.create") }}">
        Add Sale
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
    <th>Agent ID</th>
    <th>Agent Name</th>
    <th>Service Provider</th>
    <th>Status</th>
    <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($sales as $key => $sale)
    <tr data-entry-id="{{ $sale->id }}">
    <td></td>
    <td>{{ $sale->agent_id ?? '' }}</td>
    <td>{{ $sale->agent_name ?? '' }}</td>
    <td>{{ $sale->service_provider ?? '' }}</td>
    <td><span class="badge badge-success">Active</span></td>
    <td><a class="btn btn-xs btn-primary" href="{{route('sales.edit', $sale->id)}}">edit</a>
        <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" onsubmit="return confirm('{{ trans('Are You Sure') }}');" style="display: inline-block;">
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