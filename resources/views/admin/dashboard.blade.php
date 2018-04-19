@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
   <div class="row">
     <div class="col-sm-3">
       <div class="jumbotron">
         <p> <span class="label label-primary">Categories 0</span></p>
       </div>
     </div>

     <div class="col-sm-3">
       <div class="jumbotron">
         <p> <span class="label label-primary">Materials 0</span></p>
       </div>
     </div>

     <div class="col-sm-3">
       <div class="jumbotron">
         <p> <span class="label label-primary">Users 0</span></p>
       </div>
     </div>

     <div class="col-sm-3">
       <div class="jumbotron">
         <p> <span class="label label-primary">Today 0</span></p>
       </div>
     </div>
   </div>

   <div class="row">
     <div class="col-sm-6">
       <a  class="btn btn-block btn-default"
       href="{{route('admin.category.create')}}">Create Category</a>
       <a class="list-group-item" href="#">
         <h4 class="list-group-item-heading">First Category</h4>
         <p class="list-group-item-text">
          Count of materials
         </p>
       </a>
     </div>

     <div class="col-sm-6">
      <a class="btn btn-block btn-default" href="#">Create Material</a>
       <a class="list-group-item" href="#">
         <h4 class="list-group-item-heading">First Material</h4>
         <p class="list-group-item-text">
           Categories
         </p>
       </a>
     </div>
   </div>

  </div>
@endsection
