<?php

namespace App\Http\Controllers;

class HomeController extends Controller
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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }


function authRedirect() {

        // Define the GMB scope
        $scopes = [
            'https://www.googleapis.com/auth/plus.business.manage'
        ];

        // Define any configs that overrride the /config/google.php defaults from pulkitjalan/google-apiclient
        $googleConfig = array_merge(config('google'),[
            'scopes' => $scopes,
            'redirect_uri' => config('app.callback_url').'/callback/google/mybusiness'
        ]);

        // Generate an auth request URL
        $googleClient = new Google($googleConfig);
        $loginUrl = $googleClient->createAuthUrl();
        
        // Send user to Google for Authorisation
        return redirect()->away($loginUrl);
    }
    
    function getAccountName(Google $googleClient) {
        $gmb = new GoogleMyBusiness($googleClient);
        return $gmb->getAccountName();
    }

}

