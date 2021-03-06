<!DOCTYPE html>
<html>
<head>
	<title>Colabora.ai</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand nav-title" href="#">
	  	<i class="fas fa-heart"></i>
	  	Colabora.ai
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/cadastro-campanhas">Criar campanha</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Colaborar
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link disabled" href="#">Nossa missão</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Faça sua pesquisa aqui" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
	    </form>
	  </div>
	</nav>


	<section class="container-fluid">
		
		<header class="col-md-12  header-page">
			<h3>Capanhas</h3>
			<p>Listagem de campanhas próximas de você</p>
			<hr/>
			<br/>
		</header>
		<article class="col-md-12">
			<div class="row">
				
			@foreach ($campanhas as $campanha)
		    <article class="col-md-3" style="margin-bottom: 15px">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src={{$campanha->imagemBase64}} alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">{{$campanha->tituloEvento}}</h5>
				    <p class="card-text">{{$campanha->objetivoEvento}}</p>
				    <a href="#" class="btn btn-orange">
				    	<i class="fas fa-heart"></i>
				    	Colaborar
				    </a>
				    <a href="#" class="btn btn-primary" data-toggle="modal" data-target={{"#exampleModalLong".$campanha->id}}>
				    	<i class="fas fa-info-circle"></i>
				    	Detalhes
				    </a>
				  </div>
				</div>
			</article>
			
			<div class="modal fade" id={{"exampleModalLong".$campanha->id}} tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class=modal-title">{{$campanha->tituloEvento}}</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<!--<img class="card-img-top" style="width: 350px" src={{$campanha->imagemBase64}} alt="Card image cap">-->
			        <strong>Objetivo da campanha: </strong><p class="card-text">{{$campanha->objetivoEvento}}</p>
			        <strong>Data: </strong><p class="card-text">{{date('d/m/Y', strtotime($campanha->dataEvento))}}</p>
			        <strong>Local: </strong><p class="card-text">{{$campanha->endereco." - ".$campanha->cidade}}</p>
			        <strong>Responsável pela campanha: </strong><p class="card-text">{{$campanha->responsavel}}</p>
			        <strong>E-mail do responsável: </strong><p class="card-text">{{$campanha->email}}</p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
			@endforeach	
			
			<article class="col-md-3">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="https://www.visto-de-investidor-eb-5.com.br/wp-content/uploads/2016/02/melhores-high-schools-dos-EUA.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Escola Monteiro Lobaro</h5>
				    <p class="card-text">Arrecadação de alimentos não perecíveis e materiais de limpeza.</p>
				    <button onclick="teste('teste')" class="btn btn-primary">
				    	<i class="fas fa-heart"></i>
				    	Colaborar
				    </button>
				  </div>
				</div>
			</article>
			<article class="col-md-3">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Igreja_de_Santo_Ant%C3%A3o%2C_fachada%2C_Santo_Ant%C3%A3o_Calheta%2C_ilha_de_S%C3%A3o_Jorge%2C_A%C3%A7ores.JPG/1280px-Igreja_de_Santo_Ant%C3%A3o%2C_fachada%2C_Santo_Ant%C3%A3o_Calheta%2C_ilha_de_S%C3%A3o_Jorge%2C_A%C3%A7ores.JPG" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Igreja de Sapiranga</h5>
				    <p class="card-text">Arrecadação de alimentos não perecíveis e materiais de limpeza.</p>
				    <a href="#" class="btn btn-primary">
				    	<i class="fas fa-heart"></i>
				    	Colaborar
				    </a>
				  </div>
				</div>
			</article>
			<article class="col-md-3">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="https://r-ec.bstatic.com/images/hotel/max1024x768/773/77370121.jpg">
				  <div class="card-body">
				    <h5 class="card-title">Albergue de Porto Alegre</h5>
				    <p class="card-text">Arrecadação de alimentos não perecíveis e materiais de limpeza.</p>
				    <a href="#" class="btn btn-primary">
				    	<i class="fas fa-heart"></i>
				    	Colaborar
				    </a>
				  </div>
				</div>
			</article>
			</div>
		</article>	

	</section>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="assets/js/campanhas.js"></script>
</body>
</html>