@extends('layouts.master')
@section('title')
  Add User
@endsection

@section('main-content')

            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form method="POST" action="{{ route('user-save') }}">
                        @csrf

             <div class="row">
               <div class="col-md-6">
                <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
                  {{-- <div class="form-group">
                  <label for="name">Mobile</label>
                  <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile">
                </div> --}}
                 <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputEmail1">Role</label>
                  <select name="role_id" class="form-control">
                    <option value="">Select</option>
                    <option value="1">Admin</option>
                    <option value="2">Nomal User</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input name="username" type="text" class="form-control" id="username" placeholder="username">
                </div> --}}
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                 <div class="form-group">
                  <label for="Confirm-pass">Confirm Password</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
    
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Save</button>
              </div>
               </div>
               <div class="col-md-6"></div>
             </div>
            </form>
          </div>
          <!-- /.box -->
@endsection