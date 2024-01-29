@extends('layouts.front')


@section('title')
   {{$category->name}}

@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Collection / {{$category->name}} </h6>
    </div>
</div>
<div class="py-5">
      <div class="container">
         <h3>{{$category->name}}</h3>
         <div class="row">
            @foreach($product as $prod)
            <div class="col-md-3 mb-3">
               <div class="card">
                <a href="{{url('category/'.$category->slug.'/'.$prod->name)}}">
                  <img  src="{{ asset('assets/uploads/product/'.$prod->image) }}"  class="prod-img" alt="Product image">
                  <div class="card-body">
                  <h5>{{$prod->name}}</h5>
                     <span class="float-start">{{$prod->selling_price}}</span>
                     <span class="float-end"><s>{{$prod->original_price}}</s></span>
                  </div>
               </div>
               </a>
            </div>
            @endforeach
         </div>
      </div>
   </div>

@endsection