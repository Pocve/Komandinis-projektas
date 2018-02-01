@extends('layouts.app')
@section('content')
  <div class="container">

    <div class="row">
      <h1>
        Cart ({{ $cartSize }})
      </h1>
      {{-- @if(count($dish) > 0)
      <div> whatever your message is like shopping cart is empty </div>
    @else --}}

    @foreach($cart as $value)
      <ul class="list-group" style="padding-left: 15px; padding-top: 30px;">
        <li class="list-group-item list-group-item-success col-md-12">{{$value->dishes->title}}
        </li>
        <li class="list-group-item col-md-12" style="margin-bottom: 50px;">
          <div class="col-md-2">
            <a href="#">
              <img src="{{ $value->dishes->getUrlAttribute() }}" alt="" style="display: inline-block; width: 150px; height: 150px" class="img-responsive">
            </a>
          </div>
          <div class="col-md-9" style="display: inline-block;">{{$value->dishes->description}}</br>
            <span>Price:</span><p class="label label-success">{{$value->dishes->price}}$</p>
          </div>
          <div class="col-md-1">
            <form method="POST" action="{{ route('cart-destroy', $value->id)}}">
              {{ csrf_field() }}
              {{ method_field('delete')}}
              <button type="submit" class="btn btn-danger btn-block" name="button">DROP</button>

            </form>
            <!--
            <button class="btn btn-danger">Delete</button>-->
          </div>
        </li>
      </ul>
    @endforeach
    {{-- @endif --}}
    <hr>
      <h2>
        Sub-total:
        <p class="label label-danger pull-right">{{ $subTotal}}</p>
      </h2>

      <h2>
        VAT:
        <p class="label label-warning pull-right"> {{ $vatTotal }} $</p>
      </h2>

      <h2>
        <strong>Total:</strong>
        <p class="label label-success pull-right">{{ $cartTotal }} $</p>
      </h2>


      <form class="form-horizontal" method="POST" action="http://pro.viktoraslava.lt/order">

        <input type="hidden" name="_token" value="OZAZJvBMibRWOxMYQGfvIiuntn6p0uov2ZC2oI5E">

        <input type="hidden" name="user_id" value="1">

        <input type="hidden" name="total_amount" value="10.00">

        <input type="hidden" name="tax_amount" value="1.74">

        <button class="btn btn-lg btn-success btn-block">Checkout</button>

      </form>
  </div>

@endsection
