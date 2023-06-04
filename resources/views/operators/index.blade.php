@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="container-fluid g-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet">
                        <div class="portlet-header portlet-header-bordered"><h3 class="portlet-title">Operators</h3>
                        </div>
                        <div class="portlet-body">
                            <div class="row mb-3 align-items-end">
                                <div class="col-md-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">
                                        <strong>Search</strong>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-success addOperator">Add operator <i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-success addExistOperator">Add Exist <i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Extension</th>
                                    <th>Queue Out</th>
                                    <th>Queue In</th>
                                    <th>Outbound CID</th>
                                    <th>Email</th>
                                    <th>Permissions</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">tahel</th>
                                    <td>tahel</td>
                                    <td>charcon-220</td>
                                    <td>charcon-220</td>
                                    <td>
                                        <p>2000102916140</p>
                                        <p>91313</p>

                                    </td>
                                    <td>0543999285</td>
                                    <td>efrosvictor424@gmail.com</td>
                                    <td>Fax, SMS, Projects</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                        </div>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createOperatorModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title">Create operator </h5>
                    <button type="button" class="btn btn-label-danger btn-icon" data-bs-dismiss="modal"><i
                            class="fa fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="portlet-body">
                        <div class="d-grid gap-3">
                            <div class="row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Username:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <input type="text" class="form-control" placeholder="User name">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Name:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Extension:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <select class="form-select">
                                        <option>Select Extension</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Chose numbers:</label>
                                <div class="col-sm-5 col-lg-4">
                                    <select class="form-select">
                                        <option>Chose numbers</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-sm-5 col-lg-5">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckChecked" checked="checked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Create inbound
                                            route</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Email:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Password:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Mobile:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <input type="text" class="form-control" placeholder="Mobile">
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Type:</label>
                                <div class="col-sm-5 col-lg-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                               id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">External</label>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-lg-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                               id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">Internal</label>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-lg-2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">GSM</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Allow Fax:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckChecked">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Allow WhatsApp:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckChecked">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Allow Projects:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckChecked">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Send to Harbituah:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckChecked">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Send to Space:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckChecked">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Star color:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <input type="color" class="form-control form-control-color" id="exampleColorInput"
                                           value="#563d7c" title="Choose your color" colorpick-eyedropper-active="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success">Create</button>
                    <button class="btn btn-outline-danger">Reset</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createExistOperatorModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title">Create exist operator </h5>
                    <button type="button" class="btn btn-label-danger btn-icon" data-bs-dismiss="modal"><i
                            class="fa fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="portlet-body">
                        <div class="d-grid gap-3">
                            <div class="row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Username:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <input type="text" class="form-control" placeholder="User name">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Name:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Extension:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <select class="form-select">
                                        <option>Select Extension</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Queue out:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <select class="form-select">
                                        <option>Chose numbers</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Password:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Email:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Mobile:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <input type="text" class="form-control" placeholder="Mobile">
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Allow Fax:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckChecked">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Allow WhatsApp:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckChecked">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Allow Projects:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckChecked">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Send to Harbituah:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckChecked">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <label class="col-sm-4 col-lg-3 col-form-label text-sm-end">Send to Space:</label>
                                <div class="col-sm-5 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckChecked">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success">Create</button>
                    <button class="btn btn-outline-danger">Reset</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const createOperatorModal = new bootstrap.Modal('#createOperatorModal', {
                keyboard: false
            });

            const createExistOperatorModal = new bootstrap.Modal('#createExistOperatorModal', {
                keyboard: false
            });

            $('.addOperator').on('click', () => {
                createOperatorModal.show();
            });

            $('.addExistOperator').on('click', () => {
                createExistOperatorModal.show();
            });
        }, false);
    </script>
@endsection
