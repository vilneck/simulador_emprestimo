<?php

namespace App\Models;

class Convenio
{
    function findByChave($chave)
    {
        $dados = $this->all();
        dd($dados);
    }
    static function all()
    {
        return json_decode('[
            {
                "chave": "INSS",
                "valor": "INSS"
            },
            {
                "chave": "FEDERAL",
                "valor": "Federal"
            },
            {
                "chave": "SIAPE",
                "valor": "Siape"
            }
        ]');
    }


}
