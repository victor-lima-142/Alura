<?php
namespace App\Http\Controllers;

use App\Serie;

class SeriesController extends BaseController
{
    public function __construct()
    {
        $this->classe = Serie::class;
    }
}
