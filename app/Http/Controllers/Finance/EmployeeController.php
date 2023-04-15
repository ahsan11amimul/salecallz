<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Spatie\Permission\Models\Role;



class EmployeeController extends Controller
{
    //
    public function index(Request $request)
    {   
        
       
        $employees=User::role(['Processor','Sale_rep'])->get();
        $all_processor=User::whereHas("roles", function($q){$q->where("name", "Processor"); })->get();
        $all_rep=User::whereHas("roles", function($q) { $q->where("name", "Sale_rep");  })->get();
        $active_processor=User::whereHas("roles", function($q){$q->where(["name"=>"Processor","status"=>"Active"]); })->get();
        $active_rep=User::whereHas("roles", function($q) { $q->where(["name"=> "Sale_rep","status"=>"Active"]);  })->get();
        $active=User::where('status','Active')->get();
        return view('employee.index',compact('employees','all_processor',
        'all_rep','active_processor','active_rep','active'));
    }
    public function store(Request $request)
    {
       // dd($request->all());
        $validateData=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'role_id'=>'required'
        ]);
        $employee=new User();
        $employee->name=$validateData['name'];
        $employee->email=$validateData['email'];
        $employee->phone=$validateData['phone'];
       
        $employee->assignRole($validateData['role_id']);
        $employee->save();
        return redirect()->back()->with('success','Employee Added Successfully!');
    }
     public function update(Request $request)
        {
            $validateData=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'role_id'=>'required'
           ]);
          // dd($validateData);
            $id=$request->id;
            $employee=User::find($id);
            $employee->update($validateData);
            DB::table('model_has_roles')->where('model_id',$id)->delete();
            $employee->assignRole($validateData['role_id']);
            return response()->json([
                'employee'=>$employee,
                'role_id'=>$validateData['role_id']
            ]);
          

        }
        // public function show(Lender $lender)
        // {
        //     return view('lender.show',compact('lender'));
        // }
        public function edit(Request $request,User $user)
        {   
             $role_id=$user->roles->pluck('name')[0];
             return response()->json([
                'user'=>$user,
                'role_id'=>$role_id
            ]);
            
            return $user;
        }
        public function destroy(Request $request)
        {
            $id=$request->id;
            $lender=User::find($id);
            if($lender)
            {
                  $lender->delete();
                  echo 'success';
            }else
            {
                  echo 'fail';
            }
          
          
        }

}
