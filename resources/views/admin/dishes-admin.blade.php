@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-left:0;">
             <a
          	   href="{{ route('dishes-create')}}"
          	   class="btn btn-lg btn-block btn-success">
          	   Create new dishes
          	</a>
          </div>
    </div>
    <br><br>



    @foreach ($dishes as $dish)

    <ul class="list-group col-md-4">
      <li class="list-group-item list-group-item-successs">{{$dish['title']}}</li>
      <li class="list-group-item">
        <a href="#">
          <img src="{{ $dish->getUrlAttribute() }}" alt="" class="img-responsive">
        </a>
      </li>
      <li class="list-group-item">{{$dish['description']}}</li>
      <li class="list-group-item">{{$dish['price']}}</li>
      <li class="list-group-item">
        <a
          href="{{route('dishes-edit', $dish->id)}}"
          class="btn btn-primary pull-left">
          Edit
       </a>

        <form class="pull-right" action="{{route('cart-store')}}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="dishes_id" value="{{$dish->id}}">
          <button type="submit" name="button" class="btn btn-success js-cart">Add Cart</button>
        </form>

        <a
          href="{{ route('dishes-delete', $dish->id)}}"
          class="btn btn-block  btn-danger">
          Delete
       </a>
       </li>

    </ul>

    @endforeach
</div>
<script type="text/javascript">

$(document).ready(function(){
  $('.js-cart').on('click', function(event){

    event.preventDefault();//sustabdo ivyki

    var form = $(this).parent();
    // console.log(form.serialize());

    $.ajax({
      url: form.attr('action'), //paima atributa formos
      method: 'POST',
      data: form.serialize(),
      success: function(data) {
        var parsed = JSON.parse(data);
        console.log(parsed);

        var cartTotal = $('#cart .cart-total'),
                        cartSize = $('#cart .cart-size'),
                        currentPrice = cartTotal.text(),
                        currentSize = cartSize.text(),
                        totalPrice = (currentPrice*1) + data.price,
                        totalSize = (currentSize*1) + 1;

                        cartTotal.text(totalPrice.toFixed(2));
                        cartSize.text(totalSize);


      },
      error: function(msg){
                  console.log(msg.responseText);
                  $('html').prepend(msg.responseText);
              }
    })


  });
});


</script>
@endsection
