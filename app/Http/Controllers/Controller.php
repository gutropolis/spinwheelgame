<?php

namespace App\Http\Controllers;
use App\Helpers;
use App\Helpers\Helper;
use App\Helpers\uuid;
use Illuminate\Support\MessageBag;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Setting;
use App\WebmasterSection;
use App\WebmasterSetting;
use App\Section;
use App\Topic;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	
	 public function __construct()
    {
		$this->messageBag = new MessageBag;
        // Check the website Status
        $WebsiteSettings = Setting::find(1);
        $lang = trans('backLang.boxCode');

        $site_status = $WebsiteSettings->site_status;
        $site_msg = $WebsiteSettings->close_msg;
        if ($site_status == 0) {
            // close the website
            if ($lang == "ar") {
                $site_title = $WebsiteSettings->site_title_ar;
                $site_desc = $WebsiteSettings->site_desc_ar;
                $site_keywords = $WebsiteSettings->site_keywords_ar;
            } else {
                $site_title = $WebsiteSettings->site_title_en;
                $site_desc = $WebsiteSettings->site_desc_en;
                $site_keywords = $WebsiteSettings->site_keywords_en;
            }
            echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<title>$site_title</title>
<meta name=\"description\" content=\"$site_desc\"/>
<meta name=\"keywords\" content=\"$site_keywords\"/>
<body>
<br>
<div style='text-align: center;'>
<p>$site_msg</p>
</div>
</body>
</html>
        ";
            exit();
        }
    }
	public function SEO($seo_url_slug = 0)
    {
        return $this->SEOByLang("", $seo_url_slug);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int /string $seo_url_slug
     * @return \Illuminate\Http\Response
     */
    public function SEOByLang($lang = "", $seo_url_slug = 0)
    {
        if ($lang != "") {
            // Set Language
            App::setLocale($lang);
            \Session::put('locale', $lang);
        }
        $seo_url_slug = str_slug($seo_url_slug, '-');

        switch ($seo_url_slug) {
            case "home" :
                return $this->HomePage();
                break;
				case "howitwork" :
				return $this->howitwork();
				break;
			case "contactsus" :
				return $this->contactsus();
				break;
				case "aboutus" :
				return $this->aboutus();
				break;
				case "signup" :
                return $this->signup();
                break;
			case "loginpage" :
				return $this->loginpage();
				break;
				case "resetpassword" :
				return $this->resetpassword();
				break;
				case "forgotpassword" :
				return $this->forgotpassword();
				break;
            case "about" :
                $id = 1;
                $section = 1;
                return $this->topic($section, $id);
                break;
				 case "spinerwheel" :
                $id = 1;
                $section = 1;
                return $this->spinerwheel($section, $id);
                break;
            case "addspinner" :
                $id = 3;
                $section = 1;
                return $this->addspinner($section, $id);
                break;
				case "faq" :
                $id = 3;
                $section = 1;
                return $this->faq($section, $id);
                break;
            case "privacy" :
                $id = 3;
                $section = 1;
                return $this->topic($section, $id);
                break;
            case "terms" :
                $id = 4;
                $section = 1;
                return $this->topic($section, $id);
                break;
        }
        // General Webmaster Settings
        $WebmasterSettings = WebmasterSetting::find(1);
        $URL_Title = "seo_url_slug_" . trans('backLang.boxCode');

        $WebmasterSection1 = WebmasterSection::where("seo_url_slug_ar", $seo_url_slug)->orwhere("seo_url_slug_en", $seo_url_slug)->first();
        if (count($WebmasterSection1) > 0) {
            // MAIN SITE SECTION
            $section = $WebmasterSection1->id;
            return $this->topics($section, 0);
        } else {
            $WebmasterSection2 = WebmasterSection::where('name', $seo_url_slug)->first();
            if (count($WebmasterSection2) > 0) {
                // MAIN SITE SECTION
                $section = $WebmasterSection2->id;
                return $this->topics($section, 0);
            } else {
                $Section = Section::where('status', 1)->where("seo_url_slug_ar", $seo_url_slug)->orwhere("seo_url_slug_en", $seo_url_slug)->first();
                if (count($Section) > 0) {
                    // SITE Category
                    $section = $Section->webmaster_id;
                    $cat = $Section->id;
                    return $this->topics($section, $cat);
                } else {
                    $Topic = Topic::where('status', 1)->where("seo_url_slug_ar", $seo_url_slug)->orwhere("seo_url_slug_en", $seo_url_slug)->first();
                    if (count($Topic) > 0) {
                        // SITE Topic
                        $section_id = $Topic->webmaster_id;
                        $WebmasterSection = WebmasterSection::find($section_id);
                        $section = $WebmasterSection->name;
                        $id = $Topic->id;
                        return $this->topic($section, $id);
                    } else {
                        // Not found
                        return redirect()->route("HomePage");
                    }
                }
            }
        }

    }
	public function generateUuid(){
  return \App\Helpers\UUID::uuid4();
}
  protected $messageBag = null;

    /**
     * Initializer.
     *
     */

}
