@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')

<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="/admin/usersetting">Users</a></li>
    <li class="breadcrumb-item active">Registration</li>
  </div>
</ul>

	<div class="container" style="padding-top: 3%;">
		
		<div class="col-md-12" style="width: 100%;">

      <form action="/admin/user/register" method="post" enctype="multipart/form-data">  
      @csrf()
        
        <div class="card">
          
          <div class="card-close">
            
          </div>
          
          <div class="card-header d-flex align-items-center">
             <h2>User Information</h2>
          </div>

          <div class="card-body">
            
            <div class="row">
              
              <div class="col-md-2">
                <img src="{{ asset('/img/user/noimg.jpg') }}" style="max-height: 120px; max-width: 100%;">
                <label class="btn btn-primary btn-sm btn-file" style="width: 120px;">
                    Browse <input type="file" name="img" style="display: none;">
                </label>
                @if ($errors->has('img'))
                    <span class="help-block" style="font-size: 12px; text-align: center;">
                        <strong>{{ $errors->first('img') }}</strong>
                    </span>
                @endif
              </div>

              <div class="col-md-10">
                
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label" name="lastname">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{old('lastname')}}" name="lastname">
                    @if ($errors->has('lastname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label" name="middlename">Middle Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{old('middlename')}}" name="middlename">
                    @if ($errors->has('middlename'))
                        <span class="help-block">
                            <strong>{{ $errors->first('middlename') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label" name="firstname">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{old('firstname')}}" name="firstname">
                    @if ($errors->has('firstname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>



              </div>

            </div>

            
          
          </div>
        </div>
            
        <div class="card">
          
          <div class="card-close">
            
          </div>
          
          <div class="card-header d-flex align-items-center">
             <h2>Login Credentials</h2>
          </div>

          <div class="card-body">
          
              <div class="form-group row">
                <label class="col-sm-3 form-control-label" name="email">Email</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" value="{{old('email')}}" name="email">
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label" name="password">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" name="password">
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label" name="password_confirmation">Confirm Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" name="password_confirmation">
                  @if ($errors->has('password_confirmation'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

          </div>
        </div>
  
        <div class="card">
          
          <div class="card-close">
            
          </div>
          
          <div class="card-header d-flex align-items-center">
             <h2>USER ROLE</h2>
          </div>

          <div class="card-body">

            <div class="form-group row">
              <div class="col-sm-12">
                <select class="form-control" value="{{old('role')}}" name="role" style="font-size: 50px; text-align: center; text-align-last: center; height: 80px;">
                  <option selected disabled> Select User Role</option>
                  @foreach ($role as $role)
                    <option value="{{$role->id}}">{{ucwords($role->name)}}</option>
                  @endforeach
                </select>
                @if ($errors->has('role'))
                    <span class="help-block">
                        <strong>{{ $errors->first('role') }}</strong>
                    </span>
                @endif
              </div>
            </div>

          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>

      </form>

    </div>
	</div>