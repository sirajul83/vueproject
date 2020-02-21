@extends('layouts.master')
@section('title')
  User list
@endsection

@section('main-content')

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User List</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($users as $data)
                <tr>
                  <td>1</td>
                  <td>{{ $data->name}}</td>
                  <td>{{ $data->email}}</td>
                  <td> <a href="{{ url('user-edit')}}/{{ $data->id}}" class="btn btn-info"><i class="fa fa-edit"></i></a> <a href="{{ url('user-delete')}}/{{ $data->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection