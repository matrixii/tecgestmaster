<?php
/**
 * Created by PhpStorm.
 * User: mpica
 * Date: 07/01/2016
 * Time: 17:18
 */
namespace App\Helpers;
use App\Comuni;
class TerritoriHelper
    {

    public static function GetProvince()
        {
            $provincie=Comuni::select('id','regione')->groupBy('regione')->get();
            return json_encode($provincie);

        }
    public static function getComuniByidProv($id)
    {
       $comune=Comuni::find($id);

        $comuni=Comuni::select('id','descrizione')->where('provincia','=',$comune->provincia)->get();
        return json_encode($comuni);
    }

    }