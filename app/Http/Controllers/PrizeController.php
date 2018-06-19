<?php

namespace App\Http\Controllers;

use App\AnalyticsPage;
use App\AnalyticsVisitor;
use App\Contact;
use App\Event;
use App\User;
use App\Prizelist;
use App\Prize;
use App\Http\Requests;
use App\Section;
use App\Topic;
use App\Webmail;
use App\WebmasterSection;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Illuminate\Http\Request;

class PrizeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function prizelist()
    {
			  $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();
		 $prizelist = Prizelist::paginate(env('BACKEND_PAGINATION'));
		return view('backEnd.prizelist.index',compact('prizelist','GeneralWebmasterSections'));
    }
	public function create()
    {
       
        // General END
              $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();

        return view("backEnd.prizelist.create",compact('GeneralWebmasterSections'));
    }
	 public function store(Request $request)
    {
       // return $request;
        $this->validate($request, [
         
            'prize' => 'required',
        
            'points' => 'required',
            
        ]);
	
      
	  $prize_name=$request->prize;

			$data=Prizelist::where('prize_name',$prize_name)->first(); 
			
			if(!$data)
			{
		$prizelist=new Prizelist;
      
	
		$prizelist->prize_name = $request->prize;
		$prizelist->description = $request->description;
		$prizelist->points = $request->points;
		$prizelist->created_by = Auth::user()->first_name;
		$prizelist->save();
        return redirect()->action('PrizeController@prizelist')->with('doneMessage', trans('backLang.addDone'));
			}else{
           return Redirect::route("prizelist")->with('error', trans('Already Subscribed')); 
    }
	}


     public function edit($id)
    {
        //
        // General for all pages
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();
       
            $prizelists = Prizelist::find($id);
        
        if (count($prizelists) > 0) {
            return view("backEnd.prizelist.edit", compact("prizelists","GeneralWebmasterSections"));
        } else {
            return redirect()->action('PrizeController@prizelist');
        }
    }
	 public function winprizeedit($id)
    {
        //
        // General for all pages
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();
       
            $prizelists = Prize::find($id);
			$users=User::select('users.created_at','users.first_name','users.id','users.last_name')->join('prizes','prizes.user_id','=','users.id')->get();
			
			
        
        if (count($prizelists) > 0) {
            return view("backEnd.prizelist.winedit", compact("prizelists","users","GeneralWebmasterSections"));
        } else {
            return redirect()->action('PrizeController@winprize');
        }
    }
	
	
	 public function winupdate(Request $request, $id)
    {   

      
        $prizelist = Prize::find($id);
		$point=$request->point;
		$list=Prize::where('user_id',$prizelist->user_id)->first();
		//return $list;
		if(!$list)
		{
		
		
		$prizelist->user_id=$request->user_name;
		$prizelist->prize = $request->prize;
		
		$prizelist->point = $request->point;
		
		$prizelist->save();
		}else{
			
			$update=Prize::where('user_id',$prizelist->user_id)->update(array('point' => $list->point + $point));	
		}
		
		 return redirect()->action('PrizeController@winprizeedit', $id)->with('doneMessage', trans('backLang.saveDone'));
       

	}
	
	
	 public function update(Request $request, $id)
    {   
      
        $prizelist = Prizelist::find($id);
		if(count($prizelist)>0)
		{
		$prizelist->prize_name = $request->prize;
		$prizelist->description = $request->description;
		$prizelist->points = $request->points;
		$prizelist->created_by = Auth::user()->first_name;
		$prizelist->save();
		 return redirect()->action('PrizeController@edit', $id)->with('doneMessage', trans('backLang.saveDone'));
        } else {
            return redirect()->action('PrizeController@prizelist');
        }

	}
	 public function updateAll(Request $request)
    {
        //
        if ($request->action == "activate") {
            Prizelist::wherein('id', $request->ids)
                ->update(['status' => 1]);

        } elseif ($request->action == "block") {
            Prizelist::wherein('id', $request->ids)->where('id', '!=', 1)
                ->update(['status' => 0]);

        } elseif ($request->action == "delete") {
            // Delete User photo
            $Prizelist = Prizelist::wherein('id', $request->ids)->where('id', '!=', 1)->get();
            foreach ($Prizelist as $User) {
                if ($User->photo != "") {
                    File::delete($this->getUploadPath() . $User->photo);
                }
            }

            Prizelist::wherein('id', $request->ids)->where('id', "!=", 1)
                ->delete();

        }
        return redirect()->action('PrizeController@prizelist')->with('doneMessage', trans('backLang.saveDone'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function prizedestroy($id)
    {
       $prizelist = Prizelist::find($id);
        $prizelist->delete();
       return redirect()->action('PrizeController@prizelist')->with('doneMessage', trans('backLang.deleteDone')); 
    }
	 public function windestroy($id)
    {
		   $prizelist = Prize::find($id);
			$prizelist->delete();
		   return redirect()->action('PrizeController@winprize')->with('doneMessage', trans('backLang.deleteDone')); 
    }
	 public function winprize()
    {
      
		  $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();
		  $winlist=Prize::select('prizes.created_at','prizes.id','prizes.prize','prizes.point','users.first_name','users.last_name')->join('users','users.id','=','prizes.user_id')->paginate(env('BACKEND_PAGINATION'));
		   return view('backEnd.prizelist.winprize',compact('winlist','GeneralWebmasterSections'));
    }
	 
	 

    /**
     * Search resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        //
        // General for all pages
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();
        // General END

        $active_tab = 0;
        if ($request->q != "") {
            if (@Auth::user()->permissionsGroup->view_status) {
                //find Contacts
                $Contacts = Contact::where('created_by', '=', Auth::user()->id)->where('first_name', 'like',
                    '%' . $request->q . '%')
                    ->orwhere('last_name', 'like', '%' . $request->q . '%')
                    ->orwhere('company', 'like', '%' . $request->q . '%')
                    ->orwhere('city', 'like', '%' . $request->q . '%')
                    ->orwhere('notes', 'like', '%' . $request->q . '%')
                    ->orwhere('phone', '=', $request->q)
                    ->orwhere('email', '=', $request->q)
                    ->orderby('id', 'desc')->get();

                //find Webmails
                $Webmails = Webmail::where('created_by', '=', Auth::user()->id)->where('title', 'like',
                    '%' . $request->q . '%')
                    ->orwhere('from_name', 'like', '%' . $request->q . '%')
                    ->orwhere('from_email', 'like', '%' . $request->q . '%')
                    ->orwhere('from_phone', 'like', '%' . $request->q . '%')
                    ->orwhere('to_email', 'like', '%' . $request->q . '%')
                    ->orwhere('to_name', 'like', '%' . $request->q . '%')
                    ->orderby('id', 'desc')->get();

                //find Events
                $Events = Event::where('created_by', '=', Auth::user()->id)->where('title', 'like',
                    '%' . $request->q . '%')
                    ->orwhere('details', 'like', '%' . $request->q . '%')
                    ->orderby('start_date', 'desc')->get();

                //find Topics
                $Topics = Topic::where('created_by', '=', Auth::user()->id)->where('title_ar', 'like',
                    '%' . $request->q . '%')
                    ->orwhere('title_en', 'like', '%' . $request->q . '%')
                    ->orwhere('seo_title_ar', 'like', '%' . $request->q . '%')
                    ->orwhere('seo_title_en', 'like', '%' . $request->q . '%')
                    ->orderby('id', 'desc')->get();

                //find Sections
                $Sections = Section::where('created_by', '=', Auth::user()->id)->where('title_ar', 'like',
                    '%' . $request->q . '%')
                    ->orwhere('title_en', 'like', '%' . $request->q . '%')
                    ->orwhere('seo_title_ar', 'like', '%' . $request->q . '%')
                    ->orwhere('seo_title_en', 'like', '%' . $request->q . '%')
                    ->orderby('id', 'desc')->get();
            } else {
                //find Contacts
                $Contacts = Contact::where('first_name', 'like', '%' . $request->q . '%')
                    ->orwhere('last_name', 'like', '%' . $request->q . '%')
                    ->orwhere('company', 'like', '%' . $request->q . '%')
                    ->orwhere('city', 'like', '%' . $request->q . '%')
                    ->orwhere('notes', 'like', '%' . $request->q . '%')
                    ->orwhere('phone', '=', $request->q)
                    ->orwhere('email', '=', $request->q)
                    ->orderby('id', 'desc')->get();

                //find Webmails
                $Webmails = Webmail::where('title', 'like', '%' . $request->q . '%')
                    ->orwhere('from_name', 'like', '%' . $request->q . '%')
                    ->orwhere('from_email', 'like', '%' . $request->q . '%')
                    ->orwhere('from_phone', 'like', '%' . $request->q . '%')
                    ->orwhere('to_email', 'like', '%' . $request->q . '%')
                    ->orwhere('to_name', 'like', '%' . $request->q . '%')
                    ->orderby('id', 'desc')->get();

                //find Events
                $Events = Event::where('title', 'like', '%' . $request->q . '%')
                    ->orwhere('details', 'like', '%' . $request->q . '%')
                    ->orderby('start_date', 'desc')->get();

                //find Topics
                $Topics = Topic::where('title_ar', 'like', '%' . $request->q . '%')
                    ->orwhere('title_en', 'like', '%' . $request->q . '%')
                    ->orwhere('seo_title_ar', 'like', '%' . $request->q . '%')
                    ->orwhere('seo_title_en', 'like', '%' . $request->q . '%')
                    ->orderby('id', 'desc')->get();

                //find Sections
                $Sections = Section::where('title_ar', 'like', '%' . $request->q . '%')
                    ->orwhere('title_en', 'like', '%' . $request->q . '%')
                    ->orwhere('seo_title_ar', 'like', '%' . $request->q . '%')
                    ->orwhere('seo_title_en', 'like', '%' . $request->q . '%')
                    ->orderby('id', 'desc')->get();

            }
            if (count($Webmails) > 0) {
                $active_tab = 5;
            }
            if (count($Events) > 0) {
                $active_tab = 4;
            }
            if (count($Contacts) > 0) {
                $active_tab = 3;
            }
            if (count($Sections) > 0) {
                $active_tab = 2;
            }
            if (count($Topics) > 0) {
                $active_tab = 1;
            }

        } else {
            return redirect()->action('HomeController@search');
        }
        $search_word = $request->q;

        return view("backEnd.search",
            compact("GeneralWebmasterSections", "search_word", "Webmails", "Contacts", "Events", "Topics", "Sections",
                "active_tab"));
    }

}
