<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prodect;
use App\Models\category;
use App\Models\Psize;
use App\Models\Pcolor;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use App\Http\Resources\categoryResource;

class ProdectController extends Controller
{
    public function showCategory(){
        $categories=category::get()->all();
        foreach ($categories as $category){
            $mess[]=new categoryResource($category);}
        return response()->json([
            'status' => 'success',
            'message' =>$mess ,]);
    }
    public function showProdects($id){
        $prodects=prodect::where('category_id',$id)->get()->all();
        return response()->json([
            'status' => 'success',
            'message' => $prodects,]);
    }
    public function showProdectSize($id){
        $prodectSize=Psize::where('prodect_id',$id)->get()->all();
        $prodectcolor=Pcolor::where('prodect_id',$id)->get()->all();
        return response()->json([
            'status' => 'success',
            'Sizes' => $prodectSize,
        'colores'=>$prodectcolor,]);
    }
    public function AddToCart($id,Request $request){
        $prodect=prodect::find($id);
        $user=Auth::guard('api')->user();

        $cart = cart::create([
            'quantity' => $request->quantity,
            'user_id' => $user->id,
            'prodect_id' => $id,
        ]);
        $prodect->update([
            'quantity'=>$prodect->quantity-=$request->quantity,
        ]);
        $cartDetails=['name'=>$prodect->name,
                        'quantity'=> $request->quantity,
                        'total price'=>$request->quantity*$prodect->price,
                        ];
        return response()->json([
            'status' => 'success',
            'message' => 'prodect added successfully',
            'order' => $cartDetails,
        ]);
    }
}
