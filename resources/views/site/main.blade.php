@extends('site.layouts.basic')
@section('title', $title)
@section('content')

    <div class="featured-content">
        <div class="left">
            <div class="information">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.
                <p>
                <div class="called">
                    <img src="{{ asset('/img/check.png') }}">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="called">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="white-text">Sua empresa na nuvem</span>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}">
            </div>
        </div>

        <div class="right">
            <div class="contact">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.
                <p>
                @component('site.layouts._components.contact_form')
                    
                @endcomponent
            </div>
        </div>
    </div>

@endsection
