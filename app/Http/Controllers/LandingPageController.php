<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller{
    
    public $faq=[
        [
            'Question'=>'How do I use the app for the first time?',
            'Answer'=>'Welcome to the Elixr Lifestyle, we  give you access to a thriving community and quality connections ',
        ],
        [
            'Question'=>'How do I set up my profile',
            'Answer'=> 'Elixr was designed for comfort, our user guide walks you through the process of creating a fantastic profile',
        ],
        [
            'Question'=>'What safety measures can I take going on a date ',
            'Answer'=>'Meeting strangers for the first time may be challenging at first, but having these safety tips might make it easy  for you to feel more comfortable.  Meet at a public location and ensure you tell someone you’re going on a date, finally, refrain from giving full personal details ',
        ],
        [
            'Question'=>'Are my personal details safe on your app? ',
            'Answer'=>'You can be rest assured that your personal details are safe with us. 
            We run on a strict policy that ensures everyone is verified before coming on our platform, you can read our privacy policy to learn more.',
        ],
        [
            'Question'=>'What does a Premium package contain?',
            'Answer'=>'A diamond experience on Elixr gives you access to In-built video call system, ability to switch to another location, and the chance to see who has seen your profile. ',
        ],
        [
            'Question'=>'Where can I go for a first date?',
            'Answer'=>'If you\'re worried about starting a conversation with a new person,choose an activity you both enjoy. Ask your date what they would like to do, that way it will be a lot less intimidating, this familiar environment will enable you be yourself.'
        ]

      
    ];

    public function index(){
         // return view('welcome');
    
        $res= [
            'data'=>$this->faq,
            'active'=>'/'       

        ];
        return view('home',$res);
    }

    public function blog(){
        $res= [
            'data'=>$this->faq,
            'active'=>'blog'       
    
        ];
        return view('blog',$res);
    }
}
