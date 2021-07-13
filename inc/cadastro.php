<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- ESTILO FONT AWESOME -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<!-- SCRIPT JQUERY -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<!-- SCRIPT BOOTSTRAP -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
<html lang="pt-br">

    <body>
    <section>
        <div class="container">
        <br>
        <h4> Realize seu Cadastro </h4>     <br>
            <form action="cadastro.html" method="POST">
                    <label for="nomeCompleto">Nome</label><br>
                    <input type="text" name="nomecompleto" id="nomeCompleto" ><br>
                    <label for="SobreNome">Sobrenome</label><br>
                    <input type="text" name="SobreNome" id="SobreNome"><br>
                    <label for="DatadeNascimento">Data de Nascimento</label><br>
                    <input type="date" name="DatadeNascimento" id="DatadeNascimento" placeholder="DD/MM/AAAA" required><br>
                <label for="sexo">Sexo</label><br>
                <select name="genero" id="genero">
                    <option selected disabled>Selecione uma opção</option>
                    <option value="feminino">Feminimo</option>
                    <option value="masculino">Masculino</option>
                    <option value="N/A">N/A</option>
                </select>
                <br>
                <label for="CPF">Telefone</label><br>
                <input type="text" class="telefone" name="Telefone" id="Telefone" placeholder="Telefone" required>
                <br>
                <label for="email">E-mail</label><br>
                <input type="email" name="email" id="email" placeholder="grupog5@email.com" required>
                <br>
                <label for="CPF">CPF</label><br>
                <input type="CPF" name="CPF" id="CPF" placeholder="CPF" required>
                <br>
                <label for="senha">Senha</label><br>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                <br>  
                <label for=" ConfirmarSenha">Confirmar Senha</label><br>
                <input type="password" name="ConfirmarSenha" id="ConfirmarSenha" placeholder="Confirme sua senha" required>
                <br>     <br>
                <label for="sim"><input type="checkbox" name="cimena" id="sim" value="sim" checked>Desejo receber ofertas</label>
                <br>
                    <button type="submit" class="btn btn-success">Cadastrar</button> 
                </form>
            </div>
        </section>
    </body>
</html>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

<script>
jQuery("input.telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
        
$(document).ready(function() {
    $("#CPF").mask("999.999.999-99");
});


$("#email").blur(function(){
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var email = $("#email").val();
  var valida =  regex.test(email);
  if (valida==false)
  alert("Email inválido!");
});

</script>
