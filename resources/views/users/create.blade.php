@extends('layouts.app')
@section('content')

    
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header"><b>Create User</b></div>
            <div class="card-body">
            <form action="{{route('users.store')}}" method="POST">
                @csrf
            <div class="form-group">
            <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">Name</span></div>
            <input required class="form-control" id="name" type="text" name="name" autocomplete="name">
            <span class="input-group-text">
                <i class="cil-user"></i>
            </span>
            </div>
            </div>
            <div class="form-group">
            <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">Email</span></div>
            <input required class="form-control" id="email" type="email" name="email" autocomplete="email">
            <span class="input-group-text">
                <i class="cil-envelope-open"></i>
            </span>
            </div>
            </div>
            <div class="form-group">
            <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">Password</span></div>
            <input required class="form-control" minlength="8" id="password" type="password" name="password" autocomplete="new-password">
            <span class="input-group-text">
                <i class="cil-lock-locked"></i>
            </span>
            </div>
            </div>
            <div class="form-group row">
                <div class="input-group-prepend"><label for="role" class="input-group-text">Assign Role</label></div>
                 <div class="col-md-10">
                <select class="form-control" id="role" name="role" required>
                <option value="">Please select</option>
                <option value="1">Admin</option>
                <option value="2">Agent</option>
                <option value="3">Accountant</option>
                <option value="4">Processor</option>
                <option value="5">Customer Retention</option>
                </select>
                </div>
                
                </div>
            <div class="form-group form-actions">
            <button class="btn btn-primary btn-primary" type="submit">Submit</button>
            </div>

            </form>
            </div>
            </div>
    </div>
</div>
@endsection