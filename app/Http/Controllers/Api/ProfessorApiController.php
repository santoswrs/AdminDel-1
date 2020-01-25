<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;

Class ProfessorApiController extends \App\Http\Controllers\Controller {
    public function all(){
        return \App\Entity\Professor::all();
    }
    public function get($id){
        return \App\Entity\Professor::find($id);
    }
    public function update(Request $request, $id){
        return '{"mensagem": "Efetuado com sucesso!!!"}';
    }
    public function delete($id){
        return \App\Entity\Professor::delete($id);
    }

}