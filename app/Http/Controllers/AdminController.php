<?php

namespace App\Http\Controllers;
use Sentinel;
use Session;
use App\User;
use App\UserDetail;
use App\Http\Requests\UserValidation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('sentinel.role');
        $this->middleware('sentinel');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::with('userdetail')
            ->join('user_details', 'users.id', '=', 'user_details.user_id')
            ->get();

        return view('admin.index')->with('data', $data);
    }

    public function get_list(){
        $data = User::with('userdetail')
            ->join('user_details', 'users.id', '=', 'user_details.user_id')
            ->get();

        return view('admin.list')->with('data', $data);
    }

    public function get_list_cv(){
        $data = User::with('userdetail')
            ->join('user_details', 'users.id', '=', 'user_details.user_id')
            ->get();

        return view('admin.cv')->with('data', $data);
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
    public function edit($id)
    {
        //
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
        $status = $request->input('status');
        
        $data = array(
            'status_cv' => $status,
        );

        UserDetail::find($id)->update($data);

        return redirect()->back();
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
    }
}
