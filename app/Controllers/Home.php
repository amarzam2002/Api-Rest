<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Prueba()
    {
        $valor = [
            'Prueba' => 'ejemplo',
            'Prueba1' => 'ejemplo',
            'Prueba2' => 'ejemplo',
            'Prueba3' => 'ejemplo',
            'Prueba4' => 'ejemplo',
            'Prueba5' => 'ejemplo',
            'id' => 1
        ];

        return $this->response->setJSON($valor);

        // echo "Hola";
        // return view('welcome_message');
    }
}

{
    //$valor = [
    //    'test' => 'ejemplo',
    //    'test3' => 'ejemplo',
    //    'test5' => 'ejemplo',
    //
    //    'id' => 1
    //];

    $this->db = \Config\DataBase::connect();

    $query = $this->db->query('select * from Disciplina d limit 10');

    $valor = ($query->getResult());
    // var_dump($valor);
    return $this->response->setJSON($Resultado);

    // return $this->response->setJSON($valor);

    // return view('welcome_message');
}
