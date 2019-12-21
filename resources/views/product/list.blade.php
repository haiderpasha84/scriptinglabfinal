@extends('product.layout')
   
@section('content')
  <a href="{{ route('products.create') }}" class="btn btn-success mb-2">Add</a> 
  <br>
   <div class="row">
        <div class="col-12">
          
          <table class="table table-bordered" id="laravel_crud" style="border: 2px solid red">
           <thead >
              <tr >
                 <th style="border: 4px solid red">ID</th>
                 <th style="border: 4px solid red">NAME</th>
                 <th style="border: 4px solid red">TYPE</th>
                 <th style="border: 4px solid red">PRICE</th>
                 <th style="border: 4px solid red">POST</th>
                 <th style="border: 4px solid red">VERIFIED</th>
                 <th style="border: 4px solid red">IMAGE</th>
                 <th style="border: 4px solid red">CREATED AT</th>
                 <th colspan="2" style="border: 4px solid red;">ACTION</th>
              </tr>
           </thead>
           <tbody>
              @foreach($products as $product)
              <tr>
                 <td style="border: 2px solid red">{{ $product->id }}</td>
                 <td style="border: 2px solid red">{{ $product->name }}</td>
                 <td style="border: 2px solid red">{{ $product->type }}</td>
                 <td style="border: 2px solid red">{{ $product->price }}</td>
                 <td style="border: 2px solid red">{{ $product->post }}</td>
                 <td style="border: 2px solid red">{{ $product->verified }}</td>
                 <td style="border: 2px solid red">{{ $product->image }}</td>
                 <td style="border: 2px solid red"><a href=" uploads/photo/[[cc.image]]">     <img src="{{$product->image}}" id="img" class="img img-responsive center-block" style="height:160px; width:140 px;" > </a</td>
                 <td style="border: 2px solid red">{{ date('Y-m-d', strtotime($product->created_at)) }}</td>
                  <!-- <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>  -->
                 <td style="border: 2px solid red"> 
                 <form action="{{ route('products.destroy', $product->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" >Delete</button>
                </form>
                </td> 
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $products->links() !!}
       </div> 
   </div>
 @endsection  