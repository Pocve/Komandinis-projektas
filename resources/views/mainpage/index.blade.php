@extends('layouts.app')
@section('content')
  <div class="img container">
  
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
  </ul>
@endforeach
<a
  href="{{route('dishes-admin')}}"
  class="btn btn-primary ">
  Show more dishes
</a>
  </div>


@endsection
