{{-- @extends('layouts.app')
@section('content')

    
<form action="{{route('sales.store')}}" method="POST">
    @csrf

<div class="row">
    
    <div class="col-md-6">
        

        <div class="card">
            <div class="card-header"><b>Agent Information</b></div>
            <div class="card-body">
            
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Id</span></div>
                        <input class="form-control" id="agent_id" disabled type="text" name="agent_id" autocomplete="name" value="{{Auth::user()->id}}">
                        <input class="form-control" id="agent_id" hidden type="text" name="agent_id" autocomplete="name" value="{{Auth::user()->id}}">
                        <span class="input-group-text">
                            <i class="cil-fingerprint"></i>
                        </span>
                        </div>
                </div>    
            <div class="form-group">
            <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">Name</span></div>
            <input class="form-control" id="agent_name" disabled type="text" name="agent_name" autocomplete="name" value="{{Auth::user()->name}}">
            <input class="form-control" id="agent_name" hidden type="text" name="agent_name" autocomplete="name" value="{{Auth::user()->name}}">
            <span class="input-group-text">
                <i class="cil-user"></i>
            </span>
            </div>
            </div>
            <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">Email</span></div>
                <input class="form-control" id="agent_email" disabled type="text" name="agent_email" autocomplete="name" value="{{Auth::user()->email}}">
                <input class="form-control" id="agent_email" hidden type="text" name="agent_email" autocomplete="name" value="{{Auth::user()->email}}">
                <span class="input-group-text">
                    <i class="cil-envelope-open"></i>
                </span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Date/Time</span></div>
                    <input class="form-control" type="datetime-local" name="time" required>
                    <span class="input-group-text">
                        <i class="cil-clock"></i>
                    </span>
                    </div>
            </div>
            </div>
            </div>
    </div>

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
</div>

<div class="row">
    
   

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
                   
                    <option value="Dot Net Promotions">Dot Net Promotions</option>>
                    <option value="Xfinity - St">Xfinity - St</option>>
                
                </select>
                </div>
                
            </div> 

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Billing Information</span></div>
                    <textarea class="form-control"  type="textarea-input" name="billing_info" rows="5" required> </textarea>
                    
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
<div class="card">
<div class="form-group form-actions">
    <button class="btn btn-primary btn-primary" type="submit">Submit</button>
    </div>
</div>    
</form>
@endsection --}}