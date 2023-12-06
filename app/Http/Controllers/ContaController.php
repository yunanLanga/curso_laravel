<?php


namespace App\Http\Controllers;
use App\Models\Conta;
use App\Http\Requests\ContaRequest;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    //listar as contas
    public function index(){
      $contas = Conta::orderByDesc('created_at')->get();

     
       return view('contas.index', ['contas' => $contas]);
    }

    // Detalhes da conta
    public function show(){
        return view('contas.show');
     }

    //Carregar o formulario cadastrar nova conta
    public function create(){
        return view('contas.create');
     }



    // cadastrar no banco de dados nova conta
    public function store(ContaRequest $request){
       
       //validar formulario
       $request->validated();

       // cadastrar no banco de dados na tabelas conts os valores dos campos
       $conta = Conta::create($request->all());

       //redirecionar o usuario, enviar a mensagem de sucesso
       return redirect()->route('conta.show')->with('success', 'conta cadastrada com sucesso');
       dd($conta);
    }

    
    //carregar o formulario editar a conta
    public function edit(){
        return view('contas.edit');
     }

     // carregar a View
     public function update(){
        dd("editar");
     }


     // Excluir a conta do banco de dados 
     public function destroy(){
        dd("Apagar");
     }
}
