@extends('product.layout')
 
@section('content')
<h2 style="margin-top: 12px;" class="text-center">Add Product</a></h2>
<br>
 
<form action="{{ route('products.store') }}" method="POST" name="add_product">
{{ csrf_field() }}
 
<div class="row">
        
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" placeholder="Enter name">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>ID</strong>
            <input type="text" name="idy" value="1" class="form-control" placeholder="Enter 1 for shotgun, 2 for handgun , 3 for women's gun">
            <span class="text-danger">{{ $errors->first('idy') }}</span>
        </div>
    </div>
    
     <!-- <input type="text" placeholder="1">  -->
    <div class="col-md-12">
        <div class="form-group">
            <strong>type</strong>
            <input type="text" name="type" class="form-control" placeholder="Enter Type">
            <span class="text-danger">{{ $errors->first('type') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Price</strong>
            <textarea class="form-control" col="4" name="price" placeholder="Enter price"></textarea>
            <span class="text-danger">{{ $errors->first('price') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>post</strong>
            <textarea class="form-control" col="4" name="post" placeholder="post"></textarea>
            <span class="text-danger">{{ $errors->first('post') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>verified</strong>
            <textarea class="form-control" col="4" name="verified" placeholder="verified or not"></textarea>
            <span class="text-danger">{{ $errors->first('verified') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="input-group">
        <div class="custom-file">
            <strong>Image</strong>
            <!-- <textarea class="form-control" col="4" name="image" placeholder="image"></textarea> -->
            <input type="file" name="image" class="custom-file-input">
            <label class="custom-file-label">Choose File</label>
            
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
@endsection