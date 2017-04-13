<?php namespace produtos\Http\Controllers;
use Illuminate\Support\Facades\DB;
use produtos\Lista;
use Request;

class ListaController extends Controller {

    public function lista(){

       // $lista = DB::select('select * from lista');
         $lista = Lista::all();
         return view('ToDo.listagem')->with('lista', $lista);
    }
    
   public function mostra($id){

	    $resposta = Lista::find($id);

	    if(empty($resposta)) {
	        return "Essa tarefa não existe";
	    }
    return view('ToDo.detalhes')->with('p', $resposta);
   }

    public function novo(){
   
     return view('ToDo.formulario');
    }

	 
 	public function adiciona(){
// pegar dados do formulario
    	/*$nome = Request::input('nome');
    	$estado = Request::input('estado');
  		$descricao = Request::input('descricao');*/
	  // salvar no banco de dados
  		/*DB::insert('insert into lista values (null, ?, ?, ?)', 
   		array($nome, $estado, $descricao));*/
	 // retornar alguma view 
        Lista::create(Request::all());

        return redirect()
            ->action('ListaController@lista')
            ->withInput(Request::only('nome'));
    }
	  
    
     public function listaJson(){
        $lista = Lista::all();
        return response()->json($lista);
    }

      public function remove($id){
        $lista = Lista::find($id);
        $lista->delete();
        return redirect()
            ->action('ListaController@lista');
    }
	
} 