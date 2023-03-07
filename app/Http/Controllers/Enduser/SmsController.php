<?php

namespace App\Http\Controllers\Enduser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;

class SmsController extends Controller
{
    //
        public function index(Request $request)
        {

            $data = DB::table('sms_settings')->orderBy('id','DESC')->get();
                if ($request->ajax()) {
                    $data = DB::table('sms_settings')->orderBy('id','DESC')->get();
                    return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function ($row) {
                            $id = $row->id;
                            return "
                            <a style='  class='custom-button-class mr-2'  href='route('sms.settings.edit',$row->id)'><i style='color:orange' class='fas fa-edit'></i></a>
                           ";
                        })
                        ->rawColumns(['action'])
                        ->make(true);
                }
                return view('enduser.settings.sms.index');
        }



    public function create(){
        return view('enduser.settings.sms.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'provider_name' => 'required',
            'password' => 'required',
            'status' => 'required',
        ]);
    
        $input = [
            'provider_name'=> $request->provider_name,
            'user_id'=> auth()->user()->id,
            'password'=> $request->password,
            'status'=> $request->status,
        ];

        $user = DB::table('sms_settings')->insert($input);
    
        return redirect()->route('sms_settings_index')
                        ->with('success','Sms Settings created successfully');
    }
}
