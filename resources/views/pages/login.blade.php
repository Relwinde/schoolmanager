@extends('layouts.master')
    @section('styles')
        @include('partials.materialize-css')
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
    @endsection

    @section('body')

    <img src="{{asset('images/logo.png')}}" alt="">
        <form action="{{ route('log') }}" method="Post" role="form" class="z-depth-3 red lighten-5">
            @csrf
                <div class="input-field">
                    <input value = "{{ old ('email') }}" required name="email" type="email" class="validate">
                    <label for="mail">Mail</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez votre addresse mail</span>
                </div>

                <div class="input-field">
                    <input value = "{{ old ('password') }}" required name="password" type="password" class="validate">
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