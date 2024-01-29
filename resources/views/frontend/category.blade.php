@extends('layouts.front')


@section('title')
   Welcome to CHF Store 

@endsection

@section('content')
 
   <div class="py-5">
      <div class="container">
         <h3>Featured Category</h3>
         <div class="row">
            @foreach($featured_category as $cate)
            <div class="col-md-3">
                <a href="{{ url('view-category/' .$cate->slug)}}">
               <div class="card">
                  <img  src="{{ asset('assets/uploads/category/'.$cate->image) }}"  class="cate-img" alt="Category image">
                  <div class="card-body">
                     <h5>{{$cate->name}}</h5>
                     <small>{{$cate->description}}</small>
                  </div>
               </div>
               </a>
            </div>
            @endforeach
         </div>
      </div>
   </div>

@endsection