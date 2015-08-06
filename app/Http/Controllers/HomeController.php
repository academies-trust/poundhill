<?php 

namespace App\Http\Controllers;

use App\Update;
use Carbon\Carbon;
use Twitter;
use Illuminate\http\Request;
use Mail;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$twitter = $this->getTweets();
		$slides = $this->getSlides();
		$events = new Update();
		$events = $events->events();
		$news = new Update();
		$now = new Carbon();
		return view('home', compact('slides', 'events', 'twitter', 'news', 'now'));
	}

	public function simple()
	{
		return view('simple');
	}

	public function soon()
	{
		return 'Coming Soon';
	}

	public function contact()
	{
		return view('contact');
	}

	public function preschool()
	{
		return view('preschool');
	}

	public function sportspremium()
	{
		return view('sportspremium');
	}

	public function about()
	{
		return view('about.about');
	}

	public function safeguarding()
	{
		return view('about.safeguarding');
	}

	public function galleries()
	{
		return view('about.galleries');
	}

	public function newsletters()
	{
		return view('about.newsletters');
	}

	public function staff()
	{
		return view('about.staff');
	}

	public function aims()
	{
		return view('about.aims');
	}

	public function vision()
	{
		return view('about.vision');
	}

	public function ourday()
	{
		return view('about.ourday');
	}

	public function ourcommunity()
	{
		return view('community.ourcommunity');
	}

	public function partnership()
	{
		return view('community.partnership');
	}

	public function enhancing()
	{
		return view('community.enhancing');
	}

	public function coco()
	{
		return view('community.coco');
	}

	public function ptfa()
	{	
		$twitter = $this->getTweets();
		return view('community.ptfa',compact('twitter'));
	}

	public function partners()
	{
		return view('partners.partners');
	}

	public function parents()
	{
		return view('partners.parents');
	}

	public function friends()
	{
		return view('partners.friends');
	}

	public function schoolmeeting()
	{
		return view('partners.schoolmeeting');
	}

	public function everychild()
	{
		return view('learning.everychild');
	}

	public function curriculumoverview()
	{
		return view('learning.curriculumoverview');
	}

	public function sport()
	{
		return view('learning.sport');
	}

	public function library()
	{
		return view('learning.library');
	}

	public function assessmentnolevels()
	{
		return view('learning.assessmentnolevels');
	}

	public function growyourbrain()
	{
		return view('learning.growyourbrain');
	}

	public function catering()
	{
		return view('academylife.catering');
	}

	public function tuckshop()
	{
		return view('academylife.tuckshop');
	}

	public function music()
	{
		return view('academylife.music');
	}

	public function governors()
	{
		return view('community.governors');
	}

	public function attendance()
	{
		return view('parents.attendance');
	}

	public function esafety()
	{
		return view('parents.esafety');
	}

	public function support()
	{
		return view('parents.support');
	}

	public function letters()
	{
		return view('parents.letters');
	}

	public function uniform()
	{
		return view('parents.uniform');
	}

	public function foodanddrink()
	{
		return view('parents.foodanddrink');
	}
	public function termdates()
	{
		return view('parents.termdates');
	}

	public function events()
	{
		return view('news.events');
	}

	public function admissions()
	{
		return view('further.admissions');
	}

	public function policies()
	{
		return view('further.policies');
	}


	public function getSlides()
	{
		$path = '../storage/app/images/heroes';
		$dir = scandir($path);
		$acceptedExtensions = [
			'jpg',
			'png',
			'jpeg',
			'gif'
		];
		$slides = [];
		foreach($dir as $file) {
			$path_info = pathinfo($path.'/'.$file);
			if(in_array(strtolower($path_info['extension']), $acceptedExtensions)) {
				array_push($slides, $file);
			}
		}
		return $slides;
	}

	public function getTweets()
	{
		$twitter = json_decode(Twitter::getUserTimeline(['screen_name' => 'Pound_Hill', 'count' => 4, 'format' => 'json']));
		foreach($twitter as $tweet) {
			$tweet->ago = new Carbon($tweet->created_at);
		}
		return $twitter;
	}

	public function contactSend(Request $request)
	{
		Mail::send('emails.contact', ['input' => $request->input()], function($message) use ($request)
		{
			$message->from($request->email, $request->name);
		    $message->to('office@phiacademy.org.uk', 'Office')->subject('Contact Form Message');
		});

		return redirect('contact');
	}

}
