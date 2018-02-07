@extends('layouts.app')

@section('content')


  <div class="container">
    <div class="row">
              <h1>Reservations ({{count($reservations)}})</h1>
      <hr>
    </div>

    <div class="row">
      <a
      href="{{ route ('create-reservation')}}"
      class="btn btn-lg btn-block btn-success">
      Create new reservation
    </a>
    <hr>
  </div>

  <div class="row">
    <div class="panel panel-default">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>People Amount</th>
            <th>Reserved</th>
            <th>Created</th>
            <th>User</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($reservations as $reservation)
          <tr>

            <th scope="row">{{$reservation->id}}</th>
            <td>{{$reservation->name}}</td>
            <td>{{$reservation->phone}}</td>
            <td>{{$reservation->people_amount}}</td>
            <td>
              {{$reservation->date}}
            </td>
            <td>
              {{$reservation->created_at}}
            </td>
            <td>{{$reservation->user}}</td>

          </tr>
          @endforeach


        </tbody>
      </table>
    </div>
  </div>
</div>
</div>



@endsection
