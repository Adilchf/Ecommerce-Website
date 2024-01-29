@extends('layouts.front')


@section('title')
   Welcome to CHF Store 

@endsection

@section('content')

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
                     <span class="float-start">{{$prod->selling_price}}</span>
                     <span class="float-end"><s>{{$prod->original_price}}</s></span>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>




   <div class="py-5">
      <div class="container">
         <h3>Trending Category</h3>
         <div class="row">
            @foreach($trending_category as $tcate)
            <div class="col-md-3">
            <a href="{{ url('view-category/' .$tcate->slug)}}">
               <div class="card">
                  <img  src="{{ asset('assets/uploads/category/'.$tcate->image) }}"  class="cate-img" alt="Category image">
                  <div class="card-body">
                     <h5>{{$tcate->name}}</h5>
                     <small>{{$tcate->description}}</small>
                  </div>
               </div>
               </a>
            </div>
            @endforeach
         </div>
      </div>
   </div>

@endsection

