<?php

namespace App\Http\Controllers;
use App\models\Tag;
use App\models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addTag(Request $request){
        //validate request
        $this->validate($request,[
            'tagName' => 'required'

        ]);
        return Tag::create([
            'tagName' => $request->tagName
        ]);
    }

    public function editTag(Request $request){
        //validate request
        $this->validate($request,[
            'tagName' => 'required',
            'id' => 'required',

        ]);
        return Tag::where('id',$request->id)->update([
            'tagName'=> $request->tagName
        ]);
    }
    public function deleteTag(Request $request){
        //validate request
        $this->validate($request,[
            'id' => 'required',

        ]);
        return Tag::where('id',$request->id)->delete([
            'tagName'=> $request->tagName
        ]);
    }
    
    public function getTag(){
        return Tag::orderBy('id','desc') -> get();
    }
    public function upload(Request $request){
        $this->validate($request,[
            'file' => 'required|mimes:jpeg,jpg,png'
      
        ]);
        $picName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('uploads'), $picName);
        return $picName;

    }
    public function createUser(Request $request)
    {
        // validate request
        $this->validate($request, [
            'fullName' => 'required',
            'email' => 'bail|required|email|unique:users',
            'password' => 'bail|required|min:6',
            'userType' => 'required',
        ]);
        $password = bcrypt($request->password);
        $user = User::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'password' => $password,
            'userType' => $request->userType,
        ]);
        return $user;
    }


    
    public function getUsers(){
        return User::where('userType', '!=', 'User')->get();
    }











  /*   public function adminLogin(Request $request){
        //validate request
        $this->validate($request,[
            'email' => 'required',
            'password' => 'bail|required|min:6',
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return response()->json([
                'msg' => 'You are logged in',
                
            ]);

        }else{
            return response()->json([
                'msg' => 'Incorrect login details',
            ]);
            
        }

    } */


}
