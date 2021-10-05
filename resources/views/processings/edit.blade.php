@extends('layouts.app')
@section('content')

    
<form action="{{route('processings.update', [$sale->id] )}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><b>Customer Information</b></div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">First Name</span></div>
                                    <input class="form-control"  type="text" name="customer_first_name" disabled autocomplete="name" value="{{ old('first_name', isset($sale) ? $sale->first_name : '') }}">
                                    <input class="form-control"  type="text" name="customer_first_name" hidden autocomplete="name" value="{{ old('first_name', isset($sale) ? $sale->first_name : '') }}">
                                        <span class="input-group-text">
                                            <i class="cil-user"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Last Name</span></div>
                                    <input class="form-control" type="text" name="customer_last_name" disabled autocomplete="name" value="{{ old('last_name', isset($sale) ? $sale->last_name : '') }}">
                                    <input class="form-control" type="text" name="customer_last_name" hidden autocomplete="name" value="{{ old('last_name', isset($sale) ? $sale->last_name : '') }}">
                                        <span class="input-group-text">
                                            <i class="cil-user"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Email</span></div>
                                    <input class="form-control"  type="email" name="customer_email" disabled value="{{ old('customer_email', isset($sale) ? $sale->customer_email : '') }}">
                                    <input class="form-control"  type="email" name="customer_email" hidden value="{{ old('customer_email', isset($sale) ? $sale->customer_email : '') }}">
                                        <span class="input-group-text">
                                            <i class="cil-envelope-open"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Phone :</span></div>
                                    <input class="form-control"  type="tel" name="phone_number" disabled value="{{ old('phone_number', isset($sale) ? $sale->phone_number : '') }}">
                                    <input class="form-control"  type="tel" name="phone_number" hidden value="{{ old('phone_number', isset($sale) ? $sale->phone_number : '') }}">
                                        <span class="input-group-text">
                                            <i class="cil-fingerprint"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Alternate Phone :</span></div>
                                    <input class="form-control"  type="tel" name="alt_phone_number" disabled value="{{ old('alt_phone_number', isset($sale) ? $sale->alt_phone_number : '') }}">
                                    <input class="form-control"  type="tel" name="alt_phone_number" hidden value="{{ old('alt_phone_number', isset($sale) ? $sale->alt_phone_number : '') }}">
                                        <span class="input-group-text">
                                            <i class="cil-fingerprint"></i>
                                        </span>
                            </div>
                        </div>           
                    </div>
            </div>      
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><b>Customer Address</b></div>
                    <div class="card-body"> 
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Street Address</span></div>
                                    <input class="form-control" id="agent_name" type="text" name="street_address" disabled value="{{ old('street_address', isset($sale) ? $sale->street_address : '') }}">
                                    <input class="form-control" id="agent_name" type="text" name="street_address" hidden value="{{ old('street_address', isset($sale) ? $sale->street_address : '') }}">
                                        <span class="input-group-text">
                                            <i class="cil-user"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">City</span></div>
                                    <input class="form-control"  type="text" name="city" disabled value="{{ old('city', isset($sale) ? $sale->city : '') }}">
                                    <input class="form-control"  type="text" name="city" hidden value="{{ old('city', isset($sale) ? $sale->city : '') }}">
                                        <span class="input-group-text">
                                            <i class="cil-envelope-open"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">State</span></div>
                                    <input class="form-control" id="state" type="text" name="state" disabled value="{{ old('state', isset($sale) ? $sale->state : '') }}">
                                    <input class="form-control" id="state" type="text" name="state" hidden value="{{ old('state', isset($sale) ? $sale->state : '') }}">
                                        <span class="input-group-text">
                                            <i class="cil-fingerprint"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Zip Code</span></div>
                                    <input class="form-control" id="zip" name="zip" disabled type="text" pattern="[0-9]*" value="{{ old('zip', isset($sale) ? $sale->zip : '') }}">
                                    <input class="form-control" id="zip" name="zip" hidden type="text" pattern="[0-9]*" value="{{ old('zip', isset($sale) ? $sale->zip : '') }}">
                                        <span class="input-group-text">
                                            <i class="cil-clock"></i>
                                        </span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header"><strong>Credit Card</strong></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                        <input class="form-control" id="name" type="text" placeholder="Enter your name" name ="cc_name" disabled value="{{ old('cc_name', isset($c_card) ? $c_card->cc_name : '') }}">
                                        <input class="form-control" id="name" type="text" placeholder="Enter your name" name ="cc_name" hidden value="{{ old('cc_name', isset($c_card) ? $c_card->cc_name : '') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="ccnumber">Credit Card Number</label>
                                        <input class="form-control" id="ccnumber" type="text" placeholder="0000 0000 0000 0000" name ="cc_number" disabled value="{{ old('cc_number', isset($c_card) ? $c_card->cc_number : '') }}">
                                        <input class="form-control" id="ccnumber" type="text" placeholder="0000 0000 0000 0000" name ="cc_number" hidden value="{{ old('cc_number', isset($c_card) ? $c_card->cc_number : '') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="ccmonth">Month</label>
                                <input class="form-control" id="cc_month" type="text" placeholder="0000 0000 0000 0000" name ="cc_month" hidden value="{{ old('cc_month', isset($c_card) ? $c_card->cc_month : '') }}">
                                    <select class="form-control" id="ccmonth" name ="cc_month" disabled>
                                        <option value="{{ $c_card['cc_month'] }}" {{  $c_card->cc_month == $c_card['cc_month'] ? 'selected' : '' }}">{{ $c_card['cc_month'] }}</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="ccyear">Year</label>
                                <input class="form-control" id="cc_year" type="text" placeholder="0000 0000 0000 0000" name ="cc_year" hidden value="{{ old('cc_year', isset($c_card) ? $c_card->cc_year : '') }}">
                                    <select class="form-control" id="ccyear" name ="cc_year" disabled>
                                        <option value="{{ $c_card['cc_year'] }}" {{  $c_card->cc_year == $c_card['cc_year'] ? 'selected' : '' }}">{{ $c_card['cc_year'] }}</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                        <option>2027</option>
                                        <option>2028</option>
                                        <option>2029</option>
                                        <option>2030</option>
                                    </select>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="cvv">CVV/CVC</label>
                                    <input class="form-control" id="cvv" type="text" placeholder="123" name ="cc_cvc" disabled value="{{ old('cc_cvc', isset($c_card) ? $c_card->cc_cvc : '') }}">
                                    <input class="form-control" id="cvv" type="text" placeholder="123" name ="cc_cvc" hidden value="{{ old('cc_cvc', isset($c_card) ? $c_card->cc_cvc : '') }}">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Other Information</b></div>
                    <div class="card-body">
                        <div class="form-group ">
                            <label> <h4>CSP : </h4>
                                <div class="form-check">
                                    <input class="form-check-input" id="Connectology" value="Connectology" required type="radio" name="csp" disabled {{  $sale->csp == "Connectology" ? 'checked' : 'as' }}>
                                    <input class="form-check-input" id="Connectology" value="Connectology" required type="radio" name="csp" hidden {{  $sale->csp == "Connectology" ? 'checked' : 'as' }}>
                                        <label class="form-check-label" for="Connectology">Connectology</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="Talkine" value="Talkine" required type="radio" name="csp" disabled {{  $sale->csp == "Talkine" ? 'checked' : 'as' }}>
                                    <input class="form-check-input" id="Talkine" value="Talkine" required type="radio" name="csp" hidden {{  $sale->csp == "Talkine" ? 'checked' : 'as' }}>
                                        <label class="form-check-label" for="Talkine">Talkine</label>
                                </div>
                            </label>
                        </div>   
                        <div class="form-group row">
                            <div class="input-group-prepend"><span class="input-group-text">Service Provider</span></div>
                                <div class="col-md-10">
                                    <input class="form-control" id="service_provider" type="text" placeholder="123" name ="service_provider" hidden value="{{ old('service_provider', isset($sale) ? $sale->service_provider : '') }}">
                                    <select class="form-control" id="service_provider" name="service_provider" disabled>
                                        @foreach ($services as $service)
                                            <option value=" {{ $service['name'] }}" {{  $sale->service_provider == $service['name'] ? 'selected' : '' }} >  {{ $service['name'] }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>  
                        </div>    
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Account Number</span></div>
                                    <input class="form-control"  type="text" name="account_number" disabled value="{{ old('account_number', isset($sale) ? $sale->account_number : '') }}">
                                    <input class="form-control"  type="text" name="account_number" hidden value="{{ old('account_number', isset($sale) ? $sale->account_number : '') }}">
                                        <span class="input-group-text">
                                            <i class="cil-envelope-open"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Account Information:</span></div>
                                    <textarea class="form-control"  type="textarea-input" name="account_info" disabled rows="5">{{ old('account_info', isset($sale) ? $sale->account_info : '') }} </textarea>
                                    <input class="form-control"  type="text" name="account_info" hidden value="{{ old('account_info', isset($sale) ? $sale->account_info : '') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-5" style="padding-left: 0px">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Original Bill</span></div>
                                        <input class="form-control"  type="text" name="original_bill" disabled value="{{ old('original_bill', isset($sale) ? $sale->original_bill : '') }}">
                                        <input class="form-control"  type="text" name="original_bill" hidden value="{{ old('original_bill', isset($sale) ? $sale->original_bill : '') }}">
                                            <span class="input-group-text">
                                                <i class="cil-envelope-open"></i>
                                            </span>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                            </div>
                            <div class="form-group col-md-5">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Amount to be Charged</span></div>
                                        <input class="form-control"  type="text" name="amount_to_charged" disabled value="{{ old('amount_to_charged', isset($sale) ? $sale->amount_to_charged : '') }}">
                                        <input class="form-control"  type="text" name="amount_to_charged" hidden value="{{ old('amount_to_charged', isset($sale) ? $sale->amount_to_charged : '') }}">
                                            <span class="input-group-text">
                                                <i class="cil-envelope-open"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-group-prepend"><span class="input-group-text">Financial Client</span></div>
                                <div class="col-md-5">
                                    <select class="form-control" id="financial_client" name="financial_client" disabled>
                                        <option value="{{ old('financial_client', isset($sale) ? $sale->financial_client : '') }}">{{$sale->financial_client}}</option>
                                    </select>
                                    <input class="form-control"  type="text" name="financial_client" hidden value="{{ old('financial_client', isset($sale) ? $sale->financial_client : '') }}">
                                </div>
                        </div> 
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">CSR comments</span></div>
                                    <textarea class="form-control" placeholder="Write a New Comment..." type="textarea-input" name="comment" rows="5"></textarea>   
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <input class="form-control"  type="text" name="status_id" hidden value="{{ old('status_id', isset($sale) ? $sale->status_id : '') }}">
                                    
        <button style="margin-top: -30px;" class="btn btn-danger" name="request_to_refund" value="request_to_refund" type="submit">Request to Refund</button>
        <button style="margin-top: -30px;" class="btn btn-success" name="proceed" value="proceed" type="submit">Proceed to Retention</button>
    </div>    
</form>


<!-------------------------------------------COMMENT SECTION---------------------------------------->


<div class="row">
    <div class="col-lg-12">
    <div class="card">
    <div class="card-header"><i class="fa fa-align-justify"></i> All Comments</div>
    <div class="card-body">
    <table class="table table-responsive-sm table-bordered table-striped table-sm">
    <thead>
    <tr>
    <th>#</th>
    <th>Sale ID</th>
    <th>Comment</th>
    <th>Comment By</th>
    <th>Role</th>
    <th>Time</th>
    
    </tr>
    </thead>
    <tbody>
        {{-- {{(App\Http\Controllers\SalesController::get_user_info(24))}}
    --}}
    @foreach($comments as $key => $comment)
    <tr data-entry-id="{{ $comment->id }}">
        
    <td>{{ $key+1 ?? '' }}</td>
    <td>{{ $sale->id ?? '' }}</td>
    <td>{{ $comment->comment  ?? '' }}</td>
    <td>{{ $comment->Users->name  ?? '' }}</td>
    <td>{{ $comment->Users->Roles->title  ?? '' }}</td>
    {{-- <td> {{App\Http\Controllers\SalesController::get_user_info( $comment->user_id)->name}} </td> --}}
    {{-- <td> {{(App\Http\Controllers\SalesController::get_user_role( $comment->user_id))}} </td> --}}
    <td style="white-space: nowrap;"> {{ $comment->updated_at  ?? '' }} </td>
      
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>
    
</div>
@endsection