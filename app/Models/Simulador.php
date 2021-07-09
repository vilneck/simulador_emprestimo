<?php

namespace App\Models;

class Simulador
{
    static $rules = [
        'valor_emprestimo'=>"required|numeric|min:0",
        'instituicoes'=>"array",
        'convenios'=>"array",
        'parcela'=>"integer|in:48,72,36,60"
    ];
    static $messages =[
        'valor_emprestimo.required'=>"O valor do empréstimo é obrigatório!",
        'valor_emprestimo.min'=>"O valor do empréstimo deve ser maior que zero!",
        'instituicoes.array'=>"As instituições devem estar no formato de array",
        'convenios.array'=>"Os convênios devem estar no formato de array",
        'parcela.integer'=>"A parcela deve ser um número inteiro",
        'parcela.in'=>"Número de parcelas inválido, opções disponíveis: 36,48,60,72"
    ];
}
