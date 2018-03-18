<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    protected $user;
    
    public function __construct(UserModel $user){
        $this->user = $user;
    }
    
    public function register(Request $request){
        $user = new UserModel;
        $user =[
            'name' => $request->uname,
            'email' => $request->email,
            'password' => md5($request->password)
        ];
        // use either save() using $user as instance of model
        $user = new UserModel($user);
        $user->save(); // refer to this (blalala)
        
        
        // or use create(para) + $user as array as parameter 
        // $user = $this->user->create($user);
        // thing is to create new row, the model need '$attribute'
        // but when we use save(x), x is not converted into model's '$attribute', thus failing to make a correct query
        // however, in line (blalala), the model's '$attribute' is defined already as we create new instance of model using '$user' as parameter
        // save() does give an option to insert an array parameter, but i dont think it's working properly yet. (or is it just me...)
        
        if($user){
            return "Successfully Created";
            sleep(1.3);
            header('/all');
        }
        
        return "Failed";
    }
    
    public function all(){
        $users = $this->user->all();
            //WILL BE PASSING VARIABLE 'USERS' WITH THE VALUE OF $USERS
            return view("all")->with('users', $users);
    }
    
    public function find($id){
        $me = $this->user->where('user_id', '=', $id)->get();
        return view("detail")->with('mes', $me);
        // same as $user = $this->user->find($id);
    }
    
}
