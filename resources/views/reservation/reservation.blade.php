@extends('layouts.app')

@section('content')


  <div class="container">
     <div class="row">
         <h1>Reservations (0)</h1>
         <hr>
     </div>

     <div class="row">
         <a
          href="http://pro.viktoraslava.lt/reservations/create"
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
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                                             </tbody>
             </table>
         </div>
     </div>
  </div>
     </div>



@endsection
