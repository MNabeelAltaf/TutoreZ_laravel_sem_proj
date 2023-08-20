<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function Home()
    {
        return view('Home.home');
    }
   
    public function About()
    {
        return view ('Home.aboutus');
    }

    public function Contact()
    {
        return view ("Home.contactus");
    }

    public function CSC()
    {
        return view ("Home.courses_subjects_communities");

    }

    public function communities()
    {
        return view ("Home.communities");

    }

    public function subjects()
    {
        return view ('Home.subjects');
    }

    public function courses()
    {
        return view ('Home.courses');

    }

    public function tutor()
    {
        return view('Home.tutor');
    }

    public function requests()
    {
        return view('Home.teachingRequestForm');

    }

    public function profile1()
    {
        return view ('Home.profile1');
    }
  
    public function profile2()
    {
        return view ('Home.profile2');

    }

    public function discussion()
    {
        return view('Home.discussionForam');
    }

    public function login()
    {
        return view('Home.login');
    }

    public function register()
    {
        return view('Home.register');
    }
    
}
