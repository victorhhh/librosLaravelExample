<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\User;
class RestController extends Controller
{
    //
    public function restar($id){
        $video = Video::find($id);
        $librosJson = array(array('titulo'=>'Dracula'),
                            array('titulo'=>'It'));
        $jason = json_encode($librosJson);
        /*
         *[{"titulo":"Dracula","autor":"Bram Stroker","editorial":"Constable & Robinson","isbn":"978-1853260865","genero":"Terror"},{"titulo":"It","autor":"Stephen King","editorial":"Viking Press","isbn":"978-8497593793","genero":"Terror"} ]
         */
        header('Content-type: application/json');
        return $jason;
    }
}
