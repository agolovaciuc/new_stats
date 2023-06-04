@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="container-fluid g-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="portlet">
                        <div class="portlet-header portlet-header-bordered"><h3 class="portlet-title">Leads</h3></div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <button class="btn btn-danger">PDF <i class="fa-solid fa-download"></i></button>
                                        <button class="btn btn-success">EXCEL <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04"
                                               aria-describedby="inputGroupFileAddon04"
                                               aria-label="Upload">
                                        <button class="btn btn-outline-success" type="button"
                                                id="inputGroupFileAddon04">
                                            Add Leads
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="text" placeholder="Search" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>Avatar</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>
                                        <div class="avatar avatar-label-light avatar-circle">
                                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                        </div>
                                    </th>
                                    <td>marishka Marishka</td>
                                    <td>0526098464</td>
                                    <td>super@example.com</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-warning editLeadBtn"><i class="fa-solid fa-pen"></i>
                                            </button>
                                        </div>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-danger deleteLeadBtn"><i
                                                    class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="avatar avatar-label-light avatar-circle">
                                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                        </div>
                                    </th>
                                    <td>marishka Marishka</td>
                                    <td>0526098464</td>
                                    <td>super@example.com</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-warning editLeadBtn"><i class="fa-solid fa-pen"></i>
                                            </button>
                                        </div>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-danger deleteLeadBtn"><i
                                                    class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="avatar avatar-label-light avatar-circle">
                                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                        </div>
                                    </th>
                                    <td>marishka Marishka</td>
                                    <td>0526098464</td>
                                    <td>super@example.com</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-warning editLeadBtn"><i class="fa-solid fa-pen"></i>
                                            </button>
                                        </div>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-danger deleteLeadBtn"><i
                                                    class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="avatar avatar-label-light avatar-circle">
                                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                        </div>
                                    </th>
                                    <td>marishka Marishka</td>
                                    <td>0526098464</td>
                                    <td>super@example.com</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-warning editLeadBtn"><i class="fa-solid fa-pen"></i>
                                            </button>
                                        </div>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-danger deleteLeadBtn"><i
                                                    class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="avatar avatar-label-light avatar-circle">
                                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                        </div>
                                    </th>
                                    <td>marishka Marishka</td>
                                    <td>0526098464</td>
                                    <td>super@example.com</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-warning editLeadBtn"><i class="fa-solid fa-pen"></i>
                                            </button>
                                        </div>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-danger deleteLeadBtn"><i
                                                    class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="d-grid gap-2 mt-3">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item"><a class="page-link" href="pagination.html#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="pagination.html#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="pagination.html#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="pagination.html#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="pagination.html#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portlet">
                        <div class="portlet-header portlet-header-bordered"><h3 class="portlet-title">Clients</h3></div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <button class="btn btn-danger">PDF <i class="fa-solid fa-download"></i></button>
                                        <button class="btn btn-success">EXCEL <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04"
                                               aria-describedby="inputGroupFileAddon04"
                                               aria-label="Upload">
                                        <button class="btn btn-outline-success" type="button"
                                                id="inputGroupFileAddon04">
                                            Add Clients
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="text" placeholder="Search" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>Avatar</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>
                                        <div class="avatar avatar-label-light avatar-circle">
                                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                        </div>
                                    </th>
                                    <td>marishka Marishka</td>
                                    <td>0526098464</td>
                                    <td>super@example.com</td>
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
                                <tr>
                                    <th>
                                        <div class="avatar avatar-label-light avatar-circle">
                                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                        </div>
                                    </th>
                                    <td>marishka Marishka</td>
                                    <td>0526098464</td>
                                    <td>super@example.com</td>
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
                                <tr>
                                    <th>
                                        <div class="avatar avatar-label-light avatar-circle">
                                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                        </div>
                                    </th>
                                    <td>marishka Marishka</td>
                                    <td>0526098464</td>
                                    <td>super@example.com</td>
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
                                <tr>
                                    <th>
                                        <div class="avatar avatar-label-light avatar-circle">
                                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                        </div>
                                    </th>
                                    <td>marishka Marishka</td>
                                    <td>0526098464</td>
                                    <td>super@example.com</td>
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
                                <tr>
                                    <th>
                                        <div class="avatar avatar-label-light avatar-circle">
                                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                        </div>
                                    </th>
                                    <td>marishka Marishka</td>
                                    <td>0526098464</td>
                                    <td>super@example.com</td>
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
                            <div class="d-grid gap-2 mt-3">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item"><a class="page-link" href="pagination.html#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="pagination.html#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="pagination.html#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="pagination.html#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="pagination.html#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-lg" id="leadDetalesModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title">Edit Lead </h5>
                    <div class="avatar avatar-label-light avatar-circle">
                        <div class="avatar-display"><i class="fa fa-user"></i></div>
                    </div>
                    <button type="button" class="btn btn-label-danger btn-icon" data-bs-dismiss="modal"><i
                            class="fa fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="portlet-body">
                        <div class="mb-3">
                            <div class="nav nav-pills" id="nav2-tab" role="tablist">
                                <a class="nav-item nav-link pe-auto active" data-bs-toggle="tab" href="#nav2-general"
                                   aria-selected="true" role="tab">General</a>
                                <a class="nav-item nav-link pe-auto" data-bs-toggle="tab" href="#family" aria-selected="false"
                                   tabindex="-1" role="tab">Family</a>
                                <a class="nav-item nav-link pe-auto" data-bs-toggle="tab" href="#tasks" aria-selected="false"
                                   tabindex="-1" role="tab">Tasks</a>
                                <a class="nav-item nav-link pe-auto" data-bs-toggle="tab" href="#docs" aria-selected="false"
                                   tabindex="-1" role="tab">Docs</a>
                                <a class="nav-item nav-link pe-auto" data-bs-toggle="tab" href="#history" aria-selected="false"
                                   tabindex="-1" role="tab">History</a>
                                <a class="nav-item nav-link pe-auto" data-bs-toggle="tab" href="#whatsapp" aria-selected="false"
                                   tabindex="-1" role="tab">WhatsApp</a>
                                <a class="nav-item nav-link pe-auto" data-bs-toggle="tab" href="#sms" aria-selected="false"
                                   tabindex="-1" role="tab">Sms</a>
                                <a class="nav-item nav-link pe-auto" data-bs-toggle="tab" href="#recordings"
                                   aria-selected="false" tabindex="-1" role="tab">Recordings</a>
                            </div>
                        </div>
                        <div class="tab-content" id="nav2-tabContent">
                            <div class="tab-pane fade show active" id="nav2-general" role="tabpanel">
                                <div class="portlet-body">
                                    <hr>
                                    <div class="d-grid gap-3">
                                        <div class="row">
                                            <label class="col-sm-4 col-lg-1 col-form-label text-sm-end">Name:</label>
                                            <div class="col-sm-5 col-lg-4">
                                                <input type="text" class="form-control" placeholder="Name Lead">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-4 col-lg-1 col-form-label text-sm-end">ID:</label>
                                            <div class="col-sm-5 col-lg-4">
                                                <input type="text" class="form-control" placeholder="ID">
                                            </div>
                                            <div class="col-sm-5 col-lg-2">
                                                <input type="text" class="form-control" placeholder="Created data">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-4 col-lg-1 col-form-label text-sm-end">Phone:</label>
                                            <div class="col-sm-5 col-lg-4">
                                                <input type="text" class="form-control" placeholder="Phone">
                                            </div>
                                            <div class="col-sm-5 col-lg-2">
                                                <input type="text" class="form-control" placeholder="Phone second">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-4 col-lg-1 col-form-label text-sm-end">Email:</label>
                                            <div class="col-sm-5 col-lg-4">
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-4 col-lg-1 col-form-label text-sm-end">Country:</label>
                                            <div class="col-sm-5 col-lg-4">
                                                <input type="text" class="form-control" placeholder="Country">
                                            </div>
                                            <div class="col-sm-5 col-lg-2">
                                                <input type="text" class="form-control" placeholder="Language">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-4 col-lg-1 col-form-label text-sm-end">City:</label>
                                            <div class="col-sm-5 col-lg-4">
                                                <input type="text" class="form-control" placeholder="City">
                                            </div>
                                            <div class="col-sm-5 col-lg-2">
                                                <input type="text" class="form-control" placeholder="Zip code">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-4 col-lg-1 col-form-label text-sm-end">Street:</label>
                                            <div class="col-sm-5 col-lg-4">
                                                <input type="text" class="form-control" placeholder="Street">
                                            </div>
                                            <div class="col-sm-5 col-lg-1">
                                                <input type="text" class="form-control" placeholder="H.">
                                            </div>
                                            <div class="col-sm-5 col-lg-1">
                                                <input type="text" class="form-control" placeholder="Ap.">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-4 col-lg-1 col-form-label text-sm-end">Fax:</label>
                                            <div class="col-sm-5 col-lg-4">
                                                <input type="text" class="form-control" placeholder="Fax">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-4 col-lg-1 col-form-label text-sm-end">Marital:</label>
                                            <div class="col-sm-5 col-lg-4">
                                                <input type="text" class="form-control" placeholder="Marital">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-4 col-lg-1 col-form-label text-sm-end">Birthday:</label>
                                            <div class="col-sm-5 col-lg-4">
                                                <input type="text" class="form-control" placeholder="Birthday">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="family" role="tabpanel">
                                <p class="mb-0">Family</p>
                            </div>
                            <div class="tab-pane fade" id="tasks" role="tabpanel">
                                <p class="mb-0">Tasks</p>
                            </div>
                            <div class="tab-pane fade" id="docs" role="tabpanel">
                                <p class="mb-0">Docs</p>
                            </div>
                            <div class="tab-pane fade" id="history" role="tabpanel">
                                <p class="mb-0">History</p>
                            </div>
                            <div class="tab-pane fade" id="whatsapp" role="tabpanel">
                                <p class="mb-0">WhatsApp</p>
                            </div>
                            <div class="tab-pane fade" id="sms" role="tabpanel">
                                <p class="mb-0">Sms</p>
                            </div>
                            <div class="tab-pane fade" id="recordings" role="tabpanel">
                                <p class="mb-0">Recordings</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Submit</button>
                    <button class="btn btn-outline-danger">Reset</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const leadDetalesModal = new bootstrap.Modal('#leadDetalesModal', {
                keyboard: false
            });

            $('.editLeadBtn').on('click', () => {
                leadDetalesModal.show();
            });
        }, false);
    </script>
@endsection


