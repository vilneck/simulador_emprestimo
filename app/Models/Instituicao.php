<?php

namespace App\Models;

class Instituicao extends BaseModel
{

    static function all()
    {
        $dados = json_decode('[
            {
                "chave": "PAN",
                "valor": "Pan"
            },
            {
                "chave": "OLE",
                "valor": "Ole"
            },
            {
                "chave": "BMG",
                "valor": "Bmg"
            }
        ]');
        return $dados;
    }

}
