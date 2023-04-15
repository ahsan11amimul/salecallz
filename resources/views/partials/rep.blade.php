<div class="col-sm-12">
    <h6 class="text-info">SELECTD LENDER REP: {{ $deal->sale_rep }}</h6>

    <div class="d-flex justify-content-between align-items-center">

        <div>
            <button style="box-shadow: -5px 0px rgb(0, 174, 255);" type="button" class="btn custom-btn">
                <i class='fas fa-bars'></i>
                Group By
            </button>
        </div>
        <div>
            <button style="box-shadow: -5px 0px rgb(255, 0, 0);" type="button" class="btn custom-btn ms-3">
                <i class='fas fa-plus'></i>
                New Position
            </button>
        </div>



    </div>
</div>



{{-- <div class="col-sm-6">
                 <p>
                     <span class="text-muted fw-semibold" role="button" data-bs-toggle="modal"
                         data-bs-target="#exampleModal2">Collapse All |</span>
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
             </div>
          --}}
<div class="col-sm-12 mt-2">
    <table class="table table-striped">
        <thead>
            <tr>

                <th scope="col">#</th>
                <th scope="col">Lender Name</th>
                <th scope="col">Date Sent</th>
                <th scope="col">Status</th>
                <th scope="col">Funded Amount</th>
                <th scope="col">Notes</th>
                <th scope="col">Edit</th>


            </tr>

        </thead>
        <tbody>

            <tr class="collapse-container">
                <td colspan="7">
                    <a data-bs-toggle="collapse" class="collapse-link" href="#coldoffer" role="button"
                        aria-expanded="false" aria-controls="coldoffer">

                        <i class="fas fa-caret-down"></i>
                        Selected Lenders ({{ $deal->lenders()->count() }})
                    </a>

                </td>
                @foreach ($deal->lenders as $item)
            <tr class="collapse" id="coldoffer">
                <td>
                    <input type="checkbox">
                </td>
                <td>{{ $item->primary_contact }}</td>
                <td>
                    <input type="text" class="form-control form-control-sm" name=""
                        value="{{ date('Y/m/d') }}" id="">
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
                    <a href="#"
                        style="text-decoration: none;cursor:pointer;color:rgb(129, 124, 124);display:block;"
                        role="button" data-bs-toggle="modal" data-bs-target="#offerModal" class="">
                        Accept
                    </a>
                </td>

            </tr>
            @endforeach



            </tr>
            <tr></tr>
            <tr>
                <td colspan="7">Attacments</td>
            </tr>
            <tr>
                <td colspan="7">
                    <div class="row">
                        @foreach (App\Models\DealFiles::where('deal_id', $deal->id)->get() as $item)
                            <div class="col-sm-4">
                                <div class="d-flex gap-2">
                                    <div>
                                        <i class="fas fa-file-pdf text-danger fa-lg"></i>
                                    </div>
                                    <div>
                                        <a href="{{ asset('files/' . $item->files) }}">
                                            {{ $item->files }}
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </td>
            </tr>

        </tbody>
    </table>
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
