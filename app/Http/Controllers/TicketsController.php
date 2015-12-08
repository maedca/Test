<?php namespace Test\Http\Controllers;

use Test\Http\Requests;
use Test\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TicketsController extends Controller {

    public function latest()
    {
        dd('latest');
    }
    public function popular()
    {
        dd('popular');
    }
    public function closed()
    {
        dd('tutoriales');
    }
    public function details($id)
    {
        dd('detalle: '. $id);
    }

}
