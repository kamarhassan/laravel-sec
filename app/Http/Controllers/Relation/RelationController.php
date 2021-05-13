<?php

namespace App\Http\Controllers\Relation;

use App\Http\Controllers\Controller;
use App\Models\Adress;
use App\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{

    public function GetUserAndAdress()
    {
        $User = User::With('adress')->get();
        return response()->json($User);

    }

    public function GetUserhaveAndAdress()
    {
        $User = User::WhereHas('adress')->get();
        return response()->json($User);
    }

    public function GetUserhaveAndAdressById()
    {
        $User = User::With('adress')->find(1);
        return response()->json($User);
    }

    public function GetUsernothaveAndAdressById()
    {
        $User = User::whereDoesntHave('adress')->get();
        return response()->json($User);
    }

    public function GetUserAndAdressWithQuery()
    {
        $User = User::With(['adress' =>function ($query){
            $query->select('user_id','country');
        }])->get();
        return response()->json($User);
    }

    public function GetAdressToUser()
    {
        $User = Adress::With('user')->find(1);
        return response()->json($User);
    }
}
