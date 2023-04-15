$(document).ready(function () {

    // Split(['#one', '#two', '#three', '#four'], {
    //     sizes: [24, 23, 24, 24],

    //     gutterSize: 5,
    //     expandToMin: true,
    //     cursor: 'col-resize',
    // })


    $('.sub-btn').click(function () {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
    });
    $('#toggle-sidebar').click(function () {

        $('#left_sidebar').toggleClass('open');
        $('#main_container').toggleClass('act');
    });
    // Update lender information
    $('.edit_lender').click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $(this).attr('data-id');
        $.ajax({
            type: 'GET',
            url: 'lender/edit/' + id,
            success: function (result) {
                //alert(result.phone);
                $('#lender_id').val(result.id);
                $('#company_name1').val(result.company_name);
                $('#primary_contact1').val(result.primary_contact);
                $('#email1').val(result.email);
                $('#email12').val(result.email2);
                $('#phone1').val(result.phone);
                $('#code1').val(result.code);
                $('#last_contacted1').val(result.last_contacted);
                $('#position1').val(result.position);
                $('#edit_lender').modal('show');

            }
        });
        $('#lender_save').click(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            var formadata = {
                id: $('#lender_id').val(),
                company_name: $('#company_name1').val(),
                primary_contact: $('#primary_contact1').val(),
                email: $('#email1').val(),
                email2: $('#email12').val(),
                phone: $('#phone1').val(),
                code: $('#code1').val(),
                last_contacted: $('#last_contacted1').val(),
                position: $('#position1').val(),
            };
            $.ajax({
                type: 'PUT',
                url: 'lender/update',
                data: formadata,
                success: function (result) {

                    Swal.fire(
                        'Updated!',
                        'Lender has been Updated.',
                        'success'
                    );
                    location.reload();
                }
            });


        })
    });
    // Update Employee Info
    $('.edit_employee').click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $(this).attr('data-id');

        $.ajax({
            type: 'GET',
            url: 'employee/edit/' + id,
            success: function (result) {

                $('#employee_id').val(result.user.id);
                $('#name1').val(result.user.name);
                $('#email1').val(result.user.email);
                $('#phone1').val(result.user.phone);
                $('#emp_select').val(result.role_id);
                $('#emp_select').text(result.role_id);
                $('#role_id1', 'selected').val(result.role_id);
                $('#status1').val(result.user.status);
                $('#edit_employee').modal('show');

            }
        });
        $('#save_employee').click(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            var formadata = {
                id: $('#employee_id').val(),
                name: $('#name1').val(),

                email: $('#email1').val(),

                phone: $('#phone1').val(),
                role_id: $('#role_id1').val(),
                status: $('#status1').val(),

            };

            $.ajax({
                type: 'PUT',
                url: 'employee/update',
                data: formadata,
                success: function (result) {

                    Swal.fire(
                        'Updated!',
                        'Employee has been Updated.',
                        'success'
                    );
                    location.reload();
                }
            });


        })
    });
    //Update Deal
    $('.edit_deal').click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $(this).attr('data-id');

        $.ajax({
            type: 'GET',
            url: 'deal/edit/' + id,
            success: function (result) {
                alert(result);
                $('#deal_id').val(result.id);
                $('#sale_rep1').val(result.sale_rep);
                $('#sale_rep21').val(result.sale_rep2);
                $('#company_name1').val(result.company_name);
                $('#marchant_name1').val(result.marchant_name);
                $('#email1').val(result.email);
                $('#phone_number1').val(result.phone_number);
                $('#requested_amount1').val(result.request_amount);
                $('#date_submitted1').val(result.date_submitted);
                $('#last_contacted1').val(result.last_contacted);
                $('#lender_notes').val(result.lender_notes);

                $('#edit_deal').modal('show');

            }
        });
        $('#save_deal').click(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            var formadata = {
                id: $('#deal_id').val(),
                sale_rep: $('#sale_rep1').val(),
                sale_rep2: $('#sale_rep21').val(),
                email: $('#email1').val(),
                phone_number: $('#phone_number1').val(),
                marchant_name: $('#marchant_name1').val(),
                company_name: $('#company_name1').val(),
                request_amount: $('#requested_amount1').val(),
                status: $('#status1').val(),
                lender_notes: $('#lender_notes').val(),
                date_submitted: $('#date_submitted1').val(),
                last_contacted: $('#last_contacted1').val()

            };

            $.ajax({
                type: 'PUT',
                url: 'deal/update',
                data: formadata,
                success: function (result) {

                    Swal.fire(
                        'Updated!',
                        'Deal has been Updated.',
                        'success'
                    );
                    location.reload();
                }
            });


        })
    });
    // Delete Lender
    $('.delete_lender').click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $(this).attr('data-id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'DELETE',
                    url: 'lender/delete',
                    data: { id: id },
                    success: function (result) {
                        if (result == 'success') {

                            Swal.fire(
                                'Deleted!',
                                'Lender has been deleted.',
                                'success'
                            );
                            location.reload();
                        } else {
                            Swal.fire(
                                'Whoops!',
                                'Something Went Wrong.',
                                'warning'
                            );
                        }

                    }

                });

            }
        })
    });
    // Delete Employee
    $('.delete_employee').click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $(this).attr('data-id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'DELETE',
                    url: 'employee/delete',
                    data: { id: id },
                    success: function (result) {
                        if (result == 'success') {

                            Swal.fire(
                                'Deleted!',
                                'Employee has been deleted.',
                                'success'
                            );
                            location.reload();
                        } else {
                            Swal.fire(
                                'Whoops!',
                                'Something Went Wrong.',
                                'warning'
                            );
                        }

                    }

                });

            }
        })
    });
    //Delete Deal
    $('.delete_deal').click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $(this).attr('data-id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'DELETE',
                    url: 'deal/delete',
                    data: { id: id },
                    success: function (result) {
                        if (result == 'success') {

                            Swal.fire(
                                'Deleted!',
                                'Deal has been deleted.',
                                'success'
                            );
                            location.reload();
                        } else {
                            Swal.fire(
                                'Whoops!',
                                'Something Went Wrong.',
                                'warning'
                            );
                        }

                    }

                });

            }
        })
    });

});