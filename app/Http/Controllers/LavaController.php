<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

 
class LavaController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return string
     */
    public static function show()
    {
        return "Lava controller!";
    }

    public static function addTree(){
        DB::table('trees')->insert([
            'name' => 'test Tree',
            'type' => "tall"
        ]);
    }


    public static function getTrees()
    {
        $trees = DB::table('trees')->get();
        return view('trees', ['trees' => $trees]);
    }
}