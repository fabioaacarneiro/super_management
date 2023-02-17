<form action="{{ route('site.contact') }}" method="POST">
    @csrf
    <input name="name" type="text" placeholder="Nome" class="black-border">
    <br>
    <input name="phone" type="text" placeholder="Telefone" class="black-border">
    <br>
    <input name="mail" type="text" placeholder="E-mail" class="black-border">
    <br>
    <select name="contact_reason" class="black-border">
        <option value="-1">Qual o motivo do contato?</option>
        <option value="0">Dúvida</option>
        <option value="1">Elogio</option>
        <option value="2">Reclamação</option>
    </select>
    <br>
    <textarea name="message" class="black-border">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="black-border">ENVIAR</button>
</form>
