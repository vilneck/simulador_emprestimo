<?php

namespace App\Http\Controllers\Operacional;

use App\Http\Controllers\BaseController;
use App\Models\Instituicao;
use Illuminate\Http\Request;

class InstituicoesController extends BaseController
{

    public function __construct()
    {
        $this->classe = Instituicao::class;
    }

}
