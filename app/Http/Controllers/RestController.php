<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\User;
class RestController extends Controller
{
    //
    public function terror(){

        $librosJson = array(array('titulo'=>'Dracula', 'autor'=>'Bram Strocker', 'editorial'=>'Constable & robinson', 'isbn'=>'978-1853260865', 'genero'=>'terror'),
                            array('titulo'=>'It', 'autor'=>'stephen king', 'editorial'=>'viking press', 'isbn'=>'978-8497593793', 'genero'=>'Terror'));
        $jason = json_encode($librosJson);
        /*
         *[{"titulo":"Dracula","autor":"Bram Stroker","editorial":"Constable & Robinson","isbn":"978-1853260865","genero":"Terror"},
         * {"titulo":"It","autor":"Stephen King","editorial":"Viking Press","isbn":"978-8497593793","genero":"Terror"} ]
         */
        header('Content-type: application/json');
        return $jason;
    }
    public function ciencia(){

        $librosJson = array(array('titulo'=>'Blade Runner', 'autor'=>'Philip K. Dick', 'editorial'=>'Double DAy', 'isbn'=>'978-1853260865', 'genero'=>'SCI-FI'),
                            array('titulo'=>'Guerra de los mundos', 'autor'=>'H. G. Wells', 'editorial'=>'porrua', 'isbn'=>'978-8497593793', 'genero'=>'SCI-FI'));
        $jason = json_encode($librosJson);
        /*
         *[{"titulo":"Blade Runner","autor":"Philp K. Dick","editorial":"DoubleDay","isbn":"978-1853268738","genero":"SCI-FI"},
         * {"titulo":"La Guerra de los Mundos","autor":"H. G. Wells","editorial":"porrua","isbn":"978-849787576","genero":"SCI-FI"} ]
         */
        header('Content-type: application/json');
        return $jason;
    }
    public function programacion(){

        $librosJson = array(array('titulo'=>'Java desde cero', 'autor'=>'Deitel', 'editorial'=>'McGrawHill', 'isbn'=>'978-1853260865', 'genero'=>'programación'),
            array('titulo'=>'El lenguaje de programación C', 'autor'=>'Dennis Ritchie', 'editorial'=>'McGrawHill', 'isbn'=>'978-8497593793', 'genero'=>'Programacion'));
        $jason = json_encode($librosJson);
        /*
         *[{"titulo":"Java desde cero","autor":"Deitel","editorial":"McGrawHill","isbn":"978-1853247654","genero":"Programación"},
         * {"titulo":"El lenguaje de programación C","autor":"Dennis Ritchie","editorial":"McGrawHill","isbn":"978-849786745","genero":"Programación"} ]
        */
        header('Content-type: application/json');
        return $jason;
    }

    public function base(){

        $librosJson = array(array('titulo'=>'Principios de base de datos', 'autor'=>'Abraham Silverschatz', 'editorial'=>'McGrawHill', 'isbn'=>'978-1853260865', 'genero'=>'base de datos'),
            array('titulo'=>'Principios de deiseño de base de datos', 'autor'=>'Abraham Silverschatz', 'editorial'=>'McGrawHill', 'isbn'=>'978-8497593793', 'genero'=>'base de datos'));
        $jason = json_encode($librosJson);
        /*
         *[{"titulo":"Principios de base de datos","autor":"Abraham Silberschatz","editorial":"McGrawHill","isbn":"978-18532768765","genero":"Base de de datos"},
         * {"titulo":"Principios de diseño de base de datos","autor":"Abraham Silberschatz","editorial":"McGrawHill","isbn":"978-849734535","genero":"Base de datos"} ]
         *
         */
        header('Content-type: application/json');
        return $jason;
    }

    public function historia(){

        $librosJson = array(array('titulo'=>'Los pilares de la tierra', 'autor'=>'Ken Follet', 'editorial'=>'purrua', 'isbn'=>'978-1853260865', 'genero'=>'historia'),
            array('titulo'=>'Hiroshima', 'autor'=>'Jhon Hersey', 'editorial'=>'Alfred A. Knopf', 'isbn'=>'978-8497593793', 'genero'=>'historia'));
        $jason = json_encode($librosJson);
        /*
         *  [{"titulo":"Los pilares de la tierra","autor":"Ken Follet","editorial":"Purrua","isbn":"978-18532434763","genero":"Historia"},
         * {"titulo":"Hiroshima","autor":"John Hersey","editorial":"Alfred A. Knopf","isbn":"978-8497845356","genero":"Historia"} ]
        */
        header('Content-type: application/json');
        return $jason;
    }

}
