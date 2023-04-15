 <div class="modal fade" id="edit_deal" tabindex="-1" aria-labelledby="edit_deal" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="edit_deal">Edit Deal</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form  id="edit_form1" name="edit_form1" novalidate="">
                                    @csrf
                                    <div class="row mb-2">
                                        <label for="sale_rep" class="col-sm-2 col-form-label">Sales Rep</label>
                                        <div class="col-sm-10">
                                            <select class="form-select form-select-sm" name="sale_rep" id="sale_rep1">
                                                <option value="" selected>sales</option>
                                                @foreach ( App\Models\User::all() as $item)
                                                <option value="{{$item->name}}">{{$item->name}}</option>
                                                
                                                @endforeach

                                            </select>
                                        </div>
                                        @error('sale_rep')
                                          <p class="text-danger fw-semibold">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                        <label for="sale_rep2" class="col-sm-2 col-form-label">Sales Rep2</label>
                                        <div class="col-sm-10">
                                            <select class="form-select form-select-sm" name="sale_rep2" id="sale_rep21">
                                                <option selected>select</option>
                                                 @foreach ( App\Models\User::all() as $item)
                                                <option value="{{$item->name}}">{{$item->name}}</option>
                                                
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('sale_rep2')
                                        <p class="text-danger fw-semibold">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                        <label for="company_name" class="col-sm-2 col-form-label">Company Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-sm" name="company_name" value="{{old('company_name')}}" id="company_name1">
                                        </div>
                                        @error('company_name')
                                        <p class="text-danger fw-semibold">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                        <label for="marchant_name" class="col-sm-2 col-form-label">Marchant Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-sm" name="marchant_name" value="{{old('marchant_name')}}" id="marchant_name1">
                                        </div>
                                        @error('merchant_name')
                                        <p class="text-danger fw-semibold">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                        <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-sm" name="phone_number" value="{{old('phone_number')}}" id="phone_number1">
                                        </div>
                                        @error('phone_number')
                                        <p class="text-danger fw-semibold">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                        <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-sm" name="email" value="{{old('email')}}" id="email1">
                                        </div>
                                        @error('email')
                                        <p class="text-danger fw-semibold">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                        <label for="requested_amount" class="col-sm-2 col-form-label">Requested Amount</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-sm" name="request_amount" value="{{old('request_amount')}}" id="requested_amount1">
                                        </div>
                                        @error('requested_amount')
                                        <p class="text-danger fw-semibold">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                    <label for="date_submitted" class="col-sm-2 col-form-label">Date Submitted</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control form-control-sm" name="date_submitted" value="" id="date_submitted1">
                                    </div>
                                    @error('date_submitted')
                                    <p class="text-danger fw-semibold">{{$message}}</p>
                                    @enderror
                                   </div>
                                    <div class="row mb-2">
                                    <label for="last_contacted" class="col-sm-2 col-form-label">Last Contacted</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control form-control-sm" name="last_contacted" value="" id="last_contacted1">
                                    </div>
                                    @error('last_contacted')
                                    <p class="text-danger fw-semibold">{{$message}}</p>
                                    @enderror
                                   </div>
                                    <div class="row mb-2">
                                    <label for="lender_notes" class="col-sm-2 col-form-label">Lender Notes</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" name="lender_notes" value="" id="lender_notes1">
                                    </div>
                                    @error('lender_notes')
                                    <p class="text-danger fw-semibold">{{$message}}</p>
                                    @enderror
                                   </div>
                                   
                                <input type="hidden" name="deal_id" id="deal_id">
                               
                            </div>
                            <div class="modal-footer">

                                <button type="submit" id="save_deal" class="btn submit_button">Save changes</button>
                               

                            </div> 
                        </form>
                        </div>
                    </div>
                </div>
 