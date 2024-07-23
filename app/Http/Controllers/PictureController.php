<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PictureController extends Controller
{
    public function index(){
        return view('home');
    }

    public function add_photo(){
        return view('addphotos');
    }


    public function upload_photo(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'file' => 'required|mimes:png,jpg'
        ]);

        if($validator->fails()){
            return redirect()->route('pic.add')->withErrors($validator)->withInput();
        }

        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);

            $photo = new Photo();
            $photo->title = $request->title;
            $photo->filename = $fileName;
            $photo->save();
            return redirect()->route('pic.add')->with('success', 'photo uploaded successfully');
        }
        return redirect()->back()->with('error', 'photo upload failed');
    }


    public function view_all(){
        $photos = Photo::all();
        return view('view_photo', compact('photos'));
    }

    public function single_pic($id){
        $photo = Photo::findOrFail($id);
        return view('show', compact('photo'));
    }



    public function destroy($id){
        $photo = Photo::findOrFail($id);
        $filePath = public_path('uploads/' . $photo->filename);

        if(file_exists($filePath)){
            unlink($filePath);
        }
        $photo->delete();

        return redirect()->route('pics.view')->with('success', 'photo deleted successfully');
    }
}

