@extends('layouts.app')
@section('title')
Lender
@endsection
@section('content')

@include('partials.navbar')
<div class="content-wrapper">
    @include('partials.sidebar')

    <main class="main-container" id="main_container">
        <div class="container-fluid w-100">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="text-info">VENDOR DASHBOARD</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    @can('deal.create')
                                        
                                   
                                    <button  data-bs-toggle="modal"
                                        data-bs-target="#add_deal" type="button" class="btn custom-btn">
                                        <i class='fas fa-plus'></i>
                                        Add Deal
                                    </button> 
                                    @endcan
                                </div>
                                <div>
                                    @can('lender.create')
                                        
                                  
                                    <button type="button"
                                        data-bs-toggle="modal" data-bs-target="#add_lender" class="btn custom-btn ms-3">
                                        <i class='fas fa-plus'></i>
                                        Add Lender
                                    </button>
                                      @endcan
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
                        <div class="card-body">
                            <div class="table-wrapper">
                                <div class="row">
                                    <div class="col-12 mt-1">
                                        @foreach ($errors->all() as $message)
                                             <p class="text-danger fw-bold">{{$message}}</p>
                                         @endforeach
                                    </div>
                                   
                                    <div class="col-sm-6">
                                        <div class="border border-light w-100 d-flex flex-column p-2">
                                            <div>
                                                <h5 class="text-muted">Vendors</h5>
                                            </div>
                                            <div>
                                                <div class="d-flex justify-content-start gap-5 align-items-center">
                                                    <div
                                                        style="width:60px;height:60px;background-color:rgb(97, 226, 226);position: relative;">
                                                        <i class='fas fa-user fa-lg'
                                                            style="color: white; position: absolute; top: 31%; left: 31%;"></i>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="text-muted fw-semibold">All</span>
                                                        <span class="text-muted fw-bold">{{$lenders->count()}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <div class="col-12">

                                    
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>

                                                <th scope="col">Company</th>
                                                <th scope="col">Primary Contact</th>
                                                <th scope="col">Code</th>
                                                <th scope="col">Phone Number</th>
                                                <th scope="col">Email Address</th>
                                                <th scope="col">Last Contacted</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                             <tr>
                                                <th><input type="text" class="form-control" /></th>
                                                <th><input type="text" class="form-control" /></th>
                                                <th><input type="text" class="form-control" /></th>
                                                <th><input type="text" class="form-control" /></th>
                                                <th><input type="text" class="form-control" /></th>
                                                <th><input type="text" class="form-control" /></th>
                                                <th><input type="text" class="form-control" /></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                               <tr class="collapse-container">
                                                <td colspan="7">
                                                    <a  data-bs-toggle="collapse" class="collapse-link" href="#coldoffer" role="button" aria-expanded="false" aria-controls="coldoffer">
                                                      Lenders({{$lenders->count()}})  
                                                    </a>
                                                  
                                                </td>

                                                 @foreach ($lenders as $item)
                                                <tr class="collapse" id="coldoffer">
                                               
                                               
                                                <td>{{$item->company_name}}</td>
                                                
                                                <td>{{$item->primary_contact}}</td>
                                                <td>{{$item->code}}</td>
                                                <td>{{$item->phone}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->last_contacted}}</td>
                                                <td>
                                                    <a class="edit_lender" href="#" role="button" data-id="{{$item->id}}">
                                                        <i class="fas fa-edit fa-lg text-info"></i>
                                                    </a>
                                                    <a href="#" class="delete_lender" role="button" data-id="{{$item->id}}">
                                                        <i class="fas fa-trash-alt fa-lg text-danger"></i>
                                                    </a>
                                                </td>
                                                </tr>
                                                @endforeach
                                               </tr>
                                              
                                           
                                            
                                           
                                        </tbody>
                                    </table>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="input-group mb-2">
                                                    <label for="name" class="col-form-label me-2">Quick Search:</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Search by Name">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class='fas fa-search'></i>

                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-2 ">

                                                    <button type="button" class="btn border-1 border-light">
                                                        <i class="fas fa-caret-right ms-2"></i>
                                                        Advanced Search
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

  @if (Session::has('success'))
      <script>
         Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: "{!! Session::get('success') !!}",
            showConfirmButton: false,
            timer: 1500
                });
      </script>
  @endif
</body>
@endsection
@include('partials.lender_modal')
@include('partials.edit_lender')
@include('partials.deal_modal')
