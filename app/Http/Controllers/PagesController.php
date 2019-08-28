<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MakeWebPage;

class PagesController extends Controller
{
    public function index (){
        $title = 'Dean Wants A Website';
        // return view('pages.index',compact('title'));
        return view ('pages.index') -> with ('title', $title); /*<-- */
        
        /* Both the return statements above perform the same output just different syntax.
        
        --> The line of code being used is setting our function 'index()' with a key value 
        pair where 'title' == $title == ('Dean Wants A  Website').*/
    }
    
    public function about (){
        $title = 'About Us';
        return view('pages.about') -> with ('title', $title);
    }

    
    // /************************ This is my function to get to my preview page ****************************/
    // /************************ through my page controller ****************************/
    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function preview (){
        
        //     $webpage = MakeWebPage::all();
        //     // Check for correct user
        
        //     if(auth()->user()->id !== $page->user->id){
            //         return redirect('/webpages')->with('error', 'Not Authorised User');
            //     } else {
                //         return view('pages.preview{}')->with('webpage', $webpage);
                    //         }
                    //     }
                    
                    // /************************ This is my function to get to my preview page ****************************/
                    // /************************ through my page controller ****************************/
                    
                    public function services (){
                        $data = [ 
                            'title' => 'Services',
                            'services' => ['Web Design', 'Programming', 'SEO']  
                        ];
                        
                        return view('pages.services') -> with ($data);
                        
                    }
                    
                }
                
                