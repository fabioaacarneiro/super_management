<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - Sobre Nós</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset("css/styles.css")}}">
    </head>

    <body>
        <div class="top">

            <div class="logo">
                <img src="{{asset("img/logo.png")}}">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="{{ route('site.index') }}">Principal</a></li>
                    <li><a href="{{ route('site.about') }}">Sobre Nós</a></li>
                    <li><a href="{{ route('site.contact') }}">Contato</a></li>
                </ul>
            </div>
        </div>

        <div class="featured-content">
        
            <div class="left">
                <div class="information">
                    <h1>Sistema Super Gestão</h1>
                    <p>Software para gestão empresarial ideal para sua empresa.<p>
                    <div class="called">
                        <img src="{{asset("/img/check.png")}}">
                        <span class="texto-branco">Gestão completa e descomplicada</span>
                    </div>
                    <div class="called">
                        <img src="{{asset("img/check.png")}}">
                        <span class="white-text">Sua empresa na nuvem</span>
                    </div>
                </div>

                <div class="video">
                    <img src="{{asset("img/player_video.jpg")}}">
                </div>
            </div>

            <div class="right">
                <div class="contact">
                    <h1>Contato</h1>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                    <form>
                        <input type="text" placeholder="Nome" class="white-border">
                        <br>
                        <input type="text" placeholder="Telefone" class="white-border">
                        <br>
                        <input type="text" placeholder="E-mail" class="white-border">
                        <br>
                        <select class="white-border">
                            <option value="">Qual o motivo do contato?</option>
                            <option value="">Dúvida</option>
                            <option value="">Elogio</option>
                            <option value="">Reclamação</option>
                        </select>
                        <br>
                        <textarea class="white-border">Preencha aqui a sua mensagem</textarea>
                        <br>
                        <button type="submit" class="white-border">ENVIAR</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>