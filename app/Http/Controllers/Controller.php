<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage(){
        $variavel = "Home";
        return view('home', [
            'title' => $variavel
        ]);
    }
    public function login(){
        $variavel = "Login";
        return view('login', [
            'login' => $variavel
        ]);
    }
    public function labs(){
        // $nome = $_GET['nome'] ?? 'vazio';
        // $endereco = $_GET['endereco'] ?? 'vazio';
        // $variavel = "saida" ?? 'vazio';
        // $dados = [
        //     $nome, 
        //     $endereco, 
        //     $variavel
        // ];
        // return view('saida', [
        //     'nome'      => $nome,
        //     'endereco'  => $endereco,
        //     'saida'     => $variavel,
        //     'dados'     => $dados
        // ]);
        return view ('labs');
    }
    public function usuario(){
        $nome       = $_GET['nome'];
        $endereco   = $_GET['endereco'];
        $dados      = [$nome, $endereco];
        return $dados;
    }
}
