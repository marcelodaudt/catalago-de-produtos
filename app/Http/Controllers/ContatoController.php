<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContatoController extends Controller
{
    public function index(){
    	$data['titulo'] = "Minha Página de Contato";

    	return view('contato', $data);
    }

    public function enviar(Request $request){
    	$dadosEmail = array(
    		'nome' => $request->input('nome'),
    		'email' => $request->input('email'),
    		'assunto' => $request->input('assunto'),
    		'msg' => $request->input('msg'),
    	);

    	Mail::send('email.contato',$dadosEmail,function($message){
    		$message->from('mdaudt@gmail.com','Formulário de Contato');
    		$message->subject('Mensagem enviada pelo formulário de contato');
    		$message->to('marcelo.daudt@usp.br');
    		//Quando quiser enviar com cópia: $message->to('marcelo.daudt@usp.br')->cc('');
    	});

    	return redirect('contato')->with('success', 'Mensagem enviada, em breve entraremos em contato!');
    }
}
