@extends('layouts.app')
@section('title')
    Selected Lender
@endsection
@section('content')

    @include('partials.navbar')

    <div class="wrapper">
        @include('partials.sidebar')
        <main class="main-container" id="main_container">
            <div class="container-fluid pt-2">
                <div class="row w-100">
                    <div id="one">
                        @include('partials.deal')

                        @include('partials.deal_modal')
                    </div>
                    <div id="two">
                        @include('partials.lender')




                    </div>
                    <div id="three">
                        @include('partials.rep')


                    </div>
                    @include('partials.offer_modal')
                    @include('partials.assign_lender')




                </div>
                <div id="four">

                    @include('partials.loan')


                </div>




            </div>
    </div>
    @push('custom-scripts')
        <script type="text/javascript" src="{{ URL::asset('assets/js/custom-scripts.js') }}"></script>
    @endpush


    </main>

    </div>
