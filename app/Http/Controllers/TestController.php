<?php

namespace App\Http\Controllers;

use App;
use App\Banner;
use App\Comment;
use App\Contact;
use App\Http\Requests;
use App\Menu;
use App\Section;
use App\Setting;
use App\Topic;
use App\TopicCategory;
use App\User;
use App\Webmail;
use App\WebmasterSection;
use App\WebmasterSetting;
use Illuminate\Http\Request;
use Mail;


class TestController extends Controller
{
	 public function aboutus(Request $request)
    {
       echo 'Hello';
       exit;
    }
}