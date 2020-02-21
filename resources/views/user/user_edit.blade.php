@extends('layouts.master')
@section('title')
  Edit user
@endsection

@section('main-content')

            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form method="POST" action="{{ route('user-update') }}">
                        @csrf

             <div class="row">
               <div class="col-md-6">
                <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user_data->name}}" required >

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user_data->email}}" disabled>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              	<input type="hidden" name="id" value="{{ $user_data->id}}">
                <button type="submit" class="btn btn-info">Update</button>
              </div>
               </div>
               <div class="col-md-6"></div>
             </div>
            </form>
          </div>
          <!-- /.box -->
@endsection