<div class="modal fade" id="assignModal" tabindex="-1" aria-labelledby="assignModal" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fs-5 text-muted" id="assignModal">Assign Lenders - Rep {{ $deal->sale_rep }}</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <button class="btn  w-100"
                            style="background-color: #e9ecef; box-shadow: -5px 0px rgb(0, 174, 255);">
                            Click a Lender To Assign/Unassign to This Loan
                        </button>
                        <div class="mt-2 mb-2">
                            <input type="text" name="" placeholder="filter by position"
                                class="form-control form-control-sm" id="">
                        </div>


                    </div>
                    <div class="col-sm-6">
                        <div>
                            Unassigned
                        </div>
                        {{-- <div class="mt-2 mb-2">
                            <input type="text" name="" placeholder="Type to filter"
                                class="form-control form-control-sm" id="">
                        </div> --}}
                        <form action="{{ url('assign_lender') }}" method="post">
                            @csrf
                            <input type="hidden" name="deal_id" value="{{ $deal->id }}">

                            @foreach ($lenders as $item)
                                <div class="mb-1 p-2 border d-flex align-items-center  border-light">
                                    <input type="checkbox" class="form-check-control me-3" name="lenders[]"
                                        id="{{ $item->id }}" value="{{ $item->id }}">
                                    <span>{{ $item->company_name }}, {{ $item->phone }}</span>
                                </div>
                            @endforeach


                    </div>
                    <div class="col-sm-6">
                        <div>
                            Assigned
                        </div>
                        {{-- <div class="mt-2 mb-2">
                            <input type="text" name="" placeholder="Type to filter"
                                class="form-control form-control-sm" id="">
                        </div> --}}
                        <div class="d-flex flex-column p-2 border border-light">
                            <div>
                                <span>Aquina:(123) 234123</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Last Contacted:01/10/2023</span>
                                <span class="badge text-bg-warning">Pending</span>
                            </div>
                        </div>
                        <div class="d-flex flex-column p-2 border border-light">
                            <div>
                                <span>Bob Jenkin:(123) 234123</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Last Contacted:01/10/2023</span>
                                <span class="badge text-bg-warning">Pending</span>
                            </div>
                        </div>
                        <div class="d-flex flex-column p-2 border border-light">
                            <div>
                                <span>Henry.L:(123) 234123</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Last Contacted:01/10/2023</span>
                                <span class="badge text-bg-warning">Pending</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn submit_button" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn submit_button">Process Loan</button>
            </div>
            </form>
        </div>
    </div>
</div>
