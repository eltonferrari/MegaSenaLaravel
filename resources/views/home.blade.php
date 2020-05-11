@extends('layouts.app')

@section('content')
<div class="container">
    <div class="legend row justify-content-center">CONTROLE</div>
    <div class="botoes row justify-content-center">
        <div class="buttons">
            <button class="btn btn-primary m-2 p-2" type="submit">Importar Lista</button>
            <button class="btn btn-danger m-2 p-2" type="button">Listar</button>
            <div class="dropdown row justify-content-center m-2 p-2">
                <button class="btn btn-success dropdown-toggle" 
                        data-toggle="dropdown" 
                        type="button" >
                    Calcular ++
                </button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">6 Números</a>
                    <a href="#" class="dropdown-item">7 Números</a>
                    <a href="#" class="dropdown-item">8 Números</a>
                    <a href="#" class="dropdown-item">9 Números</a>
                    <a href="#" class="dropdown-item">10 Números</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">        
        <div class="lista m-2 p-2">LISTA DE JOGOS CADASTRADOS</div>
        <div class="add m-2 p-2">ADICIONAR NOVO JOGO</div>
    </div>
</div>
@endsection
