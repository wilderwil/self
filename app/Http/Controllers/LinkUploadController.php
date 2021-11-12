<?php

namespace App\Http\Controllers;

use App\Models\LinkProgram;
use Illuminate\Http\Request;

class LinkUploadController extends Controller
{
    public function linkStore(Request $request)
    {
        $request->validate([
            'url_name' => 'required',
            'title'=>'required',
            'description'=>'required',
            'user_id'=>'required',
            'program_id'=>'required',           
            
        ]);
        $url_name =$request->url_name;
        $insert['url_name'] = $url_name;
        $insert['user_id'] = Auth()->user()->id;
        $insert['program_id'] = $request->program_id;
        $insert['description'] = $request->description;
        $insert['title'] = $request->title;
        $check = LinkProgram::insertGetId($insert);
     //   if($check){
     //       return redirect()->back()->with('success','Link Uploaded Successfully');}
        return response()->json(['success' => 'You have successfully uploaded "' . $url_name . '"']);
    }
    public function fechVideos(Request $request){
        
        return LinkProgram::where('program_id','=',$request->id)->get();
    }
}
