<?php

namespace App\Http\Controllers\Operacional;

use App\Http\Controllers\BaseController;
use App\Models\Convenio;

class ConveniosController extends BaseController
{

    public function __construct()
    {
        $this->classe = Convenio::class;
    }

}
