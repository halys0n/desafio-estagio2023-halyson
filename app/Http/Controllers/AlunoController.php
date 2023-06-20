<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::latest()->paginate(5);
        return view('alunos.index',compact('alunos'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('alunos.create');
    }

  
   public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
        ]);
  
        Aluno::create($request->all());
   
        return redirect()->route('alunos.create')
                        ->with('success','Blog created successfully.');
    }

    public function show(Aluno $aluno)
    {
        return view('alunos.show',compact('aluno'));
    }

   
    public function edit(Aluno $aluno)
    {
        return view('alunos.edit',compact('aluno'));
    }

   
    public function update(Request $request, Aluno $aluno)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
        ]);
  
        $aluno->update($request->all());
  
        return redirect()->route('alunos.index')
                        ->with('success','Matricula atualizada');
    }
  

    
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
  
        return redirect()->route('alunos.index')
                        ->with('success','Matricula excluida');
    }
}
