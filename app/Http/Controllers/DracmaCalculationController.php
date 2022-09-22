<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DracmaCalculationController extends Controller {
    

    public function GetCalculationDracma(Request $requestData) {
        $data = $requestData->all();
        $reputation = $data["reputation"];
        $lightsBlessing = $data["LightsBlessing"];
        $afroditeBlessing = $data["AfroditeBlessing"];
        $arcanesBlessing = $data["ArcaneBlessing"];
        $midasBlessing = $data["MidaBlessing"];
        $rangEpicoOuMais = $data["RankEpico"];

        $baseValue = 0;

        switch ($reputation){
            case "I":
                $baseValue = 50;
                break;
            case "II":
                $baseValue = 100;
                break;
            case "III":
                $baseValue = 150;
                break;
            case "IV":
                $baseValue = 200;
                break;
            case "V":
                $baseValue = 250;
                break;
            default:
                $baseValue = 50;
                break;
        }

        $finalValue = $baseValue;

        if ($lightsBlessing == "true"){
            $finalValue = $finalValue * 2;
        }
        if ($afroditeBlessing == "true"){
            $finalValue = $finalValue * 2;
        }
        if ($midasBlessing == "true"){
            $finalValue = $finalValue * 2;
        }
        if ($arcanesBlessing == "true"){
            $finalValue = $finalValue * 2;
        }
        if ($rangEpicoOuMais == "true"){
            $finalValue = $finalValue * 2;
        }

        return $finalValue;
    }


}
