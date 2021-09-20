@extends('layouts.app')
@section('content')

    
<form action="{{route('sales.update', [$sale->id] )}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

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
                    {{ $datee= old('time', isset($sale) ? $sale->time : '') }}
                    {{}}
                    <?php
$a = $datee= old('time', isset($sale) ? $sale->time : '');
//var_dump($a);
$time=  strftime('%Y-%m-%d',strtotime($a));
//echo $time;
?>
                    <input class="form-control" type="datetime-local" name="time" required value=" <?php echo $time;?>" placeholder="{{ old('time', isset($sale) ? $sale->time : '') }}">
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
            <input class="form-control"  type="text" name="customer_first_name" autocomplete="name" value="{{ old('first_name', isset($sale) ? $sale->first_name : '') }}" >
            <span class="input-group-text">
                <i class="cil-user"></i>
            </span>
            </div>
            </div>
            <div class="form-group">
            <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">Last Name</span></div>
            <input class="form-control" type="text" name="customer_last_name" autocomplete="name" value="{{ old('last_name', isset($sale) ? $sale->last_name : '') }}" >
            <span class="input-group-text">
                <i class="cil-user"></i>
            </span>
            </div>
            </div>
            <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">Email</span></div>
                <input class="form-control"  type="email" name="customer_email" value="{{ old('customer_email', isset($sale) ? $sale->customer_email : '') }}" >
                <span class="input-group-text">
                    <i class="cil-envelope-open"></i>
                </span>
                </div>
            </div>
           
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Phone :</span></div>
                    <input class="form-control"  type="tel" name="phone_number" value="{{ old('phone_number', isset($sale) ? $sale->phone_number : '') }}" >
                    <span class="input-group-text">
                        <i class="cil-fingerprint"></i>
                    </span>
                    </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Alternate Phone :</span></div>
                    <input class="form-control"  type="tel" name="alt_phone_number" value="{{ old('alt_phone_number', isset($sale) ? $sale->alt_phone_number : '') }}" >
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
            <input class="form-control" id="agent_name" type="text" name="street_address" value="{{ old('street_address', isset($sale) ? $sale->street_address : '') }}" >
            <span class="input-group-text">
                <i class="cil-user"></i>
            </span>
            </div>
            </div>
            <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">City</span></div>
                <input class="form-control"  type="text" name="city" value="{{ old('city', isset($sale) ? $sale->city : '') }}" >
                <span class="input-group-text">
                    <i class="cil-envelope-open"></i>
                </span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">State</span></div>
                    <input class="form-control" id="state" type="text" name="state" value="{{ old('state', isset($sale) ? $sale->state : '') }}" >
                    <span class="input-group-text">
                        <i class="cil-fingerprint"></i>
                    </span>
                    </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Zip Code</span></div>
                    <input class="form-control" id="zip" name="zip" type="text" pattern="[0-9]*" required value="{{ old('zip', isset($sale) ? $sale->zip : '') }}" >
                    <span class="input-group-text">
                        <i class="cil-clock"></i>
                    </span>
                    </div>
            </div>
            </div>
            </div>
    </div>
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
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
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
</div>


<div class="row">
    
    <div class="col-md-12">
        

        <div class="card">
            <div class="card-header"><b>Other Information</b></div>
            <div class="card-body">
                <div class="form-group ">
                    <label> <h4>CSP : </h4>
                       
                <div class="form-check">
                    <input class="form-check-input" id="Connectology" value="Connectology"  required type="radio" name="csp"  {{  $sale->csp == "Connectology" ? 'checked' : 'as' }}>
                    <label class="form-check-label" for="Connectology">Connectology</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" id="Talkine" value="Talkine" required type="radio" name="csp" {{  $sale->csp == "Talkine" ? 'checked' : 'as' }} >
                    <label class="form-check-label" for="Talkine">Talkine</label>
                  </div>
                </label>
                </div>   
                <div class="form-group row">
                    <div class="input-group-prepend"><span class="input-group-text">Service Provider</span></div>
                     <div class="col-md-10">
                        
                    <select class="form-control" id="service_provider" name="service_provider" required >
                        @foreach ($services as $service)
                    <option value=" {{ $service['name'] }}" {{  $sale->service_provider == $service['name'] ? 'selected' : '' }} >  {{ $service['name'] }}</option>
                    @endforeach
                    </select>
                    </div>
                    
                </div>    


           
            <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">Account Number</span></div>
                <input class="form-control"  type="text" name="account_number" required value="{{ old('account_number', isset($sale) ? $sale->account_number : '') }}" >
                <span class="input-group-text">
                    <i class="cil-envelope-open"></i>
                </span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Account Information:</span></div>
                    <textarea class="form-control"  type="textarea-input" name="account_info" rows="5" value="{{ old('account_info', isset($sale) ? $sale->account_info : '') }}" > </textarea>
                    
                    </div>
            </div>

            <div class="row">
            <div class="form-group col-md-5" style="padding-left: 0px">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">Original Bill</span></div>
                <input class="form-control"  type="text" name="original_bill" value="{{ old('original_bill', isset($sale) ? $sale->original_bill : '') }}" >
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
                    <input class="form-control"  type="text" name="amount_to_charged" required value="{{ old('amount_to_charged', isset($sale) ? $sale->amount_to_charged : '') }}" >
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
                    <textarea class="form-control"  type="textarea-input" name="billing_info" rows="5" required > {{  old('billing_info', isset($sale) ? $sale->billing_info : '') }}</textarea>
                    
                    </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">CSR comments</span></div>
                    <textarea class="form-control"  type="textarea-input" name="csr_comment" rows="5" required  > {{ old('csr_comment', isset($sale) ? $sale->csr_comment : '') }} </textarea>
                    
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">General Comment</span></div>
                    {{-- <textarea class="form-control"  type="textarea-input" name="comment" rows="5" required> {{ old('comment', isset($comment) ? $comment->comment : '') }} </textarea> --}}
                    
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
@endsection