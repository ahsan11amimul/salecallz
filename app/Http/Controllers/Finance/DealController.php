<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deal;
use App\Models\Lender;
use App\Models\User;
use App\Models\DealFiles;
use App\Models\DealLender;

class DealController extends Controller
{
    public function index(Request $request)
    {
      $reps=User::role('Sale_rep')->get();
      $submitted=Deal::where('status','Submitted')->get();
      $underwritter=Deal::where('status','Underwritter')->get();
      $approved=Deal::where('status','Approved')->get();
      $coldoffer=Deal::where('status','coldoffer')->get();
      return view('deal.index',compact('submitted','reps','underwritter','coldoffer','approved'));
    }
    public function store(Request $request)
    {
      //dd($request->all());
      $validateData=$request->validate([
        'sale_rep'=>'required',
        'sale_rep2'=>'required',
        'company_name'=>'required',
        'marchant_name'=>'required',
        'phone_number'=>'required',
        'email'=>'required',
        'request_amount'=>'required',
        'date_submitted'=>'required',
        'last_contacted'=>'',
        'lender_notes'=>''
      ]); 
      $deal=Deal::create($validateData);
      if($request->file('files'))
      {
        $image=$request->file('files');
        $image_name=time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('files'),$image_name);
        $deal_files=new DealFiles();
        $deal_files->deal_id=$deal->id;
        $deal_files->files=$image_name;
        $deal_files->save();
       }
      
      return redirect()->back()->with('success','Deal Submitted Successfully');
    }
    public function upload(Request $request)
    {
          $request->validate([
          'deal_id' => 'required',
          'files'=>'required',
          ]);
      if($request->file('files'))
      {
        foreach($request->file('files') as $file)
        {
            $image_name = $file->getClientOriginalName();
            $file->move(public_path('files'),$image_name); 
            $deal_files = new DealFiles();
            $deal_files->files = $image_name;
            $deal_files->deal_id=$request->deal_id;
            $deal_files->save();
        }
       
       
        return redirect()->back()->with('success','File Uploaded Successfully!');

       }

         
    }
    public function show(Request $request,$id)
    {            
      $lenders=Lender::all();
      $reps=User::role('Sale_rep')->get();
  
      $deal=Deal::findOrFail($id); 
      // $assigned_lenders=DealLender::with('deals','lenders');
      // dd($assigned_lenders);
      $submitted=Deal::where('status','Submitted')->get();
      $underwritter=Deal::where('status','Underwritter')->get();
      $approved=Deal::where('status','Approved')->get();
      $coldoffer=Deal::where('status','coldoffer')->get();
      return view('lender.new',compact('lenders','reps','deal','submitted','underwritter','coldoffer','approved'));
      
    }
       public function edit(Request $request,Deal $deal)
        {
            return $deal;
        }
     public function update(Request $request)
        {
            $id=$request->id;
            $deal=Deal::find($id);
            $deal->update($request->all());
            return $deal;

        }

    public function destroy(Request $request,$id)
    {
            $id=$request->id;
            $deal=Deal::find($id);
            if($deal)
            {
                  $deal->delete();
                  echo 'success';
            }else
            {
                  echo 'fail';
            }
    }
}
