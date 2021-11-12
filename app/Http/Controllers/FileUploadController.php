<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\UploadsProgram;
class FileUploadController extends Controller
{
    public function fileStore(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpeg,png,jpg,pdf,doc,docx|max:2048',
            
            
        ]);
        $upload_path = public_path('upload').'/docs';
        $file_name = time() . '_' .$request->file->getClientOriginalName();
        $request->file->move($upload_path, $file_name);
         
        $insert['url_name'] = $file_name;
        $insert['user_id'] = Auth()->user()->id;
        $insert['program_id'] = $request->program_id;
        $check = UploadsProgram::insertGetId($insert);
        return response()->json(['success' => 'You have successfully uploaded "' . $file_name . '"']);
    }
}
