<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('products.list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

      $html = "";
      if(!empty($product)){
         $html = "
         <tr>
         <td colspan='2'>
         <div class='img-box'>
         <img src=". asset('storage/' . $product->image)." class='img-fluid' alt=''>
           </div>
           </td>
           </tr>
           <tr>
           <td width='30%'><b>Name:</b></td>
           <td width='70%'> PID".$product->name."</td>
           </tr>
           <tr>
              <td width='30%'><b>Product ID:</b></td>
              <td width='70%'> PID".$product->id."</td>
           </tr><br>
           <tr>
              <td width='30%'><b>Description:</b></td>
              <td width='70%'> ".$product->description."</td>
           </tr>";
      }
      $response['html'] = $html;

      return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
