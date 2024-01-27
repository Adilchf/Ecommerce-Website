@extends('layouts.front')


@section('title')
   Welcome to CHF Store 

@endsection

@section('content')
   <h3 class="wlcm">Have a great shopping !!</h3>
   <div class="py-5">
      <div class="container">
         <h3>Featured Products</h3>
         <div class="row">
            @foreach($featured_products as $prod)
            <div class="col-md-3">
               <div class="card">
                  <img  src="{{ asset('assets/uploads/product/'.$prod->image) }}"  class="prod-img" alt="Product image">
                  <div class="card-body">
                     <h5>{{$prod->name}}</h5>
                     <small>{{$prod->selling_price}}</small>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>

@endsection

