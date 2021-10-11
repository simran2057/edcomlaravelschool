<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Result;
use App\Models\News;
use App\Models\SiteConfig;
use App\Models\Slider;
use App\Models\WhyChooseUs;
use App\Models\Index;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Coursecat;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Message;
use App\Models\Notice;

use App\Models\Teacher;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $categories = Coursecat::all();
        $whychooseus = WhyChooseUs::all();

        $events = Event::all();

        $newses = News::all();
        $sites = SiteConfig::all();

        return view('index',compact('sites','sliders','categories','whychooseus','events','newses'));
    }



    public function about_us()
    {
        $categories = Coursecat::all();
        $sites = SiteConfig::all();
        return view('aboutus',compact('sites','categories'));
    }


    public function messages()
    {
        $categories = Coursecat::all();
        $sites = SiteConfig::all();
        return view('message',compact('sites','categories'));
    }


    public function planning()
    {
 $categories = Coursecat::all();
        $sites = SiteConfig::all();
        return view('planning',compact('sites','categories'));
    }


    public function notice()
    {
         $categories = Coursecat::all();
        // $notices=Notice::where('id',$id)->first();
         $sites = SiteConfig::all();
        $notices = Notice::all();
        return view('notice',compact('sites','notices','categories'));
    }


    public function notice_detail($id)
    {
        $notice_detail= Notice::find($id);
         $categories = Coursecat::all();
        $notices = Notice::all();
        $sites = SiteConfig::all();
        return view('notice_detail',compact('sites','notice_detail','notices','categories'));
    }


    public function results()
    {
        $results = Result::all();
         $sites = SiteConfig::all();
          $categories = Coursecat::all();
        return view('result',compact('sites','results','categories'));

    }


            public function course($id)
            {
        // $id=request()->segment(1);
            //$courses = Course::find($id);
                $categories = Coursecat::all();
            // return $courses;
                $course=Course::where('id',$id)->first();
                $sites = SiteConfig::all();

                return view('course', compact('course', 'categories','sites'));
            }

        public function course_detail($id)
    {
        // $course_detail=Course::where('status',1)->get();
        $course_detail = Course::find($id);

         $categories = Coursecat::all();
         $sites = SiteConfig::all();

        return view('course_detail', compact('course_detail','sites','categories'));
    }


    public function teacher()
    {
        $teachers = Teacher::all();
        $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('teacher',compact('sites','teachers','categories'));
    }

      public function teacher_detail($id)
    {
        $teacher_detail = Teacher::find($id);
        $sites = SiteConfig::all();
        $teachers = Teacher::all();
 $categories = Coursecat::all();
        return view('teacher_detail', compact('teacher_detail','sites','teachers','categories'));
    }


    public function news()
    {
        $newses = News::all();
        $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('news',compact('sites','categories','newses'));
    }


    public function gallery()
    {
        $galleries = Gallery::all();
        $gallerycategories = GalleryCategory::all();
         $categories = Coursecat::all();
        $sites = SiteConfig::all();
        return view('gallery',compact('sites','categories','galleries','gallerycategories'));
    }


    public function event()
    {
        $events = Event::all();
        $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('event',compact('sites','categories','events'));
    }


    public function event_detail($id)
    {
        $event_detail= Event::find($id);
        $sites = SiteConfig::all();
        $categories = Coursecat::all();
        return view('event_detail', compact('event_detail','sites','categories'));
    }

      public function news_detail($id)
    {
        $news_detail = News::find($id);
        $sites = SiteConfig::all();
        $categories = Coursecat::all();
        return view('news_detail', compact('news_detail','sites','categories'));
    }


    public function blog()
    {
        $blogs = Blog::all();
        $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('blog',compact('sites','categories','blogs'));
    }
    public function blog_detail($id)
    {
        $blog_detail = Blog::find($id);
        $sites = SiteConfig::all();
        $blogs = Blog::all();
        $categories = Coursecat::all();
        return view('blog_detail', compact('blog_detail','sites','blogs','categories'));
    }

    public function contacts()
    {
        $sites = SiteConfig::all();
        $categories = Coursecat::all();
        return view('contact',compact('sites','categories'));
    }

    public function admission()
    {
    $sites = SiteConfig::all();
    $categories = Coursecat::all();
        return view('admission',compact('sites','categories'));
    }


    public function whychooseus()
    {
        $whychooseus = WhyChooseUs::where('status', 1)->orderBy('id', 'asc')->limit(1)->get();
        return view('whychooseus', compact('whychooseus'));
    }


}
