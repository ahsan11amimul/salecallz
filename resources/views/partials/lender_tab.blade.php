 <div class="row mt-2">
       <div class="col-sm-5">
          <h5 class="text-info"> BORROWER & OPEN DEAL INFO</h5>
      </div>
       <div class="col-sm-7">
            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <button style="box-shadow: -5px 0px rgb(0, 174, 255);" type="button" class="btn custom-btn delete_deal" data-id="{{$deal->id}}">
                        <i class='fas fa-bars'></i>
                        Delete
                    </button>
                </div>
                <div>
                    <button style="box-shadow: -5px 0px rgb(255, 238, 0);" type="button" class="btn custom-btn ms-3">
                        <i class='fas fa-plus'></i>
                        Processor
                    </button>
                </div>
                <div>
                    <button style="box-shadow: -5px 0px rgb(255, 0, 0);" type="button" class="btn custom-btn ms-3">
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
       </div>
         <div class="col-sm-12 mt-2">
             <nav>
                 <div class="nav nav-tabs" id="nav-tab" role="tablist">
                     <button class="nav-link active" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info"
                         type="button" role="tab" aria-controls="nav-info" aria-selected="true">Info</button>
                     <button class="nav-link" id="nav-file-tab" data-bs-toggle="tab" data-bs-target="#nav-file"
                         type="button" role="tab" aria-controls="nav-file" aria-selected="false">Files</button>
                     <button class="nav-link" id="nav-sales-tab" data-bs-toggle="tab" data-bs-target="#nav-sales"
                         type="button" role="tab" aria-controls="nav-sales" aria-selected="false">Sales Notes</button>
                     <button class="nav-link" id="nav-system-tab" data-bs-toggle="tab" data-bs-target="#nav-system"
                         type="button" role="tab" aria-controls="nav-system" aria-selected="false">System Notes</button>
                 </div>
             </nav>
             <div class="tab-content mt-2" id="nav-tabContent">
                 <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab"
                     tabindex="0">
                     <form>
                         <div class="row mb-2">
                             <label for="last_contacted" class="col-sm-4 col-form-label">Last Contacted</label>
                             <div class="col-sm-8">
                                 <input type="text" class="form-control form-control-sm" id="last_contacted"
                                     value="23/12/12">
                             </div>
                         </div>
                         <div class="row mb-2">
                             <label for="sale_rep" class="col-sm-4 col-form-label">Sales Rep</label>
                             <div class="col-sm-8">
                                 <select class="form-select form-select-sm" name="sale_rep" id="sale_rep">
                                     <option value="{{$deal->sale_rep??''}}" selected>{{$deal->sale_rep??""}}</option>
                                      @foreach ( App\Models\User::where('role_id',2)->get() as $item)
                                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                                    
                                      @endforeach

                                 </select>
                             </div>
                             @error('sale_rep')
                                 <p class="text-danger fw-semibold">{{ $message }}</p>
                             @enderror
                         </div>
                         <div class="row mb-2">
                             <label for="sale_rep2" class="col-sm-4 col-form-label">Sales Rep2</label>
                             <div class="col-sm-8">
                                 <select class="form-select form-select-sm" name="sale_rep2" id="sale_rep2">
                                     <option value="{{$deal->sale_rep2??''}}" selected>{{$deal->sale_rep2}}</option>
                                      @foreach ( App\Models\User::where('role_id',2)->get() as $item)
                                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                                    
                                     @endforeach
                                 </select>
                             </div>
                             @error('sale_rep2')
                                 <p class="text-danger fw-semibold">{{ $message }}</p>
                             @enderror
                         </div>
                         <div class="row mb-2">
                             <label for="borrower_status" class="col-sm-4 col-form-label">Borrower Status</label>
                             <div class="col-sm-8">
                                 <select class="form-select form-select-sm" name="borrower_status" id="borrower_status">
                                     <option value="{{$deal->status??''}}" selected>{{$deal->status}}</option>

                                     <option value="Approved">Approved</option>
                                     <option value="underwriter">underwritter</option>
                                     <option value="coldoffer">Coldoffer</option>


                                 </select>
                             </div>
                             @error('status')
                                 <p class="text-danger fw-semibold">{{ $message }}</p>
                             @enderror
                         </div>
                         <div class="row mb-2">
                             <label for="name" class="col-sm-4 col-form-label">Name</label>
                             <div class="col-sm-8">
                                 <input type="text" class="form-control form-control-sm" id="name" value="{{$deal->marchant_name??''}}">
                             </div>
                         </div>
                         <div class="row mb-2">
                             <label for="primary_contact" class="col-sm-4 col-form-label">Primary Contact</label>
                             <div class="col-sm-8">
                                 <input type="text" class="form-control form-control-sm" id="primary_contact"
                                     value="{{$deal->company_name??''}}">
                             </div>
                         </div>
                         <div class="row mb-2">
                             <label for="phone" class="col-sm-4 col-form-label">Phone</label>
                             <div class="col-sm-8">
                                 <input type="text" class="form-control form-control-sm" id="phone" value="{{$deal->phone_number??''}}">
                             </div>
                         </div>
                         <div class="row mb-2">
                             <label for="phone" class="col-sm-4 col-form-label">Email</label>
                             <div class="col-sm-8">
                                 <input type="email" class="form-control form-control-sm" id="email"
                                     value="{{$deal->email??''}}">
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
                                 <input type="text" class="form-control form-control-sm" id="requested_amount"
                                     value="{{$deal->request_amount??''}}">
                             </div>
                         </div>
                         <div class="row mb-2">
                             <label for="date_submitted" class="col-sm-4 col-form-label">Date Submitted</label>
                             <div class="col-sm-8">
                                 <input type="text" class="form-control form-control-sm" id="date_submitted"
                                     value="{{$deal->date_submitted}}">
                             </div>
                         </div>
                         <div class="row mb-2">
                             <label for="notes" class="col-sm-4 col-form-label">Notes</label>
                             <div class="col-sm-8">
                                 <input type="text" class="form-control form-control-sm" id="notes" value="{{$deal->lender_notes??''}}">
                             </div>
                         </div>



                     </form>

                 </div>

                 <div class="tab-pane fade" id="nav-file" role="tabpanel" aria-labelledby="nav-file-tab" tabindex="0">
                     <form action="{{url('/deal/upload')}}" method="post" enctype="multipart/form-data">
                         @csrf
                         <div class="mb-3">
                         <label for="formFile" class="form-label">File Upload</label>
                         <input class="form-control" type="file" id="formFile" multiple name="files[]">
                         <input type="hidden" name="deal_id" value="{{$deal->id}}">
                         @error('files')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100">Upload</button>
                        </div>
                     </form>
                     <div class="row">
                          <div class="col-sm-3">
                            <h6>Files:</h6>
                          </div>
                         
                          @foreach (App\Models\DealFiles::where('deal_id',$deal->id)->get() as $item)
                             <div class="col-sm-3 gap-2">
                                <span>
                                <i class="fas fa-file-pdf text-danger fa-lg"></i>
                                </span>
                               <span>
                                   {{$item->files}}
                               </span>
                               </div>
                            @endforeach
                         
                       
                       
                     </div>
                 </div>
                 <div class="tab-pane fade" id="nav-sales" role="tabpanel" aria-labelledby="nav-sales-tab" tabindex="0">
                     <p>No Records Found</p>
                 </div>
                 <div class="tab-pane fade" id="nav-system" role="tabpanel" aria-labelledby="nav-system-tab"
                     tabindex="0">
                     <p>No Records Found</p>
                 </div>
             </div>
         </div>
         

     
</div>
