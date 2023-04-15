<div class="modal fade" id="add_employee" tabindex="-1" aria-labelledby="add_employee" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="add_employee">Add Employee</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('add_employee') }}">
                    @csrf

                    <div class="row mb-2">
                        <label for="name" class="col-sm-2 col-form-label"> Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="name"
                                value="{{old('name')}}" id="name">
                        </div>
                        @error('name')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row mb-2">
                        <label for="phone" class="col-sm-2 col-form-label">Phone </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="phone"
                                value="{{old('phone')}}" id="phone">
                        </div>
                        @error('phone')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row mb-2">
                        <label for="email" class="col-sm-2 col-form-label">Email Address </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-sm" name="email"
                                value="{{old('email')}}" id="email">
                        </div>
                        @error('email')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                   <div class="row mb-2">
                        <label for="role" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select-sm" name="role_id" id="role_id">
                                <option selected>Select</option>
                                <option value="Sale_Rep">Sale Rep</option>
                                <option value="Processor">Processor</option>
                                
                               
                            </select>
                        </div>
                        @error('role_id')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                  



            </div>
            <div class="modal-footer">

                <button type="submit" class="btn submit_button">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>