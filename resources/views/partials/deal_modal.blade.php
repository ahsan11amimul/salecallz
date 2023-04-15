 <div class="modal fade" id="add_deal" tabindex="-1" aria-labelledby="add_deal" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="add_deal">Salescallz</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{route('add_deal')}}" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row mb-2">
                                        <label for="sale_rep" class="col-sm-2 col-form-label">Sales Rep</label>
                                        <div class="col-sm-10">
                                            <select class="form-select form-select-sm" name="sale_rep" id="sale_rep">
                                                <option value="" selected>sales</option>
                                                @foreach ($reps as $item)
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
                                            <select class="form-select form-select-sm" name="sale_rep2" id="sale_rep2">
                                                <option selected>select</option>
                                                 @foreach ( $reps as $item)
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
                                            <input type="text" class="form-control form-control-sm" name="company_name" value="{{old('company_name')}}" id="company_name">
                                        </div>
                                        @error('company_name')
                                        <p class="text-danger fw-semibold">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                        <label for="marchant_name" class="col-sm-2 col-form-label">Marchant Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-sm" name="marchant_name" value="{{old('marchant_name')}}" id="marchant_name">
                                        </div>
                                        @error('merchant_name')
                                        <p class="text-danger fw-semibold">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                        <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-sm" name="phone_number" value="{{old('phone_number')}}" id="phone_number">
                                        </div>
                                        @error('phone_number')
                                        <p class="text-danger fw-semibold">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                        <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-sm" name="email" value="{{old('email')}}" id="email">
                                        </div>
                                        @error('email')
                                        <p class="text-danger fw-semibold">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                        <label for="requested_amount" class="col-sm-2 col-form-label">Requested Amount</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-sm" name="request_amount" value="{{old('request_amount')}}" id="requested_amount">
                                        </div>
                                        @error('requested_amount')
                                        <p class="text-danger fw-semibold">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                    <label for="date_submitted" class="col-sm-2 col-form-label">Date Submitted</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control form-control-sm" name="date_submitted" value="" id="date_submitted">
                                    </div>
                                    @error('date_submitted')
                                    <p class="text-danger fw-semibold">{{$message}}</p>
                                    @enderror
                                   </div>
                                    <div class="row mb-2">
                                        <label for="files" class="form-label col-sm-2">Files</label>
                                        <input class="form-control form-control-sm" id="files" type="file"  name="files">
                                    </div>

                               
                            </div>
                            <div class="modal-footer">

                                <button type="submit" class="btn submit_button">Submit Deal</button>
                                <button type="button" class="btn submit_button">Submit & Notify Processor</button>

                            </div> 
                        </form>
                        </div>
                    </div>
                </div>
 