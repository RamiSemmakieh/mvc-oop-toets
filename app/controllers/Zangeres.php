<?php

class Zangeres extends BaseController
{
    private $zangeresModel;


    public function __construct()
    {
        $this->zangeresModel = $this->model('ZangeresModel');
    }

    public function index()
    {

        $restult = $this->zangeresModel->getZangeres();

        
        $rows = "";
        foreach ($result as $zangeres) {
            $rows .= "<tr>
                                <td>$zangeres->Naam</td>
                                <td>$zangeres->NettoWaarde</td>
                                <td>$zangeres->Land</td>
                                <td>$zangeres->Mobiel</td>
                                <td>$zangeres->Leeftijd</td>
                           </tr>";
        }
        $date = [

            'title' => 'Top 5 rijkste zangerste ter wereld';
            'rows' => $rows
        ];

        $this->view ('Zangeres/Zangeres', $data);
    }

}