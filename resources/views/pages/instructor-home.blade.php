@extends('layouts.master')

    @section('styles')
      @include('partials.materialize-css')
      <link rel="stylesheet" href="{{asset('css/instructor-home.css')}}">
    @endsection

    @section('body')
      <div class ="z-depth-2 nav"> 
          <h1>Classe: <span>6e</span>  </h1>
          <div id="userInfo">
             <img src="{{asset('images/user-icon.png')}}" alt="">
             <h1>Instructor NAME</h1>
          </div>
      </div> 
      <div class="main">
         <div class="sidebar">

         </div>
         
         <div class="contain">
            
         </div>
      </div>
    @endsection
       
    @section('scripts')
      @include('partials.materialize-js')
      <script>
         $(document).ready(function (){
            $('.fixed-action-btn').floatingActionButton();
         });
      </script>
    @endsection