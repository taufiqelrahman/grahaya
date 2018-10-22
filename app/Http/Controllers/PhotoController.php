<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Photo;
use Session;
use Input;
use File;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::check())
        {
            $photos = Photo::get();
            return view('photos.index')
                ->withphotos($photos);
        }
        else
        {
            // Session::flash('flash_message', 'harus login dulu ya');
            return redirect()->back();
        }

    }

    public function gallery()
    {
        $count = 0;
        // $photos = Photo::orderByRaw("RAND()");
        $photos = Photo::orderBy('updated_at', 'DSC')->paginate(9);
        return view('pages.gallery')
            ->withphotos($photos)
            ->with('count',$count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Auth::check())
        {
            return view('photos.create');
        }
        else
        {
            // Session::flash('flash_message', 'harus login dulu ya');
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'desc' => 'required'
            // 'image' => 'required'
        ]);
        // dd($request->all());

        $input = Input::all();
        $title = $input['name'];

        $file = array('image' => Input::file('image'));
        if (Input::hasFile('image')) {
            $destinationPath = 'images/photos'; // upload path
            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
            //$random = rand(11111,99999);
            $date = date('ymdhi');
            $fileName = $date.$title.'.'.$extension; // renameing image
            $file = Input::file('image');
            $file = $file->move($destinationPath, $fileName); // uploading file to given path
            // sending back with message
            // Session::flash('success', 'Upload successfully'); 
            // return Redirect::to('upload');
            //array_push($input, ['path' => 'wek']);
            // $input['path'] = $file->getRealPath();
            // $input['path'] = '/public/'.$destinationPath.'/'.$fileName;
            $input['path'] = '/'.$destinationPath.'/'.$fileName;
            // $id = 1;
            photo::create($input);
            // $photoer = new photo($input);
            // $photoer->save();
            
            // $asd = photo::find($id);
            // $asd -> path = $destinationPath.$fileName;
            // $asd-> save();
            Session::flash('flash_message', 'photo successfully added!');
        }   
        else {
          // sending back with error message.
          Session::flash('flash_message', 'uploaded image is not valid');
          //return Redirect::to('upload');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $photo = photo::findOrFail($id);

        return view('photos.show')->withphoto($photo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if (Auth::check())
        {
            $photo = photo::findOrFail($id);
            return view('photos.edit')->withphoto($photo);
        }
        else
        {
            return redirect()->back();
        }
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
        //
        $photo = photo::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'desc' => 'required'
        ]);

        $input = $request->all();
        $title = $input['name'];
        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $temp['path'] = str_replace('/', '\\', $photo['path']);
            File::delete(public_path($temp['path']));

            $destinationPath = 'images'; // upload path
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $date = date('ymdhi');
            $fileName = $date.$title.'.'.$extension; // renameing image
            $file = $file->move($destinationPath, $fileName); // uploading file to given path
            $input['path'] = '/'.$destinationPath.'/'.$fileName;
        }
        $photo->fill($input)->save();

        Session::flash('flash_message', 'photo successfully edited!');

        return redirect()->route('photos.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (Auth::check())
        {
            $photo = photo::findOrFail($id);
            $photo->delete();

            Session::flash('flash_message', 'photo successfully deleted!');

            // return redirect()->route('photos.index',['type' => $type]);
            // return redirect()->back()->back();
            return redirect('/');
        }
        else
        {
            return redirect()->back();
        }
    }
}
