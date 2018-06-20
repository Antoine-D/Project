<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    public function search(Request $request){
        $name = $request->input('name_search');
        if(empty($name)){
            return view('search', ['error' => 'Recherche incorrect, aucun nom renseigné']);
        }
        $users = \App\User::where('name','like','%'.$name.'%')->get();
        return view('search', ['users' => $users]);
    }

    public function searchFriends( Request $request ){

        $name = $request->input( 'search_friends' );
        if( empty( $name ) ){
            return view('messenger.createConv', ['error' => "no friends"]);
        }
    }
}
