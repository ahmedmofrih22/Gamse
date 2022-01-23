<?php

namespace App\Http\Controllers;

use App\Coach;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coach = coach::all();
        return view('coaches.coaches_show', compact('coach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coaches.Add_coaches');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $file_extension = $request->photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'images/coaches';
        $request->photo->move($path, $file_name);
        Coach::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'Bank_account_number' => $request->Bank_account_number,
            'Date_of_Birth' => $request->Date_of_Birth,
            'City' => $request->City,
            'description' => $request->description,
            'photo' => $file_name,


        ]);
        $user = User::get();
        $Coach = Coach::latest()->first();
        Notification::send($user, new \App\Notifications\TaskComplete($Coach));

        session()->flash('Add', 'تم الاضافه  بنجاح ');
        return redirect('/coaches');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function show(Coach $coach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $coch = Coach::where('id', $id)->first();
        return view('coaches.edit_coaches', compact('coch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coachs = Coach::find($id);
        $coachs->name = $request->input('name');
        $coachs->phone = $request->input('phone');
        $coachs->email = $request->input('email');
        $coachs->Bank_account_number = $request->input('Bank_account_number');
        $coachs->Date_of_Birth = $request->input('Date_of_Birth');
        $coachs->City = $request->input('City');
        $coachs->description = $request->input('description');

        if ($request->hasfile('photo')) {
            $imgup = 'images/coaches/' . $coachs->photo;
            if (File::exists($imgup)) {
                File::delete($imgup);
            }

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extension;

            $file->move('images/coaches/', $file_name);
            $coachs->photo =  $file_name;
        }

        $coachs->update();



        session()->flash('edit', 'تم تعديل القسم بنجاج');
        return redirect('/coaches');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $id = $request->id;
        Coach::find($id)->delete();
        session()->flash('delete', 'تم حذف القسم بنجاح');
        return redirect('/coaches');
    }
}
