<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Friend_Request;
use App\Friend;

class FriendRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests=Friend_Request::where('to_id','=',Auth::user()->id)->get();
        $friend_requests=Friend_Request::where('to_id', '=', Auth::user()->id)->count();
        return view('friend.request')->with(['requests'=>$requests,'friend_requests'=>$friend_requests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)//Отправить заявку
    {
        $friend_request=new Friend_Request();
        $friend_request->from_id=Auth::user()->id;
        $friend_request->to_id=$id;
        $friend_request->save();
        return redirect('/user');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//Принять заявку
    {
        // Френдшип
        $friend=new Friend();
        $request=Friend_Request::find($id);
        $friend->user_id=$request->from_id;
        $friend->friend_id=$request->to_id;
        $friend->save();
        // Обратный френдшип
        $friend=new Friend();
        $friend->user_id=$request->to_id;
        $friend->friend_id=$request->from_id;
        $friend->save();
        Friend_Request::find($id)->delete();
        return redirect('/friend_request');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//Отклонить заявку
    {
        Friend_Request::find($id)->delete();
        return redirect('/friend_request');
    }
}
