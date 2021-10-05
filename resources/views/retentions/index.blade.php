@extends('layouts.app')
@section('content')
{{-- <div class="col-lg-12">
    <a class="btn btn-success" href="{{ route("processings.create") }}">
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


    @if($sale->status->name=='Completed')
    <td><span class="badge badge-success">{{ $sale->status->name ?? '' }}</span></td>
    @elseif($sale->status->name=='Processed')
    <td><span class="badge badge-info">{{ $sale->status->name ?? '' }}</span></td>
    @endif


    {{-- <td><a class="btn btn-xs btn-info" href="{{route('retentions.show', $sale->id)}}">view</a> --}}
    @if($sale->status_id ==7)
    <td></td>  
    @else
    <td><a class="btn btn-xs btn-primary" href="{{route('retentions.edit', $sale->id)}}">proceed</a></td>
    @endif    

    
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