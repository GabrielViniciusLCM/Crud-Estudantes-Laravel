<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function welcome (){
        return view('welcome');
    }


    public function home (){
        return view('home');
    }

    public function upload(Request $request){

        // se baseia no model estudante pegando dados pre definidos no database, e junta com o que vem da blade

        $dados = new Estudante;
        $dados->nome = $request->nome; // primeiro vem do database(table), segundo vem da blade.
        $dados->email = $request->email;

        //parte de enviar imagem 
       
        $imagem=$request->image;

        if($imagem){
            $imagemnome= time().'.'.$imagem->getClientOriginalExtension();
            $request->image->move('estudante', $imagemnome);
            $dados->image = $imagemnome;
        }
       
        $dados->save();

        return redirect()-> back();
    }

    public function view (){
        $dados= Estudante::all();

        return view ('display', compact('dados'));

    }

    public function excluir($id){
        $dados = Estudante::find($id);
        $dados->delete();

        return redirect()->back();
    }

    public function buscar(Request $request){

        $buscar = $request->buscar;
        $dados = Estudante::where('nome','like','%'.$buscar.'%') ->orWhere('email','like','%'.$buscar.'%')-> get();

        return view('display', compact('dados'));

    }

    public function editar_view($id){
        $dados = Estudante::find($id);

        return view ('editar', compact('dados'));

    }   

    public function editar($id, Request $request){

        // pega os dados nome e email da classe estudante pelo request (envio do usuario) e associa a variavel dados

        $dados = Estudante::find($id);
        $dados -> nome = $request -> nome;
        $dados -> email = $request -> email;

        // editar imagem, pegando a que foi enviada

        $image= $request->image;

        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request -> image->move('estudante', $imagename);
            $dados->image = $imagename;
        }
        
        $dados -> save();

        return redirect('view');
    }

   


}
