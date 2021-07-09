<?php

namespace App\Models;

class TaxaInstituicao
{

    static function getTaxas($instituicao,$numeroParcelas=null)
    {
       $taxas = [];
       foreach( Self::all() as $taxaInstituicao)
       {
           if($instituicao == $taxaInstituicao->instituicao)
           {
              if($taxaInstituicao->parcelas == $numeroParcelas or $numeroParcelas == null){
                $taxas[] = $taxaInstituicao;
               }
           }
       }
       return $taxas;
    }
    static function all()
    {
        return json_decode('[
            {
                "parcelas": 72,
                "taxaJuros": 2.05,
                "coeficiente": 0.02604,
                "instituicao": "BMG",
                "convenio": "INSS"
            },
            {
                "parcelas": 60,
                "taxaJuros": 2.05,
                "coeficiente": 0.03015,
                "instituicao": "BMG",
                "convenio": "INSS"
            },
            {
                "parcelas": 48,
                "taxaJuros": 2.05,
                "coeficiente": 0.03529,
                "instituicao": "BMG",
                "convenio": "INSS"
            },
            {
                "parcelas": 36,
                "taxaJuros": 2.05,
                "coeficiente": 0.04719,
                "instituicao": "BMG",
                "convenio": "INSS"
            },
            {
                "parcelas": 84,
                "taxaJuros": 1.9,
                "coeficiente": 0.024384,
                "instituicao": "BMG",
                "convenio": "INSS"
            },
            {
                "parcelas": 48,
                "taxaJuros": 2.05,
                "coeficiente": 0.03429,
                "instituicao": "PAN",
                "convenio": "INSS"
            },
            {
                "parcelas": 72,
                "taxaJuros": 2.08,
                "coeficiente": 0.02843,
                "instituicao": "PAN",
                "convenio": "INSS"
            },
            {
                "parcelas": 36,
                "taxaJuros": 2.10,
                "coeficiente": 0.03125,
                "instituicao": "PAN",
                "convenio": "FEDERAL"
            },
            {
                "parcelas": 60,
                "taxaJuros": 2.05,
                "coeficiente": 0.03035,
                "instituicao": "OLE",
                "convenio": "INSS"
            },
            {
                "parcelas": 72,
                "taxaJuros": 2.08,
                "coeficiente": 0.02843,
                "instituicao": "OLE",
                "convenio": "INSS"
            }
        ]');
    }


}
