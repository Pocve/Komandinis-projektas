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
	            <hr>
        </div>
    </div>
@endsection
