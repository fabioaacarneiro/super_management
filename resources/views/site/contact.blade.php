@extends('site.layouts.basic')
@section('title', $title)
@section('content')

    <div class="page-content">
        <div class="page-title">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="page-info">
            <div class="main-contact">
                <form action="{{route('site.contact')}}" method="POST">
                    @csrf
                    <input name="name" type="text" placeholder="Nome" class="black-border">
                    <br>
                    <input name="phone" type="text" placeholder="Telefone" class="black-border">
                    <br>
                    <input name="mail" type="text" placeholder="E-mail" class="black-border">
                    <br>
                    <select name="contact_reason" class="black-border">
                        <option value="0">Qual o motivo do contato?</option>
                        <option value="1">Dúvida</option>
                        <option value="2">Elogio</option>
                        <option value="3">Reclamação</option>
                    </select>
                    <br>
                    <textarea name="message" class="black-border">Preencha aqui a sua mensagem</textarea>
                    <br>
                    <button type="submit" class="black-border">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="social-media">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="contact-area">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="location">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
