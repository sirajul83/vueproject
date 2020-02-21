@extends('layouts.master')
@section('title')
  Bands
@endsection

@section('main-content')

      <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Bands</h4>
              </div>
              <div class="modal-body">
               <div class="form-group">
                <label>Name :</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Status :</label>
                <select class="form-control">
                  <option value="1">Active</option>
                  <option value="2">In-active</option>
                </select>
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
               <button style="float: right" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                Add Bands
              </button>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td> <span class="badge badge-pill badge-info">Active</span> </td>
                  <td> <a href="#" class="btn btn-info"><i class="fa fa-edit"></i></a> <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection