@extends('layouts.app')
@section('title')
Selected Lender
@endsection
@section('content')

@include('partials.navbar')
<div class="wrapper">
    @include('partials.sidebar')
    <main class="main-container" id="main_container">
        <div class="container-fluid">
            <div class="row p-2">
                @include('partials.deal_tab')
                <div class="col-sm-8" style="border-right: 1px solid #ced4da; box-shadow: 2px 2px 2px #ced4da;">

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">
                                BORROWER & OPEN DEAL INFO
                            </button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">
                                SELECTED LENDERS - REP: {{ $deal->sale_rep }}
                            </button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false">
                                PREVIOUS LOANS
                            </button>
                            <button class="nav-link" id="nav-invoice-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-invoice" type="button" role="tab" aria-controls="nav-invoice"
                                aria-selected="false">
                                INVOICE
                            </button>

                        </div>
                    </nav>
                    <div class="tab-content p-2" id="nav-tabContent" style="background-color: #ffffff;">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab" tabindex="0">
                            @include('partials.lender_tab')

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                            tabindex="0">
                            @include('partials.rep_tab')
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                            tabindex="0">
                            @include('partials.loan_tab')
                        </div>
                        <div class="tab-pane fade" id="nav-invoice" role="tabpanel" aria-labelledby="nav-invoice-tab"
                            tabindex="0">
                            @include('partials.invoice_tab')
                        </div>

                    </div>
                </div>
            </div>
    </main>

</div>
