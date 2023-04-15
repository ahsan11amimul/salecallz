<div class="modal fade" id="add_lender" tabindex="-1" aria-labelledby="add_lender" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="add_lender">Add Lender</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('add_lender') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-2">
                        <label for="company_name" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="company_name"
                                value="{{ old('company_name') }}" id="company_name">
                        </div>
                        @error('company_name')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row mb-2">
                        <label for="primary_contact" class="col-sm-2 col-form-label">Primary Contact</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="primary_contact"
                                value="{{ old('primary_contact') }}" id="primary_contact">
                        </div>
                        @error('primary_contact')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="row mb-2">
                        <label for="phone" class="col-sm-2 col-form-label">Phone </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="phone"
                                value="{{ old('phone') }}" id="phone">
                        </div>
                        @error('phone')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row mb-2">
                        <label for="email" class="col-sm-2 col-form-label">Email Address 1</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-sm" name="email"
                                value="{{ old('email') }}" id="email">
                        </div>
                        @error('email')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row mb-2">
                        <label for="email2" class="col-sm-2 col-form-label">Email Address 2</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-sm" name="email2"
                                value="{{ old('email2') }}" id="email2">
                        </div>
                        @error('email2')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row mb-2">
                        <label for="code" class="col-sm-2 col-form-label">Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="code"
                                value="{{ old('code') }}" id="code">
                        </div>
                        @error('code')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row mb-2">
                        <label for="last_contacted" class="col-sm-2 col-form-label">Last Contacted</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control form-control-sm" name="last_contacted"
                                value="{{ old('last_contacted') }}" id="last_contacted">
                        </div>
                        @error('last_contacted')
                            <p class="text-danger fw-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                   
                    <div class="row mb-2">
                        <label for="position" class="col-sm-2 col-form-label">Position</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select-sm" name="position" id="position">
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

                <button type="submit" class="btn submit_button">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>