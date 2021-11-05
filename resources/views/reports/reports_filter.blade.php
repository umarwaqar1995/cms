@extends('layouts.app')
@section('content')
    <form action="{{route('view_results')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @csrf_field
        {{-- {{ method_field('PUT') }} --}}
        {{-- @method('PUT') --}}
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><strong>Get Reports </strong></div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Start Date:</label>
                                <input type="date" name="from" class="form-control" id="validationCustom01"
                                    placeholder="Start Date" value="Mark" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">End Date:</label>
                                <input type="date" name="to" class="form-control" id="validationCustom02"
                                    placeholder="Last name" value="Otto" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <div class="input-group-prepend"><span class="input-group-text">Select Agent</span>
                                    </div>
                                    <div class="col-md-10">
                                        <select class="form-control" id="agent_name" name="agent_name"
                                            required>
                                            <option>Select Agent</option>
                                            {{-- @foreach ($users as $user)
                                                <option value="{{ $user['name'] }}">{{ $user['name'] }}</option>

                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">View All Sales</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Pending Sales</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Cancelled Sales</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Declined Sales</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button style="margin-top: -30px;" class="btn btn-primary" type="submit">Get Results</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
