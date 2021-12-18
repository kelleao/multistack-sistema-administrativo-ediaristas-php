<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRequest;
use App\Models\Servico;
use Illuminate\Http\Request;

class Servico_Controller extends Controller
{
    /**
     * Lista os serviços
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $servicos = Servico::paginate(10);

       
        return view('serviços.index')->with('servicos', $servicos);
    }
    /**
     * Mostra o from vazio para criação
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('serviços.create');
    }
    /**
     * Cria um novo registro no banco de dados
     *
     * @param ServicoRequest $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function store(ServicoRequest $request)
    {
        $dados = $request->except('_token');
        Servico::create($dados);
       
        return redirect()->route('servicos.index')->with('mensagem', 'Serviço criado com sucesso!');

    }
    /**
     * Mostra o formulario preenchido para alteração
     *
     * @param integer $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(int $id)
    {
        $servico = Servico::findOrFail($id);

        return view('serviços.edit')->with('servico', $servico);
    }
    /**
     * Atualiza um registro no banco de dados
     *
     * @param integer $id
     * @param ServicoRequest $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function update(int $id, ServicoRequest $request)
    {
        $dados = $request->except(['_token', '_method']);
        $servico = Servico::findOrFail($id);
        $servico->update($dados);
        return redirect()->route('servicos.index')->with('mensagem', 'Serviço atualizado com sucesso!');
    }
}
