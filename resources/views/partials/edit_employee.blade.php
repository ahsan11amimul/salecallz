<div class="modal fade" id="edit_employee" tabindex="-1" aria-labelledby="edit_employee" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="add_employee">Edit Employee</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="edit_form" name="edit_form" novalidate="">

                    <div class="row mb-2">
                        <label for="name" class="col-sm-2 col-form-label"> Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="name"
                                value="" id="name1">
                        </div>
                        @error('name')
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
                        <label for="email" class="col-sm-2 col-form-label">Email Address </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-sm" name="email"
                                value="" id="email1">
                        </div>
                        @error('email')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                   <div class="row mb-2">
                        <label for="position" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select-sm" name="role_id" id="role_id1">
                               <option value="" id="emp_select"></option>
                                <option value="Sale_Rep">Sale Rep</option>
                                <option value="Processor">Processor</option>
                                
                               
                            </select>
                        </div>
                        @error('role')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                     <div class="row mb-2">
                        <label for="status1" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select-sm" name="status" id="status1">
                                <option selected>Select</option>
                                <option value="Active">Active</option>
                                <option value="InActive">InActive</option>
                                
                               
                            </select>
                        </div>
                        @error('status')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>


            </div>
            <div class="modal-footer">
                 <input type="hidden" id="employee_id" name="id" value="0">
                <button  id="save_employee" class="btn submit_button">Save Changes</button>

                </form>
            </div>
        </div>
    </div>
</div>