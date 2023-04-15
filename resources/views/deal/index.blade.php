@extends('layouts.app')
@section('title')
Finance
@endsection
@section('content')

@include('partials.navbar')
<div class="wrapper">
    @include('partials.sidebar')
    <main class="main-container" id="main_container">
        <div class="container-fluid w-100">
           <div class="row">
            <div class="col-12 mt-1">
                
                @foreach ($errors->all() as $message)
                     <p class="text-danger fw-bold">{{$message}}</p>
                @endforeach
            </div>
                <div class="col-md-6">
                    <p><span class="text-muted fw-semibold">Advanced Search ,</span>
                        <span class="text-info fw-bold">Search Results</span>
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-sm" placeholder="Search by Name,Term">
                        <span class="input-group-text" id="basic-addon2">
                            <i class='fas fa-search'></i>
                        </span>
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-12">
                      <div class="card h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="text-info">SEARCH RESULTS</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <button style="box-shadow: -5px 0px rgb(0, 174, 255);" type="button"
                                     data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                        class="btn custom-btn me-3">
                                        <i class='fas fa-dollar-sign'></i>
                                        Open
                                    </button>
                                </div>
                                <div>
                                    <button style="box-shadow: -5px 0px rgb(0, 174, 255);" type="button"
                                        class="btn custom-btn">
                                        <i class='fas fa-bars'></i>
                                        All
                                    </button>
                                </div>
                                <div>
                                    <button style="box-shadow: -5px 0px rgb(255, 238, 0);" type="button"
                                        class="btn custom-btn ms-3">
                                        <i class='fas fa-edit'></i>
                                        Line
                                    </button>
                                </div>
                                <div>
                                    <button style="box-shadow: -5px 0px rgb(255, 0, 0);" type="button"
                                        class="btn custom-btn ms-3" data-bs-toggle="modal" data-bs-target="#add_deal">
                                        <i class='fas fa-plus'></i>
                                        New Deal
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
                        <div class="card-body">
                            <div class="table-wrapper">
                               <table class="table table-striped">
                                        <thead>
                                            <tr>

                                                <th scope="col">Company</th>
                                                <th scope="col">Primary Contact</th>
                                                <th scope="col">Lender Notes</th>
                                                <th scope="col">Phone Number</th>
                                                <th scope="col">Email Address</th>
                                                <th scope="col">Rep(s)</th>
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
                                                <th><input type="text" class="form-control" /></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <tr class="collapse-container">
                                                 @if ($submitted->count()>0)
                                                    <td colspan="8">
                                                    <a  data-bs-toggle="collapse" class="collapse-link" href="#submitted" role="button" aria-expanded="false" aria-controls="submitted">
                                                      Submitted({{$submitted->count()}})  
                                                    </a>
                                                    </td>
                                                    @foreach ($submitted as $item)
                                                        <tr class="collapse" id="submitted">
                                                    
                                                            <td>
                                                                <a href="/show_deal/{{$item->id}}" style="text-decoration: none;cursor:pointer;color:rgb(129, 124, 124);display:block;">
                                                                {{$item->company_name}}.
                                                            </a>
                                                            </td>
                                                            <td>{{$item->marchant_name}}</td>
                                                            <td style="display: flex;">
                                                                <span class="badge text-bg-info me-2">Swift funding</span>
                                                                <span class="badge text-bg-warning me-2">Landini Funding.t</span>
                                                                <span class="badge text-bg-info me-2">Swift funding.approved car parking</span>
                                                            
                                                            </td>
                                                            <td>{{$item->phone_number}}</td>
                                                            <td>{{$item->email}}</td>
                                                            <td>{{$item->sale_rep}}</td>
                                                            <td>{{$item->date_submitted}}</td>
                                                           <td>
                                                                <button  type="button" class="btn btn-sm btn-danger delete_deal" data-id="{{$item->id}}">
                                                                   <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                                <button type="button" data-id="{{$item->id}}" class="btn btn-sm btn-info edit_deal">
                                                                    <i class="fas fa-edit"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                 @if ($underwritter->count()>0)
                                                    <td colspan="8">
                                                    <a  data-bs-toggle="collapse" class="collapse-link" href="#underwritting" role="button" aria-expanded="false" aria-controls="underwritting">
                                                      Underwritting({{$underwritter->count()}})  
                                                    </a>
                                                    </td>
                                                    @foreach ($underwritter as $item)
                                                        <tr class="collapse" id="underwritting">
                                                    
                                                            <td>
                                                                <a href="/show_deal/{{$item->id}}" style="text-decoration: none;cursor:pointer;color:rgb(129, 124, 124);display:block;">
                                                                {{$item->company_name}}.
                                                            </a>
                                                            </td>
                                                            <td>{{$item->marchant_name}}</td>
                                                            <td style="display: flex;">
                                                                <span class="badge text-bg-info me-2">Swift funding</span>
                                                                <span class="badge text-bg-warning me-2">Landini Funding.t</span>
                                                                <span class="badge text-bg-info me-2">Swift funding.approved car parking</span>
                                                            
                                                            </td>
                                                            <td>{{$item->phone_number}}</td>
                                                            <td>{{$item->email}}</td>
                                                            <td>{{$item->sale_rep}}</td>
                                                            <td>{{$item->date_submitted}}</td>
                                                           <td>
                                                                <button  type="button" class="btn btn-danger delete_deal" data-id="{{$item->id}}">delete</button>
                                                                <button type="button"  class="btn btn-info edit_deal">Edit</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                 
                                               @if ($coldoffer->count()>0)
                                                    <td colspan="8">
                                                    <a  data-bs-toggle="collapse" class="collapse-link" href="#coldoffer" role="button" aria-expanded="false" aria-controls="coldoffer">
                                                      Cold offer({{$coldoffer->count()}})  
                                                    </a>
                                                    </td>
                                                    @foreach ($coldoffer as $item)
                                                        <tr class="collapse" id="coldoffer">
                                                    
                                                            <td>
                                                                <a href="/show_deal/{{$item->id}}" style="text-decoration: none;cursor:pointer;color:rgb(129, 124, 124);display:block;">
                                                                {{$item->company_name}}.
                                                            </a>
                                                            </td>
                                                            <td>{{$item->marchant_name}}</td>
                                                            <td style="display: flex;">
                                                                <span class="badge text-bg-info me-2">Swift funding</span>
                                                                <span class="badge text-bg-warning me-2">Landini Funding.t</span>
                                                                <span class="badge text-bg-info me-2">Swift funding.approved car parking</span>
                                                            
                                                            </td>
                                                            <td>{{$item->phone_number}}</td>
                                                            <td>{{$item->email}}</td>
                                                            <td>{{$item->sale_rep}}</td>
                                                            <td>{{$item->date_submitted}}</td>
                                                            <td>
                                                                <button  type="button" class="btn btn-danger delete_deal" data-id="{{$item->id}}">delete</button>
                                                                <button type="button"  class="btn btn-info edit_deal">Edit</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                               
                                               @if ($approved->count()>0)
                                                    <td colspan="8">
                                                    <a  data-bs-toggle="collapse" class="collapse-link" href="#approved" role="button" aria-expanded="false" aria-controls="approved">
                                                      Approved({{$approved->count()}})  
                                                    </a>
                                                    </td>
                                                    @foreach ($approved as $item)
                                                        <tr class="collapse" id="approved">
                                                    
                                                            <td>
                                                                <a href="/show_deal/{{$item->id}}" style="text-decoration: none;cursor:pointer;color:rgb(129, 124, 124);display:block;">
                                                                {{$item->company_name}}.
                                                            </a>
                                                            </td>
                                                            <td>{{$item->marchant_name}}</td>
                                                            <td style="display: flex;">
                                                                <span class="badge text-bg-info me-2">Swift funding</span>
                                                                <span class="badge text-bg-warning me-2">Landini Funding.t</span>
                                                                <span class="badge text-bg-info me-2">Swift funding.approved car parking</span>
                                                            
                                                            </td>
                                                            <td>{{$item->phone_number}}</td>
                                                            <td>{{$item->email}}</td>
                                                            <td>{{$item->sale_rep}}</td>
                                                            <td>{{$item->date_submitted}}</td>
                                                           <td>            
                                                                <button  type="button" class="btn btn-danger delete_deal" data-id="{{$item->id}}">delete</button>
                                                                <button type="button"  class="btn btn-info edit_deal">Edit</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                               
                                            </tr>
                                           
                                           
                                        </tbody>
                                </table>
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
})
      </script>
  @endif
</body>
@endsection
 <!-- add deal Modal -->
  @include('partials.deal_modal')
  @include('partials.edit_deal')
{{-- assign  lender modal --}}

@include('partials.assign_lender')


