@extends('layouts.master')

    @section('styles')
      @include('partials.materialize-css')
      <link rel="stylesheet" href="{{asset('css/instructor-home.css')}}">
    @endsection

    @section('body')
      <div class ="z-depth-2 nav">
         <div class="left-nav">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <h1 id="class">Classe: <span>6e</span>  </h1>
         </div>
          <div id="userInfo">
             <img src="{{asset('images/user-icon.png')}}" alt="">
             <h1>Instructor <span>NAME</span></h1>
          </div>
      </div> 
      <div class="main">
      
         <div class="sidebar">

            
            <!-- <nav>
               <div class="nav-wrapper">
                  <a href="#!" class="brand-logo">Logo</a>
                  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                  <li><a href="sass.html">Sass</a></li>
                  <li><a href="badges.html">Components</a></li>
                  <li><a href="collapsible.html">Javascript</a></li>
                  <li><a href="mobile.html">Mobile</a></li>
                  </ul>
               </div>
            </nav>  -->

            <ul class="sidenav" id="mobile-demo">
               <li><a href="sass.html">Sass</a></li>
               <li><a href="badges.html">Components</a></li>
               <li><a href="collapsible.html">Javascript</a></li>
               <li><a href="mdfgobile.html">Mobile</a></li>
            </ul>

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
         $(document).ready(function(){
            $('.sidenav').sidenav();
         });
      </script>
    @endsection