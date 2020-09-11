<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmailRequest;
use App\Email;
use App\Estagio;
use Illuminate\Support\Facades\Gate;
use Auth;
use App\Mail\enviar_para_analise_tecnica_mail;
use App\Mail\enviar_para_parecerista_mail;
use Illuminate\Support\Facades\Mail;
use Uspdev\Replicado\Pessoa;

class EmailController extends Controller
{
    public function enviar_para_analise_tecnica(Request $request, Estagio $estagio){
        Mail::send(new enviar_para_analise_tecnica_mail($estagio));        
        return redirect("/estagios/{$estagio->id}")->with('success', 'E-mail enviado com sucesso!'); ;
    }

    public function enviar_para_parecerista(Request $request, Estagio $estagio){
        if($estagio->numparecerista){
            Mail::send(new enviar_para_parecerista_mail($estagio));
            $request->session()->flash('alert-info','E-mail enviado com sucesso!');
        } else {
            $request->session()->flash('alert-danger','E-mail não enviado! Informe o parecerista!');
        }
        return redirect("/estagios/{$estagio->id}") ;
    }
}





