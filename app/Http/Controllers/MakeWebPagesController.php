<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MakeWebPage;

class MakeWebPagesController extends Controller
{
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
            'background' => 'required',
            'colour1' => 'required',
            'colour2' => 'required',
            'colour3' => 'required',

        ]);

       $webpage = new MakeWebPage;

       
       $webpage->siteName = $request->input('siteName');
       $webpage->hero = $request->input('hero');
       $webpage->fontType = $request->input('fontType');
       $webpage->background = $request->input('background');

       $webpage->colour1 = $request->input('colour1');
       $webpage->colour2 = $request->input('colour2');
       $webpage->colour3 = $request->input('colour3');
       $webpage->user_id = auth()->user()->id;



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
    
        return view('pages.edit')->with('page', $page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'siteName' => 'required',
            'hero' => 'required',
            'fontType' => 'required',
            'background' => 'required',
            'colour1' => 'required',
            'colour2' => 'required',
            'colour3' => 'required',

        ]);

    /* Update my post by calling a the website specific '$id' and essentially re
    running my store() function as above. */
    
    $webpage = MakeWebPage::findorFail($id);
    
    $webpage->siteName = $request->input('siteName');
        $webpage->hero = $request->input('hero');
        $webpage->fontType = $request->input('fontType');
        $webpage->background = $request->input('background');
        
        $webpage->colour1 = $request->input('colour1');
        $webpage->colour2 = $request->input('colour2');
        $webpage->colour3 = $request->input('colour3');
        
        
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
        
        MakeWebPage::findorFail($id)->delete();
        return redirect('/webpages')->with('success', 'Website Deleted');

    }
}
