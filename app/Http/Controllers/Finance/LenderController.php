<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Models\Deal;
use App\Models\DealLender;
use Illuminate\Http\Request;
use App\Models\Lender;

class LenderController extends Controller
{
        public function index(Request $request)
        {
            $lenders=Lender::all();
            return view('lender.index',compact('lenders'));
        }
      
       
        public function store(Request $request)
        {
            //dd($request->all());
            $validateData=$request->validate([

                'company_name'=>'required',
                'primary_contact'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'code'=>'required',
                'last_contacted'=>'',
                'email2'=>'',
                'position'=>'required',
            ]);
           //dd($validateData);
            $user=Lender::create($validateData);

            return redirect()->back()->with('success','Lender Created Successfully');
        }
        public function update(Request $request)
        {
            $id=$request->id;
            $lender=Lender::find($id);
            $lender->update($request->all());
            return $lender;

        }
        public function show(Lender $lender)
        {
            return view('lender.show',compact('lender'));
        }
        public function edit(Request $request,Lender $lender)
        {
            return $lender;
        }
        public function destroy(Request $request)
        {
            $id=$request->id;
            $lender=Lender::find($id);
            if($lender)
            {
                  $lender->delete();
                  echo 'success';
            }else
            {
                  echo 'fail';
            }
          
          
        }

        public function assign_lender(Request $request)
        {
        
            $lenders=$request->lenders;
            foreach($lenders as $lender)
            {
               $lender_deal=new DealLender();
               $lender_deal->deal_id=$request->deal_id;
               $lender_deal->lender_id=$lender;
               $lender_deal->save();

            }
            $deal=Deal::find($request->deal_id);
            $deal->update(['status'=>'Underwritter']);
            return redirect()->back()->with('success','Lendera Added To Deal');
        }
}
