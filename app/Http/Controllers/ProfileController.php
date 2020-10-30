<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use App\User;
// use Illuminate\Http\Input;
use Illuminate\Http\Request;
// use Request;
// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\RedirectResponse;
use App\Traits\UploadTrait;

use Illuminate\Support\Str;

class ProfileController extends Controller
{

    use UploadTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this_user = Auth::user();
        return view('profile',compact('this_user'));
    }

    public function updateProfile(Request $request)
    {
        // Form validation
        $request->validate([
            // 'last_name'              =>  'required',
            'select_img' =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // Set user name
        // $user->name = $request->input('name');
        // $user->last_name = $request->input('last_name');
        // Get version: current or veteran
        $version = $request->input('version');

        // Check if a profile image has been uploaded
        if ($request->has('select_img')) {
            // Get image file
            $image = $request->file('select_img');
            // Make a image name based on user name and current timestamp
            // $name = Str::slug($request->input('last_name')).'_'.time();
            $name = auth()->user()->last_name.'_'.auth()->user()->id.'_'.$version;
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            if ($version == 'current') {
              $user->current_img = $filePath;
            } else {
              $user->veteran_img = $filePath;
            };
        }
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return redirect('home')->with(['status' => 'Photo updated successfully.']);
    }
}
