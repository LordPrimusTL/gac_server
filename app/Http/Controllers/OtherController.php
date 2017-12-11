<?php

namespace App\Http\Controllers;

use App\appendix_hymn;
use App\appendix_verse;
use App\main_hymn;
use App\main_verse;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function updateTable()
    {
        $mh = main_hymn::all();
        $a = main_verse::where(['hymn_id' => 1])->get();
        echo '<pre>';
        var_dump(count($a));
        echo '</pre>';
        foreach($mh as $m)
        {
            $m->verse_count = count(main_verse::where(['hymn_id' => $m->hymn_id])->get());

            $m->save();
        }

        var_dump('Success');
    }

    public function NotCount()
    {
        $mh = main_hymn::all();
        $count = 0;
        for($a = 0; $a <  300; $a++)
        {
            if($mh[$a]->verse_count == 0 || $mh[$a]->completed == false)
            {
                $count = $count + 1;
                echo "<pre>";

                var_dump($mh[$a]->hymn_id);

            }
        }
        var_dump("Total: " . $count);
    }

    public function MakeComplete()
    {
        $mh = main_hymn::all();
        foreach ($mh as $m)
        {
            if($m->verse_count == $m->n_verses)
            {
                $m->completed = true;
                $m->save();
            }

            var_dump($m->english. ": Success " );
        }
    }

    public function DownloadApp()
    {
        $filepath = public_path() . '/img/new_image.png';
    	return response()->download($filepath);
    }


    public function mainHymnResolve(){
        main_hymn::truncate();
        main_verse::truncate();
        $checkLogin = file_get_contents(storage_path() . "/hymn.json"); // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode($checkLogin, true);
        for($i = 0; $i < count($json); $i++)
        {
            $data = $json[$i];
            $chk = main_hymn::where('hymn_id', $data["A"])->first();
            if(empty($chk))
            {
                $mh = new main_hymn();
                $mh->hymn_id = $data["A"];
                $mh->english = $str = strtok($data["C"], "\n");
                $mh->yoruba = $str = strtok($data["D"], "\n");
                //dd($mh, $data);
                $mh->save();
            }
            try{
                $chkk = main_verse::where(['hymn_id' => $data["A"], 'verse_id' => $data["B"]])->first();
                if(empty($chkk))
                {
                    $mn = new main_verse();
                    $mn->hymn_id = $data["A"];
                    $mn->verse_id = $data["B"];
                    $mn->english = str_replace('"','',$data["C"]);
                    $mn->yoruba = $data["D"];
                    $mn->save();
                }
                else{
                    var_dump($chkk);
                }

            }catch (\Exception $ex)
            {
                dd($ex);
            }
        }
        dd('Done');
        //dd($json, json_last_error_msg());
        //return response()->json([count($json),$json]);


    }
    public function appHymnResolve(){
        appendix_hymn::truncate();
        appendix_verse::truncate();
        $checkLogin = file_get_contents(storage_path() . "/app_hymn.json"); // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode($checkLogin, true);
        for($i = 0; $i < count($json); $i++)
        {
            $data = $json[$i];
            $chk = appendix_hymn::where('hymn_id', $data["A"])->first();
            if(empty($chk))
            {
                $mh = new appendix_hymn();
                $mh->hymn_id = $data["A"];
                $mh->english = $str = strtok($data["C"], "\n");
                $mh->yoruba = $str = strtok($data["D"], "\n");
                //dd($mh, $data);
                $mh->save();
            }
            try{
                $chkk = appendix_verse::where(['hymn_id' => $data["A"], 'verse_id' => $data["B"]])->first();
                if(empty($chkk))
                {
                    $mn = new appendix_verse();
                    $mn->hymn_id = $data["A"];
                    $mn->verse_id = $data["B"];
                    $mn->english = str_replace('"','',$data["C"]);
                    $mn->yoruba = $data["D"];
                    $mn->save();
                }
                else{
                    var_dump($chkk);
                }

            }catch (\Exception $ex)
            {
                dd($ex);
            }
        }
        dd('Done');
        //dd($json, json_last_error_msg());
        //return response()->json([count($json),$json]);


    }
}
