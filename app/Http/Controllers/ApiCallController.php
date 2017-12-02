<?php

namespace App\Http\Controllers;

use App\appendix_hymn;
use App\appendix_verse;
use App\Installations;
use App\main_hymn;
use App\main_verse;
use Illuminate\Http\Request;

class ApiCallController extends Controller
{
    //Get All Main Hymn
    public function GetAllMainHymn()
    {
        $all = main_hymn::all();
        return response()->json($all);
    }

    public function GetMainHymn()
    {
            $all = main_hymn::where('hymn_id', '>', '0')->Where('hymn_id', '<', '301')->orderBy('hymn_id','ASC')->get();
            //$all = main_hymn::where(['id' > 0, 'id' < 101])->orderBy('id','ASC')->get();
            return response()->json($all);
    }
    //Get Verse of main hymn choosed
    public function GetMainVerse()
    {
        $chosedhymn = main_verse::where('hymn_id', '>', '0')->Where('hymn_id', '<', '301')->orderBy('hymn_id','ASC')->get();
        return response()->json($chosedhymn);
    }

    public function GetAllAppHymn()
    {
        $all = appendix_hymn::all();
        return response()->json($all);
    }

    public function GetAppVerse($id)
    {
        $chosedhymn = appendix_verse::where('hymn_id',$id)->get();
        return response()->json($chosedhymn);
    }
    public function GetAllMainVerse(){
        $main_verse = main_verse::all();
        return response()->json($main_verse);
    }


    public function GetAllAppVerse(){
        $app_verse = appendix_verse::all();
        return response()->json($app_verse);
    }


    public function PostInstallation(Request $request)
    {
        //Installation
        //return response()->json(json_encode($request->all()));
        $ins = new Installations();
        $ins->Name = "No Name";
        $ins->Branch = "No Branch";
        $ins->UUID = $request->UUID;
        $ins->PhoneType = $request->PhoneType;
        $ins->AID = $request->AndroidID;
        try{
            $ins->save();
            return response()->json(1);
        }catch(\Exception $ex){
            return response()->json($ex->getMessage());
        }
    }

}
