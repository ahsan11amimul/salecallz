@extends('layouts.app')
@section('title')
Employee
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
                                <h5 class="text-info">USER DASHBOARD</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    @can('user.create')
                                        <button style="box-shadow: -9px 0px rgb(0, 174, 255);" type="button"
                                        class="btn custom-btn" data-bs-toggle="modal"
                                        data-bs-target="#add_employee">
                                        <i class='fas fa-plus'></i>
                                        Add User
                                    </button> 
                                    @endcan
                                   
                                </div>
                                <div class="ms-2">
                                    <span>
                                        <i class='bx bx-cog'></i>
                                    </span>
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
                                    <div class="col-sm-6">
                                        <div class="border border-light w-100 d-flex flex-column p-2">
                                            <div>
                                                <h5 class="text-muted">Active Employees</h5>
                                            </div>
                                            <div>
                                                <div class="d-flex justify-content-start gap-5 align-items-center">
                                                    <div
                                                        style="width:60px;height:60px;background-color:rgb(97, 226, 226);position: relative;">
                                                        <i class='fas fa-user fa-lg'
                                                            style="color: white; position: absolute; top: 31%; left: 31%;"></i>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="text-muted fw-semibold">Sales Reps</span>
                                                        <span class="text-muted fw-semibold">{{$active_rep->count()}}</span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="text-muted fw-semibold">Processor</span>
                                                        <span class="text-muted fw-semibold">{{$active_processor->count()}}</span>
                                                    </div>

                                                    <div class="d-flex flex-column">
                                                        <span class="text-muted fw-semibold">All</span>
                                                        <span class="text-muted fw-semibold">{{$active->count()}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="border border-light w-100 d-flex flex-column p-2">
                                            <div>
                                                <h5 class="text-muted">All - Active & Inactive</h5>
                                            </div>
                                            <div>
                                                <div class="d-flex justify-content-start gap-5 align-items-center">
                                                    <div
                                                        style="width:60px;height:60px;background-color:rgb(37, 43, 121);position: relative;">
                                                        <i class='fas fa-user fa-lg' style="color: white; position: absolute; top: 31%; left: 31%;"></i>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="text-muted fw-semibold">Sales Reps</span>
                                                        <span class="text-muted fw-semibold">{{$all_rep->count()}}</span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="text-muted fw-semibold">Processor</span>
                                                        <span class="text-muted fw-semibold">{{$all_processor->count()}}</span>
                                                    </div>

                                                    <div class="d-flex flex-column">
                                                        <span class="text-muted fw-semibold">All</span>
                                                        <span class="text-muted fw-semibold">{{$employees->count()}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-12">

                                    
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>

                                                <th scope="col">Name</th>
                                                <th scope="col">Email Address</th>
                                                <th scope="col">Phone Number</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                             <tr>
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
                                                <td colspan="6">
                                                    <a  data-bs-toggle="collapse" class="collapse-link" href="#coldoffer" role="button" aria-expanded="false" aria-controls="coldoffer">
                                                      Employees({{$employees->count()}})  
                                                    </a>
                                                  
                                                </td>

                                                 @foreach ($employees as $item)
                                                <tr class="collapse" id="coldoffer">
                                               
                                               
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->phone}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->status}}</td>
                                                <td>
                                                {{$item->roles->pluck('name')[0]??''}}
                                                {{-- @switch($item->role_id)
                                                    @case(1)
                                                        'Admin'
                                                        @break
                                                    @case(2)
                                                        'Sale Rep'
                                                        @break
                                                    @case(3)
                                                        'Lender'
                                                        @break
                                                    @case(4)
                                                        'Underwriter'
                                                        @break
                                                    @case(5)
                                                        'Manager'
                                                        @break
                                                    @case(6)
                                                        'Processor'
                                                        @break
                                                    @default
                                                       @break
                                                        
                                                @endswitch --}}
                                                </td>
                                                <td>
                                                    <a class="edit_employee" href="#" role="button" data-id="{{$item->id}}">
                                                        <i class="fas fa-edit fa-lg text-info"></i>
                                                    </a>
                                                    <a href="#" class="delete_employee" role="button" data-id="{{$item->id}}">
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
{{-- Add Employee --}}
@include('partials.employee_modal')
{{-- Edit Employee --}}
@include('partials.edit_employee')
