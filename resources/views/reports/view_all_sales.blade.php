@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i> All Sales</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sale ID</th>
                                <th>Customer Name</th>
                                <th>Serivce Provider</th>
                                <th>Agent Name</th>
                                <th>Role</th>
                                <th>Sale Status</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($sales as $key => $sale)
                                <tr data-entry-id="{{ $sale->id ?? '' }}">

                                    <td>{{ $key + 1 ?? '' }}</td>
                                    <td>{{ $sale->id ?? '' }}</td>
                                    <td>{{ $sale->first_name ?? '' }}&nbsp;&nbsp;{{ $sale->last_name ?? '' }}</td>
                                    <td>{{ $sale->service_provider ?? '' }}</td>
                                    <td>{{ $sale->agent_name ?? '' }}</td>
                                    <td>{{ $sale->Agent_id->Roles->title ?? '' }}</td>




                                    <!-------------------------Sale Status = "1.Pending"---------------------------->

                                    @if ($sale->status->name == 'Pending')

                                        <td><span class="badge badge-info">{{ $sale->status->name ?? '' }}</span></td>

                                        <!-------------------------Sale Status = "2.Declined"---------------------------->

                                    @elseif($sale->status->name=='Declined')

                                        <td><span class="badge badge-warning">{{ $sale->status->name ?? '' }}</span></td>

                                        <!-------------------------Sale Status = "3.Charged"---------------------------->

                                    @elseif($sale->status->name=='Charged')

                                        <td><span class="badge badge-success">{{ $sale->status->name ?? '' }}</span></td>

                                        <!-------------------------Sale Status = "4.Cancelled"---------------------------->

                                    @elseif($sale->status->name=='Cancelled')

                                        <td><span class="badge badge-danger">{{ $sale->status->name ?? '' }}</span></td>

                                        <!-------------------------Sale Status = "6.Initiate"---------------------------->

                                    @elseif($sale->status->name=='Initiate')

                                        <td><span class="badge badge-primary">{{ $sale->status->name ?? '' }}</span></td>

                                        <!-------------------------Sale Status = "7.Completed"---------------------------->

                                    @elseif($sale->status->name=='Completed')

                                        <td><span class="badge badge-success">{{ $sale->status->name ?? '' }}</span></td>

                                        <!-------------------------Sale Status = "8.Processed"---------------------------->

                                    @elseif($sale->status->name=='Processed')

                                        <td><span class="badge badge-info">{{ $sale->status->name ?? '' }}</span></td>


                                        <!-------------------------Sale Status = "9.Request To Refund"---------------------------->

                                    @elseif($sale->status->name=='Request to Refund')

                                        <td><span class="badge badge-secondary">{{ $sale->status->name ?? '' }}</span>
                                        </td>

                                        <!-------------------------Sale Status = "10.Returned"---------------------------->

                                    @elseif($sale->status->name=='Returned')

                                        <td><span class="badge badge-dark">{{ $sale->status->name ?? '' }}</span></td>


                                    @endif

                                    {{-- <td> {{App\Http\Controllers\SalesController::get_user_info( $comment->user_id)->name}} </td> --}}
                                    {{-- <td> {{(App\Http\Controllers\SalesController::get_user_role( $comment->user_id))}} </td> --}}
                                    {{-- <td style="white-space: nowrap;"> {{ $sale->service_provider  ?? '' }} </td> --}} --}}

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
