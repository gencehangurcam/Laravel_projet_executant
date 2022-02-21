<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $avatar = Avatar::all();
        $user = User::paginate(2);
        return view('admin.dashboard', compact("user",'avatar'));
    }
    public function utilisateur()
    {
        $avatar = Avatar::all();
        $user = User::all();
        return view('admin.utilisateur', compact("user",'avatar'));
    }
    public function avatar()
    {
        $avatar = Avatar::limit(5)->get();
        $user = User::all();
        return view('admin.avatar', compact("user",'avatar'));
    }

    public function store(Request $request)
    {
        //STORAGE
        $path = "img/";
        $avatar = $request->file("img");
        $new_image_name = date("Ymd").uniqid().".jpg";
        $avatar->move(public_path($path), $new_image_name);

        //DB
        $avatar = new Avatar();
        $avatar->url = $new_image_name;
        $avatar->type = $request->type;

        $avatar->save();

        return redirect()->route("avatar");
    }
    public function destroy(Avatar $avatar)
    {
        //STORAGE
        $destination = "/img/auto" . $avatar->url;
        Storage::disk('public')->delete($destination);
        //DB
        $avatar->delete();
        return redirect()->back();
    }


    public function profileUpdate(Request $request){

        //validation rules
        $this->authorize('isAdmin');
        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'surename'=>'required|string|max:255'
        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->surename = $request['surename'];
        $user->year = $request['year'];
        $user->avatar_id = $request['avatar_id'];
        if (Auth::user()->role_id == 1) {
            $user->role_id = $request->role_id;
        }
        $user->save();
        return back()->with('message','Profile modifié');
    }
}
