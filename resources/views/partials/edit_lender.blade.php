<div class="modal fade" id="edit_lender" tabindex="-1" aria-labelledby="edit_lender" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="edit_lender">Edit Lender</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="lender_edit" name="lender_edit"  novalidate="">
                    @csrf

                    <div class="row mb-2">
                        <label for="company_name" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="company_name"
                                id="company_name1">
                        </div>
                        @error('company_name')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row mb-2">
                        <label for="primary_contact" class="col-sm-2 col-form-label">Primary Contact</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="primary_contact"
                                value="" id="primary_contact1">
                        </div>
                        @error('primary_contact')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="row mb-2">
                        <label for="phone" class="col-sm-2 col-form-label">Phone </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="phone"
                                value="" id="phone1">
                        </div>
                        @error('phone')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row mb-2">
                        <label for="email" class="col-sm-2 col-form-label">Email Address 1</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-sm" name="email"
                                value="" id="email1">
                        </div>
                        @error('email')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row mb-2">
                        <label for="email2" class="col-sm-2 col-form-label">Email Address 2</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-sm" name="email2"
                                value="" id="email12">
                        </div>
                        @error('email2')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row mb-2">
                        <label for="code" class="col-sm-2 col-form-label">Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="code"
                                value="" id="code1">
                        </div>
                        @error('code')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row mb-2">
                        <label for="last_contacted" class="col-sm-2 col-form-label">Last Contacted</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control form-control-sm" name="last_contacted"
                                value="" id="last_contacted1">
                        </div>
                        @error('last_contacted')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                   
                    <div class="row mb-2">
                        <label for="position" class="col-sm-2 col-form-label">Position</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select-sm" name="position" id="position1">
                                <option selected>Select</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                               
                            </select>
                        </div>
                        @error('position')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>



            </div>
            <div class="modal-footer">
                <input type="hidden" id="lender_id" name="id" value="0">
                <button  id="lender_save" class="btn submit_button">Save Changes</button>

                </form>
            </div>
        </div>
    </div>
</div>