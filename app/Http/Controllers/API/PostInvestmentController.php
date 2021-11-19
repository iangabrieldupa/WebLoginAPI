<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\Investment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Flash;
use Response;

class PostInvestmentController extends Controller{
    public $successStatus = 200;

    public function getAllPosts(Request $request) {

        $token = $request['t']; //t = token
        $userid = $request['u']; //u - userid

        $user = User::where('id', $userid) -> where('remember_token', $token)->first();

        
        if($user != null){
            $post = Posts::all();

            return response()->json($post, $this->successStatus);
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
       
    }

    public function getPost(Request $request) {
        $id = $request['pid']; // pid = post id
        $token = $request['t']; //t = token
        $userid = $request['u']; //u - userid

        $user = User::where('id', $userid) -> where('remember_token', $token)->first();

        if($user != null){
            
            $post = Posts::where('id', $id)->first();

            if($post != null) {

                return response()->json($post, $this->successStatus);
            } else {

                return response()->json(['response' => 'Post not found'], 404);
            }
        }else {
            
            return response()->json(['response' => 'Bad Call'], 501);
        }

    }

    public function searchPost(Request $request) {
        $params = $request['p']; // p = parameters
        $token = $request['t']; //t = token
        $userid = $request['u']; //u - userid

        $user = User::where('id', $userid) -> where('remember_token', $token)->first();

        if($user != null){
            
            $post = Posts::where('description','LIKE', '%'. $params. '%')
            ->orWhere('title', 'LIKE', '%'. $params. '%')
            ->get();

            if($post != null) {

                return response()->json($post, $this->successStatus);
            } else {
                
                return response()->json(['response' => 'Post not found'], 404);
            }
        }else {
            
            return response()->json(['response' => 'Bad Call'], 501);
        }

    }

}


?>