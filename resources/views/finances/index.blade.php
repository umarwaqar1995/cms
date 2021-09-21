@extends('layouts.app')
@section('content')
{{-- <div class="col-lg-12">
    <a class="btn btn-success" href="{{ route("sales.create") }}">
        Add Sale
    </a>
</div> --}}
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

    @if(!@empty($sales) && $sales->count())

    @foreach($sales as $key => $sale)
    <tr data-entry-id="{{ $sale->id }}">


    <td>{{ ($sales->currentPage()-1)*($sales->perPage())+ ($key+1)  }}</td>
    <td>{{ $sale->agent_id ?? '' }}</td>
    <td>{{ $sale->agent_name ?? '' }}</td>
    <td>{{ $sale->service_provider ?? '' }}</td>
    <td><span class="badge badge-success">Active</span></td>
    <td><a class="btn btn-xs btn-primary" href="{{route('finances.edit', $sale->id)}}">proceed</a>
        {{-- <form action="{{ route('finance.destroy', $finance->id) }}" method="POST" onsubmit="return confirm('{{ trans('Are You Sure') }}');" style="display: inline-block;">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-xs btn-danger" value="delete">
        </form> --}}
    </td>
    
    </tr>
    @endforeach
    @else
    <tr>
       <td colspan="10">There are no data.</td>
    </tr>
    @endif 
    </tbody>
    </table>
    {{ $sales->links() }}
    </div>
    </div>
    </div>
    
    </div>

@endsection