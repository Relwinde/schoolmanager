@extends('layouts.master')

@section ('styles')
    @include('partials.materialize-css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection 


@section ('body')
    <div class ="z-depth-2 nav">
         <div class="left-nav">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <h1 id="class">Administrateur</h1>
         </div>
          <div id="userInfo">
             <img src="{{asset('images/user-icon.png')}}" alt="">
             <h1>{{Auth::user()->firstName}}&nbsp<span>{{Auth::user()->lastName}}</span></h1>
          </div>
    </div> 
    <ul class="sidenav" id="mobile-demo">
               <li><button  class="btn blue lighten-4">Resumé</button></li>
               <li><button id="createClassMobile" class="btn green">Ajouter une classe</button></li>
               <div class="nav-wrapper">
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
               
    </ul>


    <div id="main" class="main">
      
         <div id="leftBar" class="sidebar z-depth-1">
             <button class="btn blue lighten-4">Resumé</button>
             <button id="createClass" onClick ="createClass()" class="btn waves-effect waves-light green">Ajouter un classe</button>
               <div class="nav-wrapper">
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
                @foreach($classes as $classe)
                    <button class="btn red lighten-4">{{$classe->name}}</button>
                @endforeach

         </div>

         <div id="contain">  
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
      <script src="{{asset('js/admin-home.js')}}"></script>
@endsection