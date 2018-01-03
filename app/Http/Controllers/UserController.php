<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
use App\User;
use App\UserDetail;
use App\Http\Requests\UserValidation;

class UserController extends Controller
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
        $id = Sentinel::getUser()->id;
        
        $data = User::with('userdetail')
            ->join('user_details', 'users.id', '=', 'user_details.user_id')
            ->where('user_details.user_id', $id)
            ->get()->first();

        /*dd($id);*/

        if($data == null){
            return view('users.detail');
        }else{
            return view('users.index')->with('data', $data);    
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Sentinel::getUser()->id;

        $data = User::with('userdetail')
            ->join('user_details', 'users.id', '=', 'user_details.user_id')
            ->where('user_details.user_id', $id)
            ->get()->first();

        $list = User::with('userdetail')
            ->join('user_details', 'users.id', '=', 'user_details.user_id')
            ->get();

        /*dd($list);*/
        return view('users.list')->with(array('data' => $data, 'list' => $list));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserValidation $request)
    {
        $path = 'upload/';

        /*dd($request->all());*/
        
        $foto = $request->file('foto');
        $filename = str_random(6).'_'.$foto->getClientOriginalName();
        $foto->move($path, $filename);

        $bg = $request->file('background');
        $bgname = str_random(6).'_'.$bg->getClientOriginalName();
        $bg->move($path, $bgname);

        $data = new UserDetail;

        $data->foto = $path.$filename;
        $data->background = $path.$bgname;
        $data->user_id = $request->input('user_id');
        $data->alamat = $request->input('alamat');
        $data->kota = $request->input('kota');
        $data->negara = $request->input('negara');
        $data->kodepos = $request->input('kodepos');
        $data->bio = $request->input('bio');
        $data->keahlian = $request->input('keahlian');
        $data->status_cv = "-";
        $data->cv = "-";

        $data->save();

        Session::flash('notice', 'Success add detail users');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        /*$id = Sentinel::getUser()->id;*/
        
        $data = User::with('userdetail')
            ->join('user_details', 'users.id', '=', 'user_details.user_id')
            ->where('user_details.user_id', $id)
            ->get()->first();

        return view('users.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Sentinel::getUser()->id;

        $data = User::with('userdetail')
            ->join('user_details', 'users.id', '=', 'user_details.user_id')
            ->where('user_details.user_id', $id)
            ->get()->first();

        return view('users.edit')->with('data', $data);
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
        $button = $request->input('tipe');
        $path = 'upload/';
        /*dd($button);*/
        if($button == 'update_profile'){
            $foto = $request->file('foto');            
            if($foto == null){

                $datauser = array(
                    'email' => $request->input('email'),
                    'first_name' => $request->input('first_name'),
                    'last_name' => $request->input('last_name'),
                );

                $datadetail = array(
                    'alamat' => $request->input('alamat'),
                    'kota' => $request->input('kota'),
                    'negara' => $request->input('negara'),
                    'kodepos' => $request->input('kodepos'),
                    'keahlian' => $request->input('keahlian'),
                    'bio' => $request->input('bio'),
                );

                UserDetail::where('id', $id)->update($datadetail);
                User::where('id', $request->user_id)->update($datauser);
                
                Session::flash('notice', 'Profile data has successfuly updated');
                return redirect()->route('user.index');
            }else{

                /*dd($id);*/
                
                $foto = $request->file('foto');
                $filename = str_random(6).'_'.$foto->getClientOriginalName();

                $bg = $request->file('background');
                $bgname = str_random(6).'_'.$bg->getClientOriginalName();

                $datauser = array(
                    'email' => $request->input('email'),
                    'first_name' => $request->input('first_name'),
                    'last_name' => $request->input('last_name'),
                );

                $datadetail = array(
                    'alamat' => $request->input('alamat'),
                    'kota' => $request->input('kota'),
                    'negara' => $request->input('negara'),
                    'kodepos' => $request->input('kodepos'),
                    'keahlian' => $request->input('keahlian'),
                    'bio' => $request->input('bio'),
                    'foto' => $path.$filename,
                    'background' => $path.$bgname,
                );
        
                UserDetail::where('id', $id)->update($datadetail);
                User::where('id', $request->user_id)->update($datauser);

                $foto->move($path, $filename);
                $bg->move($path, $bgname);
                
                Session::flash('notice', 'Profile data has successfuly updated');
                return redirect()->route('user.index');    
            }
        }else if($button == 'upload_cv'){

            
            $cv = $request->file('cv');
            $filename = str_random(6).'_'.$cv->getClientOriginalName();
            $cv->move($path, $filename);

            $data = array(
                'cv' =>  $path.$filename,
                'status_cv' => '-'
            );

            UserDetail::where('id', $id)->update($data);
            Session::flash('notice', 'Curiculum vitae has been uploaded');
            return redirect()->back(); 
        }

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
