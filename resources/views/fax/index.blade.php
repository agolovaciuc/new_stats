@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="container-fluid g-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="portlet">
                        <div class="portlet-header portlet-header-bordered">
                            <h3 class="portlet-title">Incoming Faxes</h3>
                        </div>
                        <div class="portlet-body">
                            <div class="row mb-4 align-items-end">
                                <div class="col-md-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">
                                        <strong>Start date</strong>
                                    </label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">
                                        <strong>End date</strong>
                                    </label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <div class="btn-group">
                                        <button class="btn btn-primary">Search <i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-danger">PDF <i class="fa-solid fa-download"></i></button>
                                        <button class="btn btn-success">EXCEL <i class="fa-solid fa-download"></i></button>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Operator</th>
                                    <th scope="col">Datetime</th>
                                    <th scope="col">Recipient</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Pages</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Data</td>
                                    <td>Data</td>
                                    <td>Data</td>
                                    <td>Data</td>
                                    <td>Data</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Data</td>
                                    <td>Data</td>
                                    <td>Data</td>
                                    <td>Data</td>
                                    <td>Data</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="d-grid gap-2">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="pagination.html#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="pagination.html#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="pagination.html#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="pagination.html#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="pagination.html#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet">
                        <div class="portlet-header portlet-header-bordered">
                            <h3 class="portlet-title">Outgoing Faxes</h3>
                        </div>
                        <div class="portlet-body">
                            <div class="row mb-4 align-items-end">
                                <div class="col-md-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">
                                        <strong>Start date</strong>
                                    </label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">
                                        <strong>End date</strong>
                                    </label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <div class="btn-group">
                                        <button class="btn btn-primary">Search <i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-danger">PDF <i class="fa-solid fa-download"></i></button>
                                        <button class="btn btn-success">EXCEL <i class="fa-solid fa-download"></i></button>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Operator</th>
                                    <th scope="col">Datetime</th>
                                    <th scope="col">Recipient</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Pages</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Data</td>
                                    <td>Data</td>
                                    <td>Data</td>
                                    <td>Data</td>
                                    <td>Data</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Data</td>
                                    <td>Data</td>
                                    <td>Data</td>
                                    <td>Data</td>
                                    <td>Data</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="d-grid gap-2">
                                <ul class="pagination justify-content-center">
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
@endsection
