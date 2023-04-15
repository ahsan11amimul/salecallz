@extends('layouts.app')
@section('title')
Selected Lender
@endsection
@section('content')
 
@include('partials.navbar')
<div class="wrapper">
    @include('partials.sidebar')
    <main class="main-container" id="main_container">
        <div class="container-fluid pt-2" style="width: calc(100vw - 16rem);">
            <div class="row align-items-center">
               <div class="col-sm-3 item_div1">
                   <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="text-info">SEARCH RESULTS</h5>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                               
                                <div>
                                    <button style="box-shadow: -5px 0px rgb(0, 119, 255);" type="button"
                                        class="btn custom-btn ms-3" data-bs-toggle="modal" data-bs-target="#add_deal">
                                        <i class='fas fa-plus'></i>
                                        New Deal
                                    </button>
                                </div>

                                <div class="ms-1">
                                    <span>
                                        <i class='fas fa-caret-down'></i>
                                    </span>
                                </div>
                                <div class="ms-2">
                                    <span>
                                        <i class='fas fa-sync'></i>
                                    </span>
                                </div>

                            </div>

                 </div>
                 <div>
                    <label for="name" class="col-form-label"> Company</label>
                    <input type="text" name="" class="form-control form-control-sm" id="">
                 </div>
                 <div>
                      @if (isset($approved))
                          <p class=" fs-6 fw-semibold">Approved ({{$approved->count()}})</p>
                          @foreach ($approved as $item)
                              <p class="bg-white {{$deal->id == $item->id?'active':''}}">{{$item->company_name}}</p>
                          @endforeach
                      @endif
                      @if (isset($coldoffer))
                          <p class=" fs-6 fw-semibold">Cold Offer ({{$coldoffer->count()}})</p>
                          @foreach ($coldoffer as $item)
                              <p class="bg-white {{$deal->id == $item->id?'active':''}}">{{$item->company_name}}</p>
                          @endforeach
                      @endif
                      @if (isset($pending))
                          <p class=" fs-6 fw-semibold">Pending ({{$pending->count()}})</p>
                          @foreach ($pending as $item)
                              <p class="bg-white {{$deal->id == $item->id?'active':''}}">{{$item->company_name}}</p>
                          @endforeach
                      @endif

                 </div>
               </div>
               {{-- <div class="col-sm-1 item_div2">
                 <h5 style="writing-mode: vertical-rl;text-orientation: mixed;" class=" pt-1 p-2 text-info">BORROWER & OPEN DEAL INFO</h5>
               </div> --}}
               <div class="col-sm-3 item_div2">
                <div class="row">
                    <div class="col-sm-1">
                        <h5 style="writing-mode: vertical-rl;text-orientation: mixed;" class=" pt-1 p-2 text-info">BORROWER & OPEN DEAL INFO</h5>
                    </div>
                    <div class="col-sm-11 d-none">
                            <div class="d-flex justify-content-between align-items-center">

                                <div>
                                    <button style="box-shadow: -5px 0px rgb(0, 174, 255);" type="button"
                                        class="btn custom-btn">
                                        <i class='fas fa-bars'></i>
                                        Delete
                                    </button>
                                </div>
                                <div>
                                    <button style="box-shadow: -5px 0px rgb(255, 238, 0);" type="button"
                                        class="btn custom-btn ms-3">
                                        <i class='fas fa-plus'></i>
                                       Processor
                                    </button>
                                </div>
                                <div>
                                    <button style="box-shadow: -5px 0px rgb(255, 0, 0);" type="button"
                                        class="btn custom-btn ms-3">
                                        <i class='fas fa-plus'></i>
                                        New Position
                                    </button>
                                </div>

                                <div class="ms-2">
                                    <span>
                                        <i class='fas fa-caret-down'></i>
                                    </span>
                                </div>
                                <div class="ms-2">
                                    <span>
                                        <i class='fas fa-sync'></i>
                                    </span>
                                </div>

                            </div>
                     <div class=" mt-2">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-info" aria-selected="true">Info</button>
                                <button class="nav-link" id="nav-file-tab" data-bs-toggle="tab" data-bs-target="#nav-file" type="button" role="tab" aria-controls="nav-file" aria-selected="false">Files</button>
                                <button class="nav-link" id="nav-sales-tab" data-bs-toggle="tab" data-bs-target="#nav-sales" type="button" role="tab" aria-controls="nav-sales" aria-selected="false">Sales Notes</button>
                                <button class="nav-link" id="nav-system-tab" data-bs-toggle="tab" data-bs-target="#nav-system" type="button" role="tab" aria-controls="nav-system" aria-selected="false">System Notes</button>
                            </div>
                         </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab" tabindex="0">
                                <form>
                                    <div class="row mb-2">
                                            <label for="last_contacted" class="col-sm-4 col-form-label">Last Contacted</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="last_contacted" value="23/12/12">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label for="sale_rep" class="col-sm-4 col-form-label">Sales Rep</label>
                                            <div class="col-sm-8">
                                                <select class="form-select form-select-sm" name="sale_rep" id="sale_rep">
                                                    <option value="" selected>sales</option>
                                                    @foreach ( App\Models\User::where('role_id',2)->get() as $item)
                                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                                    
                                                    @endforeach

                                                </select>
                                            </div>
                                            @error('sale_rep')
                                            <p class="text-danger fw-semibold">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="row mb-2">
                                            <label for="sale_rep2" class="col-sm-4 col-form-label">Sales Rep2</label>
                                            <div class="col-sm-8">
                                                <select class="form-select form-select-sm" name="sale_rep2" id="sale_rep2">
                                                    <option selected>select</option>
                                                    @foreach ( App\Models\User::where('role_id',2)->get() as $item)
                                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                                    
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('sale_rep2')
                                            <p class="text-danger fw-semibold">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="row mb-2">
                                            <label for="borrower_status" class="col-sm-4 col-form-label">Borrower Status</label>
                                            <div class="col-sm-8">
                                                <select class="form-select form-select-sm" name="borrower_status" id="borrower_status">
                                                    <option selected>Approved</option>
                                                
                                                    <option value="decline">decline</option>
                                                    <option value="underwriter">underwritter</option>
                                                    <option value="coldoffer">Coldoffer</option>
                                                    
                                                
                                                </select>
                                            </div>
                                            @error('sale_rep2')
                                            <p class="text-danger fw-semibold">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="row mb-2">
                                            <label for="name" class="col-sm-4 col-form-label">Name</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="name" value="Bol Merley">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label for="primary_contact" class="col-sm-4 col-form-label">Primary Contact</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="primary_contact" value="Bol Merley">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label for="phone" class="col-sm-4 col-form-label">Phone</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="phone" value="46557568">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label for="phone" class="col-sm-4 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                            <input type="email" class="form-control form-control-sm" id="email" value="abc@gmail.com">
                                            </div>
                                        
                                        </div>
                                
                                        <div class="row mb-2">
                                            <hr>

                                          
                                        </div>
                                         <div class="row mb-2">
                                            <label for="borrower" class="col-sm-4 col-form-label">Borrower</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="borrower" value="Bob">
                                            </div>
                                        </div>

                                         <div class="row mb-2">
                                            <label for="requested_amount" class="col-sm-4 col-form-label">Requested Amount</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="requested_amount" value="1235">
                                            </div>
                                        </div>
                                         <div class="row mb-2">
                                            <label for="date_submitted" class="col-sm-4 col-form-label">Date Submitted</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="date_submitted" value="1/03/20">
                                            </div>
                                        </div>
                                         <div class="row mb-2">
                                            <label for="notes" class="col-sm-4 col-form-label">Notes</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="notes" value="jjjhl">
                                            </div>
                                        </div>
                                    
                                
                                
                                    </form>
                                   
                            </div>
                        
                            <div class="tab-pane fade" id="nav-file" role="tabpanel" aria-labelledby="nav-file-tab" tabindex="0">
                                <form action="#" method="post" enctype="multipart/form-data" class="dropzone">
                                    @csrf
                                </form>
                                <div>
                                    <h2>Files:</h2>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-sales" role="tabpanel" aria-labelledby="nav-sales-tab" tabindex="0">
                                <p>No Records Found</p>
                            </div>
                            <div class="tab-pane fade" id="nav-system" role="tabpanel" aria-labelledby="nav-system-tab" tabindex="0">
                                <p>No Records Found</p>
                            </div>
                        </div>
                    </div>
                    </div>
                   
                 
                  </div>  
               </div>
               {{-- <div class="col-sm-1 item_div4">
                   <h5 style="writing-mode: vertical-rl;text-orientation: mixed;" class=" pt-1 p-2 text-info">PRREVIOUS LOANS</h5>
               </div> --}}
            <div class="col-sm-3 item_div3">
                <div class="row">
                    <div class="col-sm-1">
                         <h5 style="writing-mode: vertical-rl;text-orientation: mixed;" class=" pt-1 p-2 text-info">SELECTED LENDERS - REP: {{$deal->sale_rep}}</h5>
                    </div>
                    <div class="col-sm-11 d-none">
                           
                            <div class="d-flex justify-content-between align-items-center">

                                <div>
                                    <button style="box-shadow: -5px 0px rgb(0, 174, 255);" type="button"
                                        class="btn custom-btn">
                                        <i class='fas fa-bars'></i>
                                        Group By
                                    </button>
                                </div>
                                <div>
                                    <button style="box-shadow: -5px 0px rgb(255, 238, 0);" type="button"
                                        class="btn custom-btn ms-3">
                                        <i class='fas fa-plus'></i>
                                        Assign Lender
                                    </button>
                                </div>
                                <div>
                                    <button style="box-shadow: -5px 0px rgb(255, 0, 0);" type="button"
                                        class="btn custom-btn ms-3">
                                        <i class='fas fa-plus'></i>
                                        New Position
                                    </button>
                                </div>

                                <div class="ms-2">
                                    <span>
                                        <i class='fas fa-caret-down'></i>
                                    </span>
                                </div>
                                <div class="ms-2">
                                    <span>
                                        <i class='fas fa-sync'></i>
                                    </span>
                                </div>

                            </div>
                        <div class="row align-items-center">
                    <div class="col-sm-6">
                        <p>
                            <span class="text-muted fw-semibold"  role="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">Collapse All |</span>
                            <span class="text-info fw-bold">Expand All</span>
                        </p>
                    </div>
                    <div class="col-sm-6">
                            <div class="input-group mb-2">
                                <label for="table" class="col-form-label me-2">Filter Table:</label>
                                <input type="text" class="form-control form-control-sm">
                                <span class="input-group-text" id="basic-addon2">
                                    <i class='fas fa-search'></i>
                                </span>
                            </div>
                    </div> <div class="col-12 mt-2">
                         <table class="table table-striped">
                                    <thead>
                                        <tr>

                                            <th scope="col">#</th>
                                            <th scope="col">Lender Name</th>
                                            <th scope="col">Date Sent</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Funded Amount</th>
                                            <th scope="col">Notes/Terms</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Open Email</th>
                                            <th scope="col">Open Files</th>
                                        </tr>

                                    </thead>
                                    <tbody>

                                        <tr class="collapse-container">
                                            <td colspan="9">
                                                <a data-bs-toggle="collapse" class="collapse-link" href="#coldoffer"
                                                    role="button" aria-expanded="false" aria-controls="coldoffer">

                                                    <i class="fas fa-caret-down"></i> {{date('m-Y')}}({{$lenders->count()}})
                                                </a>

                                            </td>
                                            @foreach ($lenders as $item)
                                                <tr class="collapse" id="coldoffer">
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>{{$item->primary_contact}}</td>
                                            <td>
                                               <input type="text" class="form-control form-control-sm" name="" value="{{date("Y/m/d")}}" id="">
                                            </td>
                                            <td>
                                            <select class="form-select form-select-sm" name="" id="">
                                            <option value="" selected>Approved</option>
                                            <option value="pending">Pending</option>
                                            <option value="Declined">Declined</option>
                                             </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-control-sm" name="" id="">
                                            </td>
                                            <td>
                                                 <input type="text" class="form-control form-control-sm" name="" id="">
                                            </td>
                                            <td>
                                            <a href="#" style="text-decoration: none;cursor:pointer;color:rgb(129, 124, 124);display:block;" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="">
                                             Accept 
                                            </a>
                                            </td>
                                            <td>Edit</td>
                                            <td>Send</td>
                                        </tr> 
                                            @endforeach
                                       
                                       

                                        </tr>
                                        <tr></tr>
                                        <tr>
                                            <td colspan="9">Attacments</td>
                                        </tr>
                                        <tr>
                                            <td colspan="9">
                                                <i class="fas fa-file-pdf text-danger fa-lg"></i>
                                                {{$deal->files}}
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                    </div>
                    </div>
                    </div>

                   
                 
                </div>  
            </div>
               <div class="col-sm-3 item_div4">
                 <div class="row">
                      
                
                        <div class="col-12">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <button style="box-shadow: -5px 0px rgb(0, 174, 255);" type="button"
                                            class="btn custom-btn">
                                            <i class='fas fa-bars'></i>
                                            Group By
                                        </button>
                                    </div>
                                    <div>
                                        <button style="box-shadow: -5px 0px rgb(255, 238, 0);" type="button"
                                            class="btn custom-btn">
                                            <i class='fas fa-plus'></i>
                                            New Deal
                                        </button>
                                    </div>
                                    <div>
                                        <button style="box-shadow: -5px 0px rgb(255, 0, 0);" type="button"
                                            class="btn custom-btn">
                                            <i class='fas fa-plus'></i>
                                            Card
                                        </button>
                                    </div>

                                    <div class="ms-2">
                                        <span>
                                            <i class='fas fa-caret-down'></i>
                                        </span>
                                    </div>
                                    <div class="ms-2">
                                        <span>
                                            <i class='fas fa-sync'></i>
                                        </span>
                                    </div>

                                </div>
                        
                        <div class=" mt-2">
                             <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Lender Name</th>
                                            <th scope="col">Requested Amount</th>
                                            <th scope="col">Date Funded</th>
                                            <th scope="col">Funded Amount</th>
                                            <th scope="col">Sales/Rep</th>
                                            <th scope="col">Date Updated</th>
                                            <th scope="col">Balance</th>
                                            
                                        </tr>

                                    </thead>
                                    <tbody>

                                        <tr>

                                            <td>
                                               <input type="text" class="form-control form-control-sm" name="" value="" id="">  
                                            </td>
                                            <td>
                                               <input type="text" class="form-control form-control-sm" name="" value="" id="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-control-sm" name="" id="">
                                            </td>
                                            <td>
                                                 <input type="text" class="form-control form-control-sm" name="" id="">
                                            </td>
                                            <td>
                                                 <input type="text" class="form-control form-control-sm" name="" id="">
                                            </td>
                                            <td>
                                                 <input type="text" class="form-control form-control-sm" name="" id="">
                                            </td>
                                            <td>
                                                 <input type="text" class="form-control form-control-sm" name="" id="">
                                            </td>
                                           
                                        </tr>
    
                                        <tr>
                                            <td colspan="9">No Records Found</td>
                                        </tr>

                                    </tbody>
                                </table>
                    
                 
                 
                            </div>
                     </div>
                </div>
            </div>
        </div>
    </main>

</div>
<script>
    Dropzone.options.dropzone={
        maxFileSize:10,
        renameFile:function(file){
            var dt=new Date();
            var time=dt.getTime();
            return time+file.name;
        },acceptedFiles:'.jpeg,.png,.pdf,.docx',
          addRemoveLinks:true,
          timeout:5000,
          success:function(file,response){
            console.log(response);
          },
          error:function(file,response){
            return false;
          }
    }
</script>