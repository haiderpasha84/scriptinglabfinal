@extends('product.layout')
 
@section('content')
<h1 style="margin-top: 12px; color:red; font-size:55px; "
 class="text-center"><strong>ADD PRODUCT</strong></h1>
<br>
 
<form action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST" name="add_product">
{{ csrf_field() }}
 
<div class="row">
        
    <div class="col-md-12">
        <div class="form-group">
            <strong>NAME</strong>
            <input type="text" name="name" class="form-control" placeholder="Enter name" style="border:2px solid red">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>ID</strong>
            <input type="text" name="idy"  class="form-control"
             placeholder="Enter 1 for shotgun, 2 for handgun , 3 for women's gun" style="border:2px solid red">
            <span class="text-danger">{{ $errors->first('idy') }}</span>
        </div>
    </div>
    
     <!-- <input type="text" placeholder="1">  -->
    <div class="col-md-12">
        <div class="form-group">
            <strong>TYPE</strong>
            <input type="text" name="type" class="form-control"
             placeholder="Enter Type" style="border:2px solid red">
            <span class="text-danger">{{ $errors->first('type') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>PRICE</strong>
            <textarea class="form-control" col="4" name="price" placeholder="Enter price" style="border:2px solid red"></textarea>
            <span class="text-danger">{{ $errors->first('price') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>POST</strong>
            <textarea class="form-control" col="4" name="post" placeholder="post" style="border:2px solid red"></textarea>
            <span class="text-danger">{{ $errors->first('post') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>VERIFIED</strong>
            <textarea class="form-control" col="4" name="verified" placeholder="verified or not" style="border:2px solid red"></textarea>
            <span class="text-danger">{{ $errors->first('verified') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="input-group">
        <div class="custom-file" >
            <strong>IMAGE</strong>
            <!-- <textarea class="form-control" col="4" name="image" placeholder="image"></textarea> -->
            <input type="file" name="image" class="custom-file-input" style="border:2px solid red">
            <label class="custom-file-label" style="border:2px solid red">Choose File</label>
            
        </div>
    </div>
    <br><br>
    <div class="col-md-12">
        <center><button type="submit" class="btn btn-danger" >Submit</button></center>
    </div>
</div>
 
</form>
@endsection