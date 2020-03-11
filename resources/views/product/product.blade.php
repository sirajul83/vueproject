@extends('layouts.master')
@section('title')
  Product
@endsection

@section('main-content')
      <form action="javascript:void(0)" method="post">
      <div class="modal fade" id="productModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Product</h4>
              </div>
              <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                   <div class="form-group">
                    <label>Name :</label>
                    <input name="name" id="name" type="text" class="form-control">
                    <span style="color: red" id="name_error"></span>
                   </div>
                </div>
              </div>
              <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                <label> Price :</label>
                 <input name="price" id="price" type="text" class="form-control">
                 <span style="color: red" id="price_error"></span>
              </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                <label>Quantity :</label>
                 <input name="quantity" id="quantity" type="text" class="form-control">
                 <span style="color: red" id="quantity_error"></span>
              </div>
               </div>
             </div>
              <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                <label>Bands :</label>
                 <select name="bands" id="bands" class="form-control">
                  <option value=""> Select</option>
                  @foreach($bands_data as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
                <span style="color: red" id="bands_error"></span>
              </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                <label>Category :</label>
                 <select name="category" id="category" class="form-control">
                  <option value=""> Select</option>
                  @foreach($category as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
                <span style="color: red" id="category_error"></span>
              </div>
               </div>
             </div> 
             <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                <label> Color  : </label> 
                <input type="checkbox" id="color" name="color[]" value="1">
                 Black
                <input type="checkbox" id="color" name="color[]" value="2">
                 White
                <input type="checkbox" id="color" name="color[]" value="3">Blue
                 <span style="color: red" id="color_error"></span>
              </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
               {{--  <label>Quantity :</label>
                 <input name="quantity" id="quantity" type="text" class="form-control">
                 <span style="color: red" id="quantity_error"></span> --}}
              </div>
               </div>
             </div>

              {{-- <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <label>Status :</label>
                  <select name="status" id="status" class="form-control">
                    <option value="1">Active</option>
                    <option value="2">In-active</option>
                  </select>
                </div>
                </div>
                <div class="col-md-6"></div>
              </div>  --}}
              
              
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" onclick="save_product()" class="btn btn-primary">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </form>
        <!-- /.modal -->


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product List</h3>
            {{--   <p style="color: green" id = 'msg'></p> --}}
            <div id="createMessage"></div>
               <button style="float: right" onclick="add_product()" type="submit" class="btn btn-success">
                Add product
              </button>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial</th>
                  <th>Name</th>
                  <th>price</th>
                  <th>Quantity</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                 @foreach($product_data as $data)
                <tr>
                  <td>1</td>
                  <td>{{ $data->name}}</td>
                  <td> {{ $data->price}} </td>
                  <td> {{ $data->quantity}} </td>
                  
                  <td> <a href="#" class="btn btn-info"><i class="fa fa-edit"></i></a> <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach 
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection