@extends('backend.layouts.master')

@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 h2 style="text-align:center;"> Informaçoes pessoais de matricula</h2>
            </div>
            <div class="col-md-8">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('alunos.index') }}"> Voltar</a>
        </div>
</div>
    </div>
   
    <div class="col-md-12">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome</strong>
                {{ $aluno->nome }}
            </div>
        </div>
        <div class="col-md-12">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefone</strong>
                {{ $aluno->telefone }}
            </div>
        </div>
        <div class="col-md-12">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cpf</strong>
                {{ $aluno->cpf }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Curso</strong>
                {{ $aluno->curso }}
            </div>
        </div>
        <div class="col-md-12">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado</strong>
                {{ $aluno->estado }}
            </div>
        </div>
        <div class="col-md-12">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cidade</strong>
                {{ $aluno->cidade }}
            </div>
        </div>
    </div>
@endsection