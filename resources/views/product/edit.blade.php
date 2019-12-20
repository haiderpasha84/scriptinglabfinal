@extends('product.layout')
 
@section('content')
<h2 style="margin-top: 12px;" class="text-center">Edit Product</a></h2>
<br>
 
<form action="{{ route('products.update', $product_info->id) }}" method="POST" name="update_product">
{{ csrf_field() }}
@method('PATCH')
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ $product_info->name }}">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>type</strong>
            <input type="text" name="type" class="form-control" placeholder="Enter type" value="{{ $product_info->type }}">
            <span class="text-danger">{{ $errors->first('type') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Price</strong>
            <textarea class="form-control" col="4" name="price" placeholder="Enter price" >{{ $product_info->price }}</textarea>
            <span class="text-danger">{{ $errors->first('price') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Post</strong>
            <textarea class="form-control" col="4" name="post" placeholder="Enter post" >{{ $product_info->post}}</textarea>
            <span class="text-danger">{{ $errors->first('post') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Verificatrion</strong>
            <textarea class="form-control" col="4" name="verified" placeholder="Enter verification" >{{ $product_info->verified }}</textarea>
            <span class="text-danger">{{ $errors->first('verified') }}</span>
        </div>
    </div>
    <!-- <div class="col-md-12">
        <div class="form-group">
            <strong>Image</strong>
            <textarea class="form-control" col="4" name="image" placeholder="Enter image" >{{ $product_info->image }}</textarea>
            <span class="text-danger">{{ $errors->first('image') }}</span>
        </div>
    </div> -->
    <div class="col-md-12">
        <div class="input-group">
        <div class="custom-file">
            <strong>Image</strong>
            <!-- <textarea class="form-control" col="4" name="image" placeholder="image"></textarea> -->
            <input type="file" class="custom-file-input">
            <label class="custom-file-label">Choose File</label>
            <span class="text-danger">{{ $errors->first('image') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
@endsection