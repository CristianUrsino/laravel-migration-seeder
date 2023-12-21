<?php

namespace App\Http\Controllers;

use App\Models\train;
use Carbon\Carbon;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $currentDate = Carbon::now()->toDateString();
        $trains = Train::whereDate('orario_partenza', $currentDate)->get();;
        
        return view('trains.index',compact('trains'));
    }
}
