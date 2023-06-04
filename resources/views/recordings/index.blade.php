@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="container-fluid g-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="portlet">
                        <div class="portlet-header">
                            <h3 class="portlet-title">Basic</h3>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                        <label class="form-check-label" for="flexCheckChecked1">
                                            <h5 class="pe-auto">Internal</h5>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                        <label class="form-check-label" for="flexCheckChecked2">
                                            <h5>Phone Number</h5>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                        <label class="form-check-label" for="flexCheckChecked3">
                                            <h5>Date & time</h5>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                        <label class="form-check-label" for="flexCheckChecked4">
                                            <h5>Agent Name</h5>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
