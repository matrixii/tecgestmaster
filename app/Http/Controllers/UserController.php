<?php
/**
 * Created by PhpStorm.
 * User: mpica
 * Date: 04/01/2016
 * Time: 17:53
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Comuni;
use App\Helpers\TerritoriHelper;
class UserController extends Controller
{

    protected function LogUser()
    {
        return 'sono dentro  come utente';
    }

    protected function GuestUser()
    {
        return View('guestLogRegister');
    }
    protected function LogGuest()
    {
        //dd(Input::all());
        $credentials = [
            'email'    => Input::get('email'),
            'password' => Input::get('password')
        ];
        dd(Sentinel::authenticate($credentials));

        return View('guestLogRegister');
    }

    protected function RegisterGuest()
    {
        $provincie=Comuni::select('id','regione')->groupBy('regione')->get();

        return View('guestRegister',['provincie' => $provincie]);
    }

    protected function GetProvince()
    {

        return TerritoriHelper::GetProvince();

    }

    protected function getComuniByProvincia($id)
    {

        return TerritoriHelper::getComuniByidProv($id);

    }


}