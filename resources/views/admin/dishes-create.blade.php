@extends('layouts.app')
@section('content')
  <div class="container">
<div class="row">
  <div class="col-md-12">
      <a href="{{ route('dishes-admin')}}"
class="btn btn-danger btn-lg btn-block">
Back
</a>            <hr>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
      <div class="panel panel-default">
          <div class="panel-heading">
          New Dish
          </div>
          <div class="panel-body">
              <form class="form-horizontal" method="POST" action="{{ route('store')}}">
                {!!csrf_field() !!}

              <div class="form-group">
                      <label for="title" class="col-md-4 control-label">Title</label>
                      <div class="col-md-6">
                          <input id="title" type="text" class="form-control" name="title" value="">
                                                      </div>
                  </div>

                  <div class="form-group">
                      <label for="description" class="col-md-4 control-label">Description</label>
                      <div class="col-md-6">
                          <input id="description" type="text" class="form-control" name="description" value="">
                                                      </div>
                  </div>

                  <div class="form-group">
                      <label for="price" class="col-md-4 control-label">Price</label>
                      <div class="col-md-6">
                          <input id="price" type="number" step="0.01" class="form-control" name="price" value="">
                                                      </div>
                  </div>
                  <div class="form-group">
                      <label for="image_url" class="col-md-4 control-label">Image pic</label>
                      <div class="col-md-6">
                          <input style="padding-top: 5px"id="image_url" type="file" class="" name="image_url" value="">
                                                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                          <button type="submit" class="btn btn-primary">
                              Register
                          </button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
</div>
</div>




@endsection
