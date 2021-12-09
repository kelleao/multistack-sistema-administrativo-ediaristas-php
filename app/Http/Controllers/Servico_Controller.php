<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRequest;
use App\Models\Servico;
use Illuminate\Http\Request;

class Servico_Controller extends Controller
{
    public function index()
    {
        $servicos = Servico::paginate(10);

       
        return view('serviços.index')->with('servicos', $servicos);
    }
    public function create()
    {
        return view('serviços.create');
    }
    public function store(ServicoRequest $request)
    {
        $dados = $request->except('_token');
        Servico::create($dados);
       
        return redirect()->route('servicos.index');

    }
    public function edit(int $id)
    {
        $servico = Servico::findOrFail($id);

        return view('serviços.edit')->with('servico', $servico);
    }
    public function update(int $id, ServicoRequest $request)
    {
        $dados = $request->except(['_token', '_method']);
        $servico = Servico::findOrFail($id);
        $servico->update($dados);
        return redirect()->route('servicos.index');
    }
}
