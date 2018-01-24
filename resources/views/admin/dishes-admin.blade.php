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
      <a
        href="#"
        class="btn btn-block btn-primary ">
        Edit
       </a>
       <a
         href="#"
         class="btn btn-block btn-danger">
         Delete
      </a>
      <a
        href="#"
        class="btn btn-block btn-success">
        Add Cart
      </a>
    </ul>

    @endforeach
</div>
@endsection
