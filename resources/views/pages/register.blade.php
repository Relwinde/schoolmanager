@extends('layouts.master')
    @section('styles')
        @include('partials.materialize-css')
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
    @endsection

    @section('body')
        <img src="{{asset('images/logo.png')}}" alt="">
    
        <form action="{{route ('register')}}" method="Post" role="form" class="z-depth-3 red lighten-5">
        @csrf
            <p>
                En tant que premier à accéder à l'application vous êtes l'administrateur du système <br>
                <strong>Inscrivez-vous</strong>
            </p>
                <div class="input-field">
                    <input required name="firstName" type="text" class="validate">
                    <label for="firstName">Nom</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez votre nom</span>
                </div>

                <div class="input-field">
                    <input required name="lastName" type="text" class="validate">
                    <label for="lastName">Prénom</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez votre prénom</span>
                </div>

                <div class="input-field">
                    <input required name="email" type="email" class="validate">
                    <label for="email">Mail</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez votre adresse mail</span>
                </div>

                <div class="input-field">
                    <input required name="password" type="password" class="validate">
                    <label for="password">Mot de passe</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez un mot de passe</span>
                </div>

                <div class="input-field">
                    <input required name="password_confirmation" type="password" class="validate">
                    <label for="password_confirmation">Mot de passe</label>
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