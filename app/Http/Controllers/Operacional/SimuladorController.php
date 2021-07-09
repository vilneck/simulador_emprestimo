<?php

namespace App\Http\Controllers\Operacional;

use App\Http\Controllers\BaseController;
use App\Models\Convenio;
use App\Models\Instituicao;
use App\Models\Simulador;
use App\Models\TaxaInstituicao;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class SimuladorController extends BaseController
{

    function simular(Request $request)
    {
        $retorno = [];
        $this->validar($request);
        $dados = $request->all();

        $instituicoes = !empty($dados['instituicoes']) ? (object)$dados['instituicoes'] : Instituicao::all(); // Busca instituições em específico ou todas
        $convenios = !empty($dados['convenios']) ? (object)$dados['convenios'] : Convenio::all(); // Busca convenios em específico ou todos
        $numeroParcelas = isset($dados['parcela']) ? $dados['parcela'] : ''; // Busca parcelas se informado

        foreach ($instituicoes as $instituicao) {
            $instituicao = (object)$instituicao;
            $chave_instituicao = $instituicao->chave;
            $retorno[$chave_instituicao] = [];
            foreach ($convenios as $convenio) {
                $convenio = (object)$convenio;
                $chave_convenio = $convenio->chave;
                $taxas = TaxaInstituicao::getTaxas($chave_instituicao,$numeroParcelas);
                foreach ($taxas as $taxa) {
                    $item = [];
                    $item['taxa'] = $taxa->taxaJuros;
                    $item['parcelas'] = $taxa->parcelas;
                    $item['valor_parcela'] = round($dados['valor_emprestimo'] * $taxa->coeficiente,2);
                    $item['convenio'] = $chave_convenio;
                    $retorno[$chave_instituicao][] = $item;
                }
            }
        }


        return response()->json($retorno, 200);
    }

    function validar(Request $request)
    {
        $validador = Validator::make((array)$request->all(), Simulador::$rules, Simulador::$messages);

        if ($validador->fails()) {
            throw new ValidationException($validador);
        }
    }
}
