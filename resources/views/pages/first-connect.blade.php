@extends('layouts.master')
    @section('styles')
        @include('partials.materialize-css')
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
    @endsection

    @section('body')
        <img src="{{asset('images/logo.png')}}" alt="">
    
        <form action="{{ route ('save-password') }}" method="Post" role="form" class="z-depth-3 red lighten-5">
        @csrf
            <p>
                Mr <span>{{$firstName}}&nbsp{{$lastName}}</span>,bienvenue sur la plateform de 
                gestion des carrières de nos élèves.
                <br>
                Avant d’acceder à votre compte veillez 
                créer un mot de passe afin de proteger votre compte 
            </p>
           
                <div class="input-field">
                    <input required name="password" type="password" class="validate">
                    <label for="password">Mot de passe</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez un mot de passe</span>
                </div>

                <div class="input-field">
                    <input required name="passeword_confirmation" type="password" class="validate">
                    <label for="pass">Mot de passe</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Confirmer votre mot de passe</span>
                </div>

                <button type="submit" class="btn blue waves-effect">Enregister</button>
            </form>


    @endsection


    @section('scripts')
        @include ('partials.materialize-js')
        <script>
            setInterval(sizeSet, 1);
            function sizeSet() {
                var useHeight = window.innerHeight - 20;
                document.querySelector("body").style.height = ("height", useHeight + "px");
                }
        </script>
    @endsection