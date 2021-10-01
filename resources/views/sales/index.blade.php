@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <a style="margin-top: -35px;" class="btn btn-success" href="{{ route("sales.create") }}">
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
    <th>#</th>
    <th>Sale ID</th>
    <th>Customer Name</th>
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
    <td>{{ $sale->id ?? '' }}</td>
    <td>{{ $sale->first_name  ?? '' }}&nbsp;{{ $sale->last_name  ?? '' }}</td>
    <td>{{ $sale->service_provider ?? '' }}</td>
    <td><span class="badge badge-success">{{ $sale->status->name ?? '' }}</span></td>
    <td><a class="btn btn-xs btn-primary" href="{{route('sales.edit', $sale->id)}}">edit</a>
        <a class="btn btn-xs btn-info" href="{{route('sales.show', $sale->id)}}">view</a>
        <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" onsubmit="return confirm('{{ trans('Are You Sure') }}');" style="display: inline-block;">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-xs btn-danger" value="delete">
        </form>
        {{-- <a class="btn btn-xs btn-success" href="{{route('sales/proceed', $sale->id)}}">proceed </a> --}}
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