@extends('layouts.app')

@section('content')
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading" align="center">
		    <h4>Listagem de pessoas</h4> 
		</div>	
		<table width="100%" class="table table-hover">
			<thead>
				<tr>
					<td class="col-xs-2" align="center"><strong>Código</strong></td>
					<td class="col-xs-8"><strong>Nome</strong></td>
				</tr>
			</thead>
			<tbody>
			@forelse($dados as $value)
			<tr>
				<td align="center">{{ $value->id }}</td>
				<td>{{ $value->nome }}</td>
			</tr>
			@empty
			<tr>
				<td align="center" colspan="2">Nenhum registro cadastrado!</td>
			</tr>
			@endforelse	
			</tbody>
		</table>
	</div>
    <div class="pull-left">
		{{$dados->links()}}
	</div>
    <div class="pull-right" >
		 <a class="btn btn-default btn-sm" role="button" href="{{ route( 'report', ['pessoas.jrxml','pessoa'] ) }}" target="_blank">Relatório geral</a>
		 <a class="btn btn-default btn-sm" role="button" href="{{ route( 'report', ['pes_fun_master.jrxml','pes_fun_master'] ) }}" target="_blank">Relatório Master-Detail</a>
		 <a class="btn btn-default btn-sm" role="button" href="{{ route( 'report01', ['a'] ) }}" target="_blank">Nomes iniciando com a letra A</a>
		 <a class="btn btn-default btn-sm" role="button" href="{{ route( 'jsontopdf' ) }}" target="_blank">JSON to PDF</a>
		 <a class="btn btn-default btn-sm" role="button" href="javascript:history.back()">Voltar</a>
	</div>	
</div>
@endsection