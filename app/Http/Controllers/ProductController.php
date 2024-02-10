<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_Data = Session::get('cart_details');
        $msg = "";
        if($product_Data)
        {
            foreach($product_Data as $pdata)
            {
                $msg = $msg."\n Product ID: ".$pdata['pid'].", Product Name: ".$pdata['name']." Quantity: ".$pdata['pcount']."\n";
            }
        }
        $shareComponent = \Share::page(
            $msg,
            
        )
        ->whatsapp();
        $categories = Category::get();
        return view('products.list',compact('categories','shareComponent'));
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
            <td width='30%'><b>Product ID:</b></td>
            <td width='70%'> PID".$product->id."</td>
           
         </tr>
         <tr>
            <td width='30%'><b>Name:</b></td>
            <td width='70%'> PID".$product->name."</td>
         </tr><br>
         <tr>
            <td width='30%'><b>Price:</b></td>
            <td width='70%'> <p><strike> $product->price </strike>
            <b> $product->special_price </b></td>
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

    public function add_to_cart(Request $request)

    {
        // dd('test');
        $product = Product::find($request->id);
        // Session::flush();
        $session_data = Session::get('cart_details');

        if(empty($session_data))
        {
            $session_array[]=array(

                "pid" => $product->id,
                "name" => $product->name,
                "image" => $product->image,                
                "description" => $product->description,
                "pcount" => 1
            );
        }else{
            $pfound = 0;

            foreach($session_data as $data)
            {
                // return response()->json($data);
                if($data['pid']==$product->id)
                {
                    $pfound = 1;
                    $session_array[]= array(
                        "pid" => $data['pid'],
                        "name" => $data['name'],
                        "image" => $data['image'],                        
                        "description" => $data['description'],
                        "pcount" => $data['pcount']+1
                    );
                }else{
                    $session_array[]= array(
                        "pid" => $data['pid'],
                        "name" => $data['name'],
                        "image" => $data['image'],
                        "description" => $data['description'],
                        "pcount" => $data['pcount']
                    );
                }

            }
            if($pfound==0)
            {
                $session_array[]= array(
                    "pid" => $product->id,
                    "name" => $product->name,
                    "image" => $product->image,
                    "description" => $product->description,
                    "pcount" => 1
                );
            }


        }


        Session::put('cart_details', $session_array);
        return response()->json($session_array);
    }
}
