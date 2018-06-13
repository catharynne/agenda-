{% extends "master.twig" %}
{% block conteudo %}
<div class="col-md-12">
	<h1 class="text-center text-success">Usuários</h1>
	<div class="row">
	<div class="col-md-6">
	<a href="/admin/usuario/novo" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Novo</a>
	</div>
	<div class="col-md-6">
	<input id="pesquisa" onkeyup="searchUsuario(this.value)" type="text" class="form-control datepicker" name="pesquisa" maxlength="50"  placeholder="Pesquisa" autofocus>
	</div>
	</div>
	<div class="table-responsive">
		<table id="table" class="table table-sm table-striped table-condensed table-bordered table-hover" cellspacing="0" width="100%">
			<thead>
				<tr style="background-color: #CCCCCC">
				<th class="text-center">Id</th>
					<th class="text-center">Nome</th>
					<th class="text-center">E-mail</th>
					<th class="text-center">Cpf</th>
					<th class="text-center">Telefone</th>
					<th class="text-center">Ações</th>
				</tr>
			</thead>
			<tbody id="conteudo">
				{% for usuario in usuarios %}
					<tr>
					<td>{{usuario['id']}}</td>
					<td>{{usuario['nome']}}</td>
					<td>{{usuario['email']}}</td>
					<td>{{usuario['cpf']}}</td>
					<td>{{usuario['telefone']}}</td>
					<td><a href="#" class="btn btn-warning glyphicon glyphicon-pencil btn-xs"></a>
					<a href="#" class="btn btn-danger glyphicon glyphicon-trash btn-xs"></a>
					</td>
					</tr>
				{% endfor %}
			</tbody>

		</table>
		<span id ="detalhes" class=""></span>
	</div>


</div>
{% endblock %}

{% block rodape %}
{{ parent() }}
{% endblock %}