<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\MakeWebPage;

class MakeWebPagesController extends Controller
{
    
        /** Copied this '__construct()'function in from the Dashboard controller previously the HomeController
         *  which was created by Laravel when I used the 'php artisan make:auth' command in CLI. I set an array 
         * to allow access to the index only which is my 'All Sites' section for guests. I've now commented this
         * out so guests can only use the links from the 'home' screen. SEE BELOW in the function.
         * 
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware('auth', [
                'except'=>['index','show']
                //So this would allow 'guests' to get to our 'webpages' section .
                ]);
            }
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
            
            public function index()
            {
                // echo "<pre>",print_r($websites),"</pre>";
        // $websites = MakeWebPage::all();
        // $websites = MakeWebPage::orderBy('updated_at','desc')->take(1)->get();
        //$websites = MakeWebPage::orderBy('updated_at','desc')->get();
        
        $websites = MakeWebPage::orderBy('updated_at','desc')->paginate(3);
    
        return view('pages.webpages')->with('websites',$websites);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.makepage');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'siteName' => 'required',
            'hero' => 'required',
            'fontType' => 'required',
            // 'background' => 'required', removed in favour of an user upload.
            'colour1' => 'required',
            'colour2' => 'required',
            'colour3' => 'required',
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);

        // Handle File Upload
        if($request->hasFile('background_image')){
        // Get filename with extension
        $fileNameWithExt = $request->file('background_image')->getClientOriginalName();
        // Get just filename
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // Get just extension
        $extension = $request->file('background_image')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore=$fileName.'_'.time().'.'.$extension;
        //Upload Image
        $path = $request->file('background_image')->storeAs('public/background_images',$fileNameToStore);

        } else {
        // If no file uploaded accept 'noimage.jpg' as default into db table in the 'background_image' column 
            $fileNameToStore = 'noimage.jpg';
        }


        


        // Create a new webpage
       $webpage = new MakeWebPage;
       
       $webpage->siteName = $request->input('siteName');
       $webpage->hero = $request->input('hero');
       $webpage->fontType = $request->input('fontType');
    //    $webpage->background = $request->input('background'); removed in favour of an user upload.

       $webpage->colour1 = $request->input('colour1');
       $webpage->colour2 = $request->input('colour2');
       $webpage->colour3 = $request->input('colour3');
       $webpage->user_id = auth()->user()->id;
       $webpage->background_image = $fileNameToStore;
       



       $webpage->save();
       
       
       return redirect('/webpages')->with('success', 'Website Created');       
    
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = MakeWebPage::findorFail($id);

        
                return view('pages.indvwebpage')->with('page', $page);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // 'localhost/webpages/{id}/edit'
    {
        $page = MakeWebPage::findorFail($id);
        // Check for correct user
       
        if(auth()->user()->id !== $page->user->id){
            return redirect('/webpages')->with('error', 'Not Authorised User');
        } else {
            return view('pages.edit')->with('page', $page);
    }
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $this->validate($request,[
            'siteName' => 'required',
            'hero' => 'required',
            'fontType' => 'required',
            // 'background' => 'required', removed in favour of a user uploaded image.
            'colour1' => 'required',
            'colour2' => 'required',
            'colour3' => 'required',
            // 'background_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', not required on update.
        ]);

        // Handle File Update
        if($request->hasFile('background_image')){ 
            // Get filename with extension
            $fileNameWithExt = $request->file('background_image')->getClientOriginalName();
            // Get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('background_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('background_image')->storeAs('public/background_images',$fileNameToStore);
        }
        
        /* Update my post by calling the website specific '$id' and essentially re
        running my store() function as above. */
        
        $webpage = MakeWebPage::findorFail($id);
        $webpage->siteName = $request->input('siteName');
        $webpage->hero = $request->input('hero');
        $webpage->fontType = $request->input('fontType');
        // $webpage->background = $request->input('background'); removed in favour of a user uploaded image.
        $webpage->colour1 = $request->input('colour1');
        $webpage->colour2 = $request->input('colour2');
        $webpage->colour3 = $request->input('colour3');
        /* I'll need to check that if I don't upload a file that the image doesn't get updated with nothing. */
        if($request->hasFile('background_image')){ // = false
            $webpage->background_image = $fileNameToStore;
        
        }

        /************************** Need to create function delete the old version picture if the user updates  ******************************************/
        
        $webpage->save();
        
        return redirect('/webpages')->with('success', 'Website Updated');    
}
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $webpage = MakeWebPage::findorFail($id);
        // dd($webpage->background_image);
        // Check for correct user
        if(auth()->user()->id !== $webpage->user->id){
            return redirect('/webpages')->with('error', 'Not Authorised User');
        }

        if($webpage->background_image!= 'noimage.jpg'){
            // Delete the image from the folder once the website gets deleted.
            Storage::delete('public/background_images/'.$webpage->background_image);

        }

            $webpage->delete();

        return redirect('/webpages')->with('success', 'Website Deleted');

    }
}
