@extends('backend.layouts.master')

@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Alunos Cadastrados</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('alunos.create') }}"> Nova Matricula</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" id="register-dataTable" width="100%" cellspacing="0">
        <tr>
            <th>Nome</th>
            <th>Curso</th>
            <th>Telefone</th>
            <th width="250px"> </th>
        </tr>
        @foreach ($alunos as $aluno)
        <tr>
            <td>{{ $aluno->nome }}</td>
            <td>{{ $aluno->curso }}</td>
            <td>{{ $aluno->telefone }}</td>
            <td>
                <form action="{{ route('alunos.destroy',$aluno->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('alunos.show',$aluno->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('alunos.edit',$aluno->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
   
      
@endsection