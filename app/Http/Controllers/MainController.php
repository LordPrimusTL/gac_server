<?php



namespace App\Http\Controllers;


use App\appendix_hymn;

use App\appendix_verse;
use App\main_hymn;
use App\review;
use App\main_verse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Validator;

use Mockery\Exception;


class MainController extends Controller
{
    
public function LogOut()
    {
        Auth::logout();
        return redirect()->action('MainController@hymn');
    }
    
public function hymn()
    {
            
$main_hymn = main_hymn::all();
            
$app_hymn = appendix_hymn::all();
            
return view('hymn.all')->with(['main_hymn' => $main_hymn, 'app_hymn' => $app_hymn,'title' => 'All Hymn']);
    

}

    
public function GetMainHymn()
    {
        
$main_hymn = main_hymn::all();
        
$app_hymn = appendix_hymn::all();
        
return view('hymn.main')->with(['main_hymn' => $main_hymn,'title' => 'Main Hymn','app_hymn' => $app_hymn]);
    
}

    
    public function GetAppHymn()
    {
        $main_hymn = main_hymn::all();
        $app_hymn = appendix_hymn::all();
        
        return view('hymn.app')->with(['app_hymn' => $app_hymn,'title' => 'Appendix Hymn','main_hymn' => $main_hymn]);
    }

    
    public function GetMainVerse($id)
    {
        
        $hymn_verse = main_verse::where(['hymn_id' => $id])->orderBy('verse_id','asc')->get();
        return view('hymn.main_verse')->with(['title' => 'Main Hymn '. $id, 'hymn_id' => $id, 'hymn_verse' => $hymn_verse]);
        //var_dump($hymn_verse);
    }

    public function GetAppVerse($id)
    {
        $hymn_verse = appendix_verse::where(['hymn_id' => $id])->orderBy('verse_id','asc')->get();
        return view('hymn.app_verse')->with(['title' => 'Appendix Hymn '. $id, 'hymn_id' => $id, 'hymn_verse' => $hymn_verse]);
        //var_dump($hymn_verse);
    }

