@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="container-fluid g-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet">
                        <div class="widget10 widget10-vertical-lg text-center">
                            <div class="widget10-item justify-content-center">
                                <div class="widget10-content">
                                    <h2 class="widget10-title">3,000</h2>
                                    <span class="widget10-subtitle">All numbers</span>
                                </div>
                            </div>
                            <div class="widget10-item">
                                <div class="widget10-content">
                                    <h2 class="widget10-title">2,827</h2>
                                    <span class="widget10-subtitle">Not used numbers</span>
                                </div>
                            </div>
                            <div class="widget10-item">
                                <div class="widget10-content">
                                    <h2 class="widget10-title">1,147</h2>
                                    <span class="widget10-subtitle">Blacklist numbers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="portlet">
                        <div class="portlet-header portlet-header-bordered">
                            <h3 class="portlet-title">Need to add new number</h3>
                        </div>
                        <div class="portlet-body">
                            <div class="d-grid gap-3">
                                <div class="row align-items-end">
                                    <div class="col-md-5">
                                        <div>
                                            <label for="basic-url" class="form-label">Add number</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon3"><i
                                                        class="fa-solid fa-phone"></i></span>
                                                <input type="text" class="form-control" id="basic-url"
                                                       placeholder="press number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div>
                                            <label for="basic-url" class="form-label">Add name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="basic-url"
                                                       placeholder="press name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                </div>
                                <hr>
                                <p>
                                    You can upload an <code>excel</code> file that will contain two columns,
                                    <code>number</code> and <code>name</code>. After you select the file, click <code>Save</code>.
                                </p>
                                <div class="row">
                                    <div class="col-md-8">
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-success">Save</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="portlet">
                        <div class="portlet-header portlet-header-bordered">
                            <h3 class="portlet-title">IVR Recordings</h3>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-grid gap-3">
                                        <div>
                                            <label for="exampleFormControlInput1" class="form-label">Upload ame</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                   placeholder="Upload name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-grid gap-3">
                                        <div><label for="formFile" class="form-label">Select file</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-footer portlet-footer-bordered">
                            <button class="btn btn-success">Add</button>

                        </div>
                    </div>
                    <div class="portlet">
                        <div class="portlet-header portlet-header-bordered">
                            <h3 class="portlet-title">Need to change outbound number</h3>
                        </div>
                        <div class="portlet-body">
                            <div class="d-grid gap-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput1" class="form-label">Select Numbers</label>
                                        <select class="form-select">
                                            <option selected="selected">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput1" class="form-label">New phone number</label>
                                        <select class="form-select">
                                            <option selected="selected">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-footer portlet-footer-bordered">
                            <button class="btn btn-success">Save</button>
                        </div>
                    </div>
                    <div class="portlet">
                        <div class="portlet-header portlet-header-bordered">
                            <h3 class="portlet-title">White list ip</h3></div>
                        <div class="portlet-body">
                            <div class="d-grid gap-3">
                                <div class="row align-items-end">
                                    <div class="col-md-5">
                                        <label for="exampleFormControlInput1" class="form-label">Press new ip</label>
                                        <input type="text" class="form-control" id="inputmask-6" inputmode="text">
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-success">Add</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleFormControlInput1" class="form-label">Choose ip</label>
                                        <div class="" data-select2-id="137">
                                            <div class="mb-2">
                                                <select id="select2-3" multiple="" data-select2-id="select2-3" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                    <option value="someValue" data-select2-id="1" selected>192.168.0.1</option>
                                                    <option value="someValue" data-select2-id="2" selected>10.0.0.2</option>
                                                    <option value="someValue" data-select2-id="3" selected>172.16.0.3</option>
                                                    <option value="someValue" data-select2-id="4" >192.0.2.4</option>
                                                    <option value="someValue" data-select2-id="5" selected>203.0.113.5</option>
                                                    <option value="someValue" data-select2-id="6" selected>198.51.100.6</option>
                                                    <option value="someValue" data-select2-id="7" >172.31.255.7</option>
                                                    <option value="someValue" data-select2-id="8" >100.64.0.8</option>
                                                    <option value="someValue" data-select2-id="9" selected>169.254.0.9</option>
                                                    <option value="someValue" data-select2-id="10">172.20.10.10</option>
                                                </select>
                                            </div>
                                            <p class="mb-0">Select <code>multiple</code> ip address. To remove click <code><i class="fa-solid fa-xmark"></i></code> </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="portlet">
                        <div class="portlet-header portlet-header-bordered">
                            <h3 class="portlet-title">Follow</h3></div>
                        <div class="portlet-body">
                            fwefwefwe
                        </div>
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="portlet">
                        <div class="portlet-header portlet-header-bordered">
                            <h3 class="portlet-title">Incoming call</h3>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-select">
                                        <option selected="selected">Select from list</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select">
                                        <option selected="selected">Select fax/IVR</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <select class="form-select">
                                        <option selected="selected">Select IVR Records</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select">
                                        <option selected="selected">Select failover Destination</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <p>Select the operators from the <code>right</code> side, and drag and drop to the
                                    <code>left</code> side.</p>
                                <div class="col-md-6">
                                    <div class="portlet">
                                        <div class="portlet-header">
                                            <h3 class="portlet-title">Inside</h3>
                                        </div>
                                        <div class="portlet-body">
                                            <p class="mb-0">drag and drop</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="portlet">
                                        <div class="portlet-header">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <h3 class="portlet-title">Outside</h3>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="Search" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <p class="mb-0">
                                            <div class="portlet-body">
                                                <p>Add drag and drop</p>
                                                <div class="grid-nav grid-nav-bordered">
                                                    <div class="grid-nav-row row">
                                                        <div class="grid-nav-item bg-light p-4  rounded">
                                                            <h5>faxuri3</h5>
                                                        </div>
                                                        <div class="grid-nav-item  p-4  bg-light rounded">
                                                            <h5>אברהם יורקביץ</h5>
                                                        </div>
                                                        <div class="grid-nav-item  p-4  bg-light rounded">
                                                            <h5>Profile</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid-nav grid-nav-bordered">
                                                    <div class="grid-nav-row row">
                                                        <div class="grid-nav-item  p-4  bg-light rounded">
                                                            <h5>Profile</h5>
                                                        </div>
                                                        <div class="grid-nav-item  p-4  bg-light rounded">
                                                            <h5>Profile</h5>
                                                        </div>
                                                        <div class="grid-nav-item  p-4  bg-light rounded">
                                                            <h5>Profile</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-footer portlet-footer-bordered text-end">
                            <button class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
