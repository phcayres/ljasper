@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-left">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"><strong>Dashboard</strong></div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <a href="{{ route('report',['pessoas','pessoas.jrxml']) }}" target="_blank" class="list-group-item list-group-item-action">Listagem Simples</a></li>
                        <a href="#" target="_blank" class="list-group-item list-group-item-action">Passagem de Parâmetros</a></li>
                        <a href="#" target="_blank" class="list-group-item list-group-item-action">Master / Detail</a></li>
                        <a href="#" target="_blank" class="list-group-item list-group-item-action">Gráficos</a></li>
                    </div>
                </div>
            </div>
        </div>
<!--
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    You are logged in!
                </div>
            </div>
        </div>
-->
    </div>
</div>
@endsection