    public function AddHymn(Request $request)
    {
        var_dump(Input::all());
        $validator = Validator::make($request->all(),
            [
                'Email' => 'required',
                'HymnNumber' => 'required',
                'Verses' => 'required',
            ]
        );
        if ($validator->fails())
        {
            return response()->json(['errors'=> $validator->getMessageBag()->toArray()]);
        }
        else{
            return response()->json('Success');

        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function HymnPost(Request $request){
        if(Input::get('edpst') == 0)
        {
            
            if (Input::get('hymn_type') == 0) {

                $mh = new main_hymn();
                $mh->hymn_id = Input::get('id');
                $mh->english = Input::get('english');
                $mh->yoruba = Input::get('yoruba');
                $mh->n_verses = Input::get('n_verse');
                if($mh->save())
                {
                   Session::flash('success','Hymn Successfully Added');
                   return redirect()->back();
                }
                var_dump($mh);
            }

            if (Input::get('hymn_type') == 1)
            {
                $mh = new appendix_hymn();
                $mh->english = Input::get('english');
                $mh->yoruba = Input::get('yoruba');
                if($mh->save())
                {
                    Session::flash('success','Hymn Successfully Added');
                    return redirect()->back();
                }
                var_dump(Input::all());
            }
        }

        if (Input::get('edpst') == 1)
        {
            if (Input::get('hymn_type') == 0)
            {
                $mh = main_hymn::find(Input::get('m_id'));
                $mh->hymn_id = Input::get('id');
                $mh->english = Input::get('english');
                $mh->yoruba = Input::get('yoruba');
                $mh->n_verses = Input::get('n_verse');
                if($mh->save())
                {
                    Session::flash('success','Hymn Successfully Saved');
                    return redirect()->back();
                }
                var_dump(Input::all());
            }

            if (Input::get('hymn_type') == 1)
            {
                $mh = appendix_hymn::find(Input::get('m_id'));
                $mh->english = Input::get('english');
                $mh->yoruba = Input::get('yoruba');
                if($mh->save())
                {
                    Session::flash('success','Hymn Successfully Saved');
                    return redirect()->back();
                }
                var_dump(Input::all());
            }

        }

    }

    public function MainDelete($id)
    {
        //var_dump($id);

        $mh = main_verse::where(['hymn_id' => $id])->get();
        var_dump(count($mh));
        if(count($mh) == 0)
        {
            $mc = main_hymn::find($id);
            $mc->delete();
            Session::flash('success','Hymn Deleted Successfully');
            return redirect()->back();
        }
        elseif(count($mh) > 0)
        {
            foreach($mh as $m)
            {
                $m->delete();
            }
            $mc = main_hymn::find($id);
            $mc->delete();
            Session::flash('success','Hymn Deleted Successfully');
            return redirect()->back();
        }

    }

    public function AppDelete($id)
    {
        //var_dump($id);

        $mh = appendix_verse::where(['hymn_id' => $id])->get();
        var_dump(count($mh));
        if(count($mh) == 0)
        {
            $mc = appendix_hymn::find($id);
            $mc->delete();
            Session::flash('success','Hymn Deleted Successfully');
            return redirect()->back();
        }
        elseif(count($mh) > 0)
        {
            foreach($mh as $m)
            {
                $m->delete();
            }
            $mc = appendix_hymn::find($id);
            $mc->delete();
            Session::flash('success','Hymn Deleted Successfully');
            return redirect()->back();
        }

    }

    public function VersePost(Request $request,$id)
    {
        if(Input::get('edvrs') == 0)
        {
            //var_dump([Input::all(),'Add oooo']);
            if(Input::get('hymn_verse_type') == 0)
            {
                $hmv = new main_verse();
                $hmv->hymn_id = Input::get('main_hymn_id');
                $hmv->verse_id = Input::get('main_verse_id');
                $hmv->english = Input::get('english');
                $hmv->yoruba = Input::get('yoruba');
                if($hmv->save())
                {
                    $mh = main_hymn::where(['hymn_id' => $hmv->hymn_id])->get();
                    echo '<pre>';
                    var_dump($mh[0]);
                    var_dump(count(main_verse::where(['hymn_id' => $hmv->hymn_id])->get()));
                    echo '</pre>';
                    $mh[0]->verse_count = count(main_verse::where(['hymn_id' => $hmv->hymn_id])->get());
                    if($mh[0]->n_verses == $hmv->verse_id)
                    {
                        $mh[0]->completed = true;
                    }
                    $mh[0]->save();
                    Session::flash('success','Hymn Successfully Saved');
                    return redirect()->back();
                }
                //echo '<pre>';
                //var_dump($hmv[0]);
                //echo '</pre>';
            }
            if(Input::get('hymn_verse_type') == 1)
            {
                $hmv = new appendix_verse();
                $hmv->hymn_id = Input::get('main_hymn_id');
                $hmv->verse_id = Input::get('main_verse_id');
                $hmv->english = Input::get('english');
                $hmv->yoruba = Input::get(('yoruba'));
                if($hmv->save())
                {
                    Session::flash('success','Hymn Successfully Saved');
                    return redirect()->back();
                }
                //echo '<pre>';
                //var_dump($hmv[0]);
                //echo '</pre>';
            }
        }
        if(Input::get('edvrs') == 1)
        {
            if(Input::get('hymn_verse_type') == 0)
            {
                $hmv = main_verse::find(Input::get('id'));
                $hmv->verse_id = Input::get('main_verse_id');
                $hmv->english = Input::get('english');
                $hmv->yoruba = Input::get(('yoruba'));
                if($hmv->save())
                {
                    Session::flash('success','Hymn Successfully Saved');
                    return redirect()->back();
                }
                //echo '<pre>';
                //var_dump($hmv[0]);
                //echo '</pre>';
            }
            if(Input::get('hymn_verse_type') == 1)
            {
                $hmv = appendix_verse::find(Input::get('id'));
                $hmv->hymn_id = Input::get('main_hymn_id');
                $hmv->verse_id = Input::get('main_verse_id');
                $hmv->english = Input::get('english');
                $hmv->yoruba = Input::get(('yoruba'));
                if($hmv->save())
                {
                    Session::flash('success','Hymn Successfully Saved');
                    return redirect()->back();
                }
                //echo '<pre>';
                //var_dump($hmv[0]);
                //echo '</pre>';
            }
        }
    }

    public function MainVerseDelete($id)
    {
        $vrs = main_verse::find($id);
        $vrs->delete();
        Session::flash('success','Verse Deleted Successfully');
        return redirect()->back();
    }

    public function AppVerseDelete($id)
    {
        $vrs = appendix_verse::find($id);
        $vrs->delete();
        Session::flash('success','verse Deleted Successfully');
        return redirect()->back();
    }

    public function Review($aid)
    {
        return view('hymn.review')->with(['title'=>'Feedback']);
    }

    public function ReviewPost($aid)
    {
        var_dump(Input::all());
        $rev = new review();
        $rev->name = Input::get('name');
        $rev->feedback = Input::get('nfeedback');
        $rev->AID = $aid;
        if($rev->save())
        {
            Session::flash('success','Thank you for your feedback/Complaint/suggestions. We will get back to you shortly');
            return redirect()->back();
        }
    }
}
