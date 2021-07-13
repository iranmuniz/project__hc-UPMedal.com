<header>
<!-- AQUI FICA O NAVBAR -->
<!-- MENU DE NAVEGAÇÃO -->
	<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light bg-light">
		<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav navbar-right mr-auto mt-2 mt-lg-0">
			<a class="nav-link" href="index.php"><img src="assets/img/icons/geek.png" class="simbol-navbar" alt="Gente Nerd Geek"></a>
				<li class="nav-item active">
					<a class="nav-link" href="index.php"><span class="bottom-navbar">HOME</span><span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="bottom-navbar">PRODUTOS</span></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="all-products.php"><span class="li-menu-all-products">Todos os Produtos</span></a>
						<a class="dropdown-item" href="#"><span class="li-menu-all-products">Almofadas</span></a>
						<a class="dropdown-item" href="#"><span class="li-menu-all-products">Canecas</span></a>
						<a class="dropdown-item" href="#"><span class="li-menu-all-products">Quadros</span></a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php"><span class="bottom-navbar">SOBRE NÓS</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php"><span class="bottom-navbar">CONTATO</span></a>
				</li>
			</ul>
<!-- AQUI FICA O BOTÃO DE PESQUISA -->
				<form class="form-inline my-2 my-lg-0 mr-5">
					<input class="form-control mr-sm-2" type="search" placeholder="Deseja alguma coisa?">
					<button class="btn btn-sm btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
				</form>
<!-- AQUI FICA O BOTÃO DE LOGAR -->
			<ul class="nav navbar-nav navbar-right">
				<li>
					<button type="button" class="btn btn-sm btn-primary my-2 my-sm-0" data-toggle="modal" data-target="#modalLogin"><span class="fa fa-user"> </span>Login</button>
				</li>
			</ul>
		</div>
	</nav>
<!-- MODAL LOGIN -->
<!-- AQUI FICA O MODAL DE INSCRIÇÃO OU LOGIN -->
	<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">ACESSE AGORA</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body center">
			<div class="col-md-6">
				<label for="Login">Login</label><br>
					<input type="text" name="Login" id="Login" placeholder="CPF ou E-mail" required></div>
					<br>
			<div class="col-md-6">
				<label for="senha">Senha</label>
				<input type="senha" name="senha" id="senha" placeholder="Password" required>
			</div>
			<div class="col-md-6">
				<a href="#" class="tooltip-test" title="Tooltip">Esqueci minha Senha</a>
			</div>
			<div class="col-md-6"><br>
				<button type="submit" class="btn btn-primary">Acessar</button> 
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalCadastro">Cadastre-se</button>
			</div>
		</div>
		</div>
	</div>
<!-- /MODAL LOGIN -->
<!-- MODAL CADASTRO -->
	<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">CADASTRE-SE</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body center">
					<form action="cadastro.html" method="POST">
						<div class="col-md-6">
							<label for="nomeCompleto">Nome</label><br>
							<input type="text" name="nomecompleto" id="nomeCompleto" >
						</div>
						<div class="col-md-6">
							<label for="SobreNome">Sobrenome</label><br>
							<input type="text" name="SobreNome" id="SobreNome">
						</div>
							<div class="col-md-6">
							<label for="DatadeNascimento">Data de Nascimento</label><br>
							<input type="date" name="DatadeNascimento" id="DatadeNascimento" placeholder="DD/MM/AAAA" required>
						</div>
						<div class="col-md-6">
							<label for="sexo">Sexo</label><br>
							<select name="genero" id="genero">
								<option selected disabled>Selecione uma opção</option>
								<option value="feminino">Feminimo</option>
								<option value="masculino">Masculino</option>
								<option value="N/A">N/A</option>
							</select>
						</div>
						<div class="col-md-6">
							<label for="CPF">Telefone</label><br>
							<input type="text" class="telefone" name="Telefone" id="Telefone" placeholder="Telefone" required>
						</div>

						<div class="col-md-6">
							<label for="email">E-mail</label><br>
							<input type="email" name="email" id="email" placeholder="grupog5@email.com" required>
						</div>
					
						<div class="col-md-6">
							<label for="CPF">CPF</label><br>
							<input type="CPF" name="CPF" id="CPF" placeholder="CPF" required>
							</div>
						<div class="col-md-6">
							<label for="senha">Senha</label><br>
							<input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
						</div>
						<div class="col-md-6">
							<label for=" ConfirmarSenha">Confirmar Senha</label><br>
							<input type="password" name="ConfirmarSenha" id="ConfirmarSenha" placeholder="Confirme sua senha" required>
						</div>
						<div class="col-md-6">
						<br>
							<label for="sim"><input type="checkbox" name="cimena" id="sim" value="sim" checked>Desejo receber ofertas</label>
						</div>
						<br>
							<button type="submit" class="btn btn-success">Cadastrar</button> 
					</form>
				</div>
			</div>
		</div>
  	</div>
<!-- /MODAL CADASTRO -->
</header>