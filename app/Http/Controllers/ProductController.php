<?php
   
namespace App\Http\Controllers;
   
use App\Product;
use Illuminate\Http\Request;
use Redirect;
use PDF;
   
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::orderBy('id','desc')->paginate(10);


   
        return view('product.list',$data);

        //...
       

    }




    

    public function getcreatepage()
     {
         return view('product.create');

     }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('product.create');
       
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ee = new product();
        $ee = $request;
        $product = new product();
        $request->validate([
            'name' => 'required',
            'idy'=>'required',
            'type' => 'required',
            'price' => 'required',
            'post' => 'required',
            'verified' => 'required',



            
           
                


          
            
        ]);
       
        // if ($request->hasfile('image')){
        //     $file= $request->file('image');
        //     $extention= $file->getClientOriginalExtention(); //getting image extention
        //     $filename= time() . '.' . $extention;
        //     $file->move('uploads/products/' , $filename);
        //     $product->image= $filename;

        // }
        // else {
        //     return $request;
        //     $product->image = '';
        // }
   

        $temp = $request->toArray();

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $path = public_path().'/images';
            $image->move($path,$image->getClientOriginalName());
            $temp['image'] = '/images/'.$image->getClientOriginalName();

        }

        Product::create($temp);
    
        return Redirect::to('products')
       ->with('success','Greate! Product created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        //   $shot= Article::all();
        // return view('view', compact('shot'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {   
    //     $where = array('id' => $id);
    //     $data['product_info'] = Product::where($where)->first();
 
    //     return view('product.edit', $data);
    // }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'type' => 'required',
    //         'price' => 'required',
    //         'post' => 'required',
    //         'verified' => 'required',
    //         'image' => 'required',
    //     ]);
         
    //     $update = ['name' => $request->name, 'type' => $request->type];
    //     Product::where('id',$id)->update($update);
   
    //     return Redirect::to('products')
    //    ->with('success','Great! Product updated successfully');
    // }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

                // 

    public function destroy($id)        //DELETE
    {
        Product::where('id',$id)->delete();
   
        return Redirect::to('products')->with('success','Product deleted successfully');
    }
    
}