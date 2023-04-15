
<div class="col-sm-4" style="    border-right: 1px solid #ced4da; box-shadow: 2px 2px 2px #ced4da;">
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
                     @if (isset($submitted))
                          <p class=" fs-6 fw-semibold">Submitted ({{$submitted->count()}})</p>
                          @foreach ($submitted as $item)
                              <p class="bg-white {{$deal->id == $item->id?'deal-active':''}}">{{$item->company_name}}</p>
                          @endforeach
                      @endif
                       @if (isset($underwritter))
                          <p class=" fs-6 fw-semibold">Underwritting ({{$underwritter->count()}})</p>
                          @foreach ($underwritter as $item)
                              <p class="bg-white {{$deal->id == $item->id?'deal-active':''}}">{{$item->company_name}}</p>
                          @endforeach
                      @endif

                      @if (isset($approved))
                          <p class=" fs-6 fw-semibold">Approved ({{$approved->count()}})</p>
                          @foreach ($approved as $item)
                              <p class="bg-white {{$deal->id == $item->id?'deal-active':''}}">{{$item->company_name}}</p>
                          @endforeach
                      @endif
                      @if (isset($coldoffer))
                          <p class=" fs-6 fw-semibold">Cold Offer ({{$coldoffer->count()}})</p>
                          @foreach ($coldoffer as $item)
                              <p class="bg-white {{$deal->id == $item->id?'deal-active':''}}">{{$item->company_name}}</p>
                          @endforeach
                      @endif

                 </div>
               </div>
               @include('partials.deal_modal')