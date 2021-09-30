@extends('layouts.app') 
@section('content')

<form action="{{route('sales.store')}}" method="POST">
  @csrf

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><b>Customer Information</b></div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">First Name</span></div>
                                    <input class="form-control"  type="text" name="customer_first_name" autocomplete="name" >
                                        <span class="input-group-text">
                                            <i class="cil-user"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Last Name</span></div>
                                    <input class="form-control" type="text" name="customer_last_name" autocomplete="name">
                                        <span class="input-group-text">
                                            <i class="cil-user"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Email</span></div>
                                    <input class="form-control"  type="email" name="customer_email">
                                        <span class="input-group-text">
                                            <i class="cil-envelope-open"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Phone :</span></div>
                                    <input class="form-control"  type="tel" name="phone_number">
                                        <span class="input-group-text">
                                            <i class="cil-fingerprint"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Alternate Phone :</span></div>
                                    <input class="form-control"  type="tel" name="alt_phone_number">
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
                                    <input class="form-control" id="agent_name" type="text" name="street_address" >
                                        <span class="input-group-text">
                                            <i class="cil-user"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">City</span></div>
                                    <input class="form-control"  type="text" name="city">
                                        <span class="input-group-text">
                                            <i class="cil-envelope-open"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">State</span></div>
                                    <input class="form-control" id="state" type="text" name="state" >
                                        <span class="input-group-text">
                                            <i class="cil-fingerprint"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Zip Code</span></div>
                                    <input class="form-control" id="zip" name="zip" type="text" pattern="[0-9]*" required>
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
                <div class="card-header"><strong>Credit Card</strong> <small>Form</small></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                        <input class="form-control" id="name" type="text" placeholder="Enter your name" name ="cc_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="ccnumber">Credit Card Number</label>
                                        <input class="form-control" id="ccnumber" type="text" placeholder="0000 0000 0000 0000" name ="cc_number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="ccmonth">Month</label>
                                    <select class="form-control" id="ccmonth" name ="cc_month">
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
                                    <select class="form-control" id="ccyear" name ="cc_year">
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
                                        <input class="form-control" id="cvv" type="text" placeholder="123" name ="cc_cvc">
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
                                    <input class="form-check-input" id="Connectology" value="Connectology" required type="radio" name="csp" checked>
                                        <label class="form-check-label" for="Connectology">Connectology</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="Talkine" value="Talkine" required type="radio" name="csp">
                                        <label class="form-check-label" for="Talkine">Talkine</label>
                                </div>
                            </label>
                        </div>   
                        <div class="form-group row">
                            <div class="input-group-prepend"><span class="input-group-text">Service Provider</span></div>
                                <div class="col-md-10">
                                    <select class="form-control" id="service_provider" name="service_provider" required>
                                        @foreach ($services as $service)
                                            <option value="{{ $service['name'] }}">{{ $service['name'] }}</option>
                                            
                                        @endforeach
                                    </select>
                                </div>  
                        </div>    
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Account Number</span></div>
                                    <input class="form-control"  type="text" name="account_number" required>
                                        <span class="input-group-text">
                                            <i class="cil-envelope-open"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Account Information:</span></div>
                                    <textarea class="form-control"  type="textarea-input" name="account_info" rows="5"> </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-5" style="padding-left: 0px">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Original Bill</span></div>
                                        <input class="form-control"  type="text" name="original_bill">
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
                                        <input class="form-control"  type="text" name="amount_to_charged" required>
                                            <span class="input-group-text">
                                                <i class="cil-envelope-open"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-group-prepend"><span class="input-group-text">Financial Client</span></div>
                                <div class="col-md-5">
                                    <select class="form-control" id="financial_client" name="financial_client" required>
                                        <option></option>
                                        <option value="Dot Net Promotions">Dot Net Promotions</option>>
                                        <option value="Xfinity - St">Xfinity - St</option>>
                                    </select>
                                </div>
                        </div> 
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">CSR comments</span></div>
                                    <textarea class="form-control"  type="textarea-input" name="csr_comment" rows="5" required> </textarea>   
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <button style="margin-top: -30px;" class="btn btn-primary" type="submit">Save</button>
    </div>    
</form>
@endsection