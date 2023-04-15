<div class="modal fade" id="offerModal" tabindex="-1" aria-labelledby="offerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5 text-muted" id="offerModal">Update/Accept Offer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row mb-1">
                        <label for="loan_number" class="col-sm-4 col-form-label">Loan Number:</label>
                        <div class="col-sm-8">
                            <input type="text" value="9079" class="form-control-plaintext" id="loan_number">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="status" class="col-sm-4 col-form-label">Status:</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="status" id="status">
                                <option selected>Pending</option>
                                <option value="approved">Approved</option>
                                <option value="declined">Decline</option>
                            </select>
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="amount_funded" class="col-sm-4 col-form-label">Amount Funded:</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" name="amount_funded" value="">
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="rate" class="col-sm-4 col-form-label">Rate:</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" name="rate" value="">
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="total_amount" class="col-sm-4 col-form-label">Total Amount:</label>
                        <div class="col-sm-8">
                            <input type="text" value="-" class="form-control-plaintext" id="total_amount">
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="payment_frequency" class="col-sm-4 col-form-label">Payment Frequency:</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="payment_frequency" id="payment_frequency">
                                <option selected>Select</option>
                                <option value="approved">Approved</option>
                                <option value="declined">Decline</option>
                            </select>
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="day_of_week" class="col-sm-4 col-form-label">Day Of Week:</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="day_of_week" id="day_of_week">
                                <option selected>Select</option>
                                <option value="approved">Approved</option>
                                <option value="declined">Decline</option>
                            </select>
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="payments" class="col-sm-4 col-form-label"># Payments:</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" name="payments" value="">
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="date_funded" class="col-sm-4 col-form-label">Date Funded:</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" name="date_funded" value="">
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="notes" class="col-sm-4 col-form-label">Notes/Terms:</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" name="notes" value="">
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="history" class="col-sm-4 col-form-label">History:</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" name="history" value="">
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="total_commision" class="col-sm-4 col-form-label">Total Commision:</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" name="total_commision" value="">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="sale_rep" class="col-sm-4 col-form-label">Sales Rep:</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="sale_rep" id="sale_rep">
                                <option selected>Mockey</option>
                                <option value="approved">Jockiye</option>
                                <option value="declined">Jony</option>
                            </select>
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="commision_rep1" class="col-sm-4 col-form-label">Commision Rep1:</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" name="commision_rep1" value="">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="sale_rep2" class="col-sm-4 col-form-label">Sales Rep2:</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="sale_rep2" id="sale_rep2">
                                <option value="approved">Jockiye</option>
                                <option value="declined">Jony</option>
                            </select>
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="commision_office" class="col-sm-4 col-form-label">Commision Office:</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" name="commision_office" value="">
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="total_bonus" class="col-sm-4 col-form-label">Total Bonus:</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" name="total_bonus" value="">
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="bonus_rep1" class="col-sm-4 col-form-label">Bonus Rep1:</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" name="bonus_rep1" value="">
                        </div>
                    </div>
                     <div class="row mb-1">
                        <label for="bonus_office" class="col-sm-4 col-form-label">Bonus Office:</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" name="bonus_office" value="">
                        </div>
                    </div>
                   
                   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn submit_button" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn submit_button">Process Loan</button>
            </div>
        </div>
    </div>
</div>