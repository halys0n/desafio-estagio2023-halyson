@extends('backend.layouts.master')

@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Log</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('alunos.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong>Cheque os dados enviados<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('alunos.update',$aluno->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-6 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefone:</strong>
                <input type="text" name="telefone" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cpf:</strong>
                <input type="text" name="cpf" class="form-control">
            </div>
        </div>
        
            <div class="form-group">
                <strong>Curso:</strong>
                <select class="form-control" name="curso">
                                <optgroup label="Curso">
                                <option value="Agronegócio">Agronegócio</option>
                                <option value="Edificações">Edificações</option>
                                <option value="Informática">Informática</option>
                                <option value="Administração">Administração</option>
                                <option value="Nutrição">Nutrição</option>
                            </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label for="uf">Estado</label>
                <select name="estado" id="uf">
                    <option></option>
                </select>

                <label for="cidade">Cidade</label>
                <select id="cidade">
                    <option></option>
                </select>
            </div>
        </div>
        </div>
    <script type="text/javascript">

                    const ulrUF = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados'

                    const cidade = document.getElementById("cidade")

                    const uf = document.getElementById("uf")

                    window.addEventListener('load', async()=>{
                        const request = await fetch (ulrUF)
                        const reponse = await request.json()   

                        const options = document.createElement("optgroup")
                        options.setAttribute('label', 'UFs')
                        reponse.forEach (function(uf){
                            options.innerHTML += '<option>'+uf.sigla+'</option>'
                        })
                        uf.append(options)
                        
                    })
                    uf.addEventListener('change', async function(){                 
                    
                        const urlCidades = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+uf.value+'/municipios'
                        const request = await fetch(urlCidades)
                        const reponse = await request.json()

                        let options = ''
                        responde.forEach(function(cidades){
                            options += '<options>'+cidades.nome+'</options>'
                        })
                        cidade.innerHTML = options
                    })
                
        </script>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Matricular</button>
        </div>
    </div>
   
</form>
@endsection