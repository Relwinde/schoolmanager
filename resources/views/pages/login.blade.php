@extends('layouts.master')
    @section('styles')
        @include('partials.materialize-css')
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
    @endsection

    @section('body')

    <img src="{{asset('images/logo.png')}}" alt="">
        <form action="" method="Post" role="form" class="z-depth-2">
            @csrf
                <div class="input-field">
                    <input required name="mail" type="email" class="validate">
                    <label for="mail">Mail</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez votre addresse mail</span>
                </div>

                <div class="input-field">
                    <input required name="pass" type="password" class="validate">
                    <label for="pass">Mot de passe</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez un mot de passe</span>
                </div>

                <button type="submit" class="btn blue ">Se connecter</button>
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