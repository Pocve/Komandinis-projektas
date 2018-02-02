<?php

namespace App\Http\Controllers;
use Auth;
use App\Order;
use App\Cart;
use Illuminate\Http\Request;
use App\Helpers\CartHelper;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

      $this->user = Auth::user();
      $tax_amount = new CartHelper;
      $tax_amount = $tax_amount -> vatTotal();

      $getTotal = new CartHelper;
      $getTotal = $getTotal -> getTotal();

      $post = [
        'users_id'=>$this->user->id,
        'tax_amount'=>$tax_amount,
        'total_amount'=>$getTotal
      ];

      $dishes = Cart::where('token', csrf_token())->get();
      $order = Order::create($post);
      foreach ($dishes as $cart) {
        $cart->order_id = $order->id;
        $cart->save();
      }


      return redirect()->route('dishes-admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
