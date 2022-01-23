<?php

namespace App\Http\Controllers;

use App\images;
use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $img = images::all();
        return view('img.img_show', compact('img'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('img.Add_img');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_extension = $request->photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'images/games';
        $request->photo->move($path, $file_name);
        images::create([
            'title' => $request->title,
            'photo' => $file_name,


        ]);
        $user = User::get();
        $images = images::latest()->first();
        Notification::send($user, new \App\Notifications\TaskComplete2($images));

        session()->flash('Add', 'تم الاضافه  بنجاح ');
        return redirect('/img');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\images  $images
     * @return \Illuminate\Http\Response
     */
    public function show(images $images)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\images  $images
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $img = images::where('id', $id)->first();


        return view('img.edit_img', compact('img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\images  $images
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $img = images::find($id);
        $img->title = $request->input('title');

        if ($request->hasfile('photo')) {
            $imgup = 'images/games/' . $img->photo;
            if (File::exists($imgup)) {
                File::delete($imgup);
            }

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extension;

            $file->move('images/games/', $file_name);
            $img->photo =  $file_name;
        }

        $img->update();



        session()->flash('edit', 'تم تعديل القسم بنجاج');
        return redirect('/img');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\images  $images
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,  $id)
    {
        $id = $request->id;
        images::find($id)->delete();
        session()->flash('delete', 'تم حذف القسم بنجاح');
        return redirect('/img');
    }
}
