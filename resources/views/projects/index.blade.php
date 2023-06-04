@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="container-fluid g-5">
            <div class="row">
                <div class="col-md-7">
                    <div class="portlet portlet-scroll">
                        <div class="portlet-header portlet-header-bordered">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h3 class="portlet-title">Campaign</h3>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Search" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="rich-list">
                                <div class="rich-list-item">
                                    <div class="rich-list-content">
                                        <table class="table mb-0 align-items-center">
                                            <thead>
                                            <tr class="table-primary">
                                                <th>Created</th>
                                                <th>Name</th>
                                                <th>Total</th>
                                                <th>Remaining</th>
                                                <th>Finished</th>
                                                <th>Concurrent calls</th>
                                                <th>Lead group</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th>2023-03-06 11:15</th>
                                                <td>This is new campaing</td>
                                                <td>9</td>
                                                <td>-9</td>
                                                <td>18</td>
                                                <td>0</td>
                                                <td>Test</td>
                                                <td>Work</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="row mt-3">
                                            <div class="col-sm-3">
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Run Campaing</b>">
                                                        <i class="fa-solid fa-play"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Pause Campaing</b>">
                                                        <i class="fa-solid fa-pause"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm ms-3">
                                                    <button class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Overload the company</b>">
                                                        <i class="fa-solid fa-clock-rotate-left"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Remove company</b>">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm ms-4">
                                                    <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>DOWNLOAD EXCEL</b>" class="btn btn-success">
                                                        <i class="fa-solid fa-file-csv"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="rich-list-item">
                                    <div class="rich-list-content">
                                        <table class="table mb-0 align-items-center">
                                            <thead>
                                            <tr class="table-primary">
                                                <th>Created</th>
                                                <th>Name</th>
                                                <th>Total</th>
                                                <th>Remaining</th>
                                                <th>Finished</th>
                                                <th>Concurrent calls</th>
                                                <th>Lead group</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th>2023-03-06 11:15</th>
                                                <td>This is new campaing</td>
                                                <td>9</td>
                                                <td>-9</td>
                                                <td>18</td>
                                                <td>0</td>
                                                <td>Test</td>
                                                <td>Work</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="row mt-3">
                                            <div class="col-sm-3">
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Run Campaing</b>">
                                                        <i class="fa-solid fa-play"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Pause Campaing</b>">
                                                        <i class="fa-solid fa-pause"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm ms-3">
                                                    <button class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Overload the company</b>">
                                                        <i class="fa-solid fa-clock-rotate-left"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Remove company</b>">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm ms-4">
                                                    <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>DOWNLOAD EXCEL</b>" class="btn btn-success">
                                                        <i class="fa-solid fa-file-csv"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="rich-list-item">
                                    <div class="rich-list-content">
                                        <table class="table mb-0 align-items-center">
                                            <thead>
                                            <tr class="table-primary">
                                                <th>Created</th>
                                                <th>Name</th>
                                                <th>Total</th>
                                                <th>Remaining</th>
                                                <th>Finished</th>
                                                <th>Concurrent calls</th>
                                                <th>Lead group</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th>2023-03-06 11:15</th>
                                                <td>This is new campaing</td>
                                                <td>9</td>
                                                <td>-9</td>
                                                <td>18</td>
                                                <td>0</td>
                                                <td>Test</td>
                                                <td>Work</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="row mt-3">
                                            <div class="col-sm-3">
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Run Campaing</b>">
                                                        <i class="fa-solid fa-play"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Pause Campaing</b>">
                                                        <i class="fa-solid fa-pause"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm ms-3">
                                                    <button class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Overload the company</b>">
                                                        <i class="fa-solid fa-clock-rotate-left"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Remove company</b>">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm ms-4">
                                                    <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>DOWNLOAD EXCEL</b>" class="btn btn-success">
                                                        <i class="fa-solid fa-file-csv"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="rich-list-item">
                                    <div class="rich-list-content">
                                        <table class="table mb-0 align-items-center">
                                            <thead>
                                            <tr class="table-primary">
                                                <th>Created</th>
                                                <th>Name</th>
                                                <th>Total</th>
                                                <th>Remaining</th>
                                                <th>Finished</th>
                                                <th>Concurrent calls</th>
                                                <th>Lead group</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th>2023-03-06 11:15</th>
                                                <td>This is new campaing</td>
                                                <td>9</td>
                                                <td>-9</td>
                                                <td>18</td>
                                                <td>0</td>
                                                <td>Test</td>
                                                <td>Work</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="row mt-3">
                                            <div class="col-sm-3">
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Run Campaing</b>">
                                                        <i class="fa-solid fa-play"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Pause Campaing</b>">
                                                        <i class="fa-solid fa-pause"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm ms-3">
                                                    <button class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Overload the company</b>">
                                                        <i class="fa-solid fa-clock-rotate-left"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Remove company</b>">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm ms-4">
                                                    <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>DOWNLOAD EXCEL</b>" class="btn btn-success">
                                                        <i class="fa-solid fa-file-csv"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="rich-list-item">
                                    <div class="rich-list-content">
                                        <table class="table mb-0 align-items-center">
                                            <thead>
                                            <tr class="table-primary">
                                                <th>Created</th>
                                                <th>Name</th>
                                                <th>Total</th>
                                                <th>Remaining</th>
                                                <th>Finished</th>
                                                <th>Concurrent calls</th>
                                                <th>Lead group</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th>2023-03-06 11:15</th>
                                                <td>This is new campaing</td>
                                                <td>9</td>
                                                <td>-9</td>
                                                <td>18</td>
                                                <td>0</td>
                                                <td>Test</td>
                                                <td>Work</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="row mt-3">
                                            <div class="col-sm-3">
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Run Campaing</b>">
                                                        <i class="fa-solid fa-play"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Pause Campaing</b>">
                                                        <i class="fa-solid fa-pause"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm ms-3">
                                                    <button class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Overload the company</b>">
                                                        <i class="fa-solid fa-clock-rotate-left"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>Remove company</b>">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm ms-4">
                                                    <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="<b>DOWNLOAD EXCEL</b>" class="btn btn-success">
                                                        <i class="fa-solid fa-file-csv"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="portlet portlet-scroll">
                        <div class="portlet-header portlet-header-bordered">
                            <h3 class="portlet-title">Leads group</h3>
                            <div class="portlet-addon">
                                <button class="btn btn-success addLeadGroup">Add group</button>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table mb-0">
                                <thead>
                                <tr class="table-primary">
                                    <th>Name</th>
                                    <th>Priority</th>
                                    <th>Nr. Leads</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th>tium4 dasda</th>
                                    <td>2</td>
                                    <td>836</td>
                                    <td>
                                        <div class="btn-group mb-2 btn-group-sm">
                                            <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                        </div>
                                        <div class="btn-group mb-2 btn-group-sm">
                                            <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                        </div>
                                        <div class="btn-group mb-2 btn-group-sm">
                                            <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>tium4 dasda</th>
                                        <td>2</td>
                                        <td>836</td>
                                        <td>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 btn-group-sm">
                                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="portlet portlet-scroll">
                        <div class="portlet-header portlet-header-bordered">
                            <h3 class="portlet-title">Files</h3></div>
                        <div class="portlet-body">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="portlet-footer portlet-footer-bordered">
                            <button class="btn btn-primary">Submit</button>
                            <button class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="portlet portlet-scroll">
                        <div class="portlet-header portlet-header-bordered">
                            <h3 class="portlet-title">Hot Lead Groups</h3></div>
                        <div class="portlet-body">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="portlet-footer portlet-footer-bordered">
                            <button class="btn btn-primary">Submit</button>
                            <button class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addLeadGroupModal" style="display: none;" aria-hidden="true">
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
                        <div class="d-grid gap-3">
                            <div>
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name:">
                            </div>
                            <div>
                                <label for="exampleFormControlInput1" class="form-label">Documents:</label>
                                <select class="form-select">
                                    <option selected="selected">Select documents</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div>
                                <label for="exampleFormControlInput1" class="form-label">Priority:</label>
                                <select class="form-select">
                                    <option selected="selected">Select priority</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div>
                                <label for="exampleFormControlInput1" class="form-label">Clients</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Include clients</label>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <label for="exampleFormControlInput1" class="form-label">Add Field</label>
                                <button class="btn btn-success btn-icon text-center addTwoFields"><i class="fa fa-plus"></i></button>
                            </div>

                            <div class="d-grid gap-3">
                                <div class="rich-list additionalFieldsLeadsGroup">
                                    {{--ADD ELEMENTS DINAMI JS--}}
                                </div>
                            </div>
                            <div>
                                <p>Preview the data that will be entered into the <code>database</code>.</p>
                                <button class="btn btn-primary previewDocumentData">Show document data</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Create</button>
                    <button class="btn btn-outline-danger">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="previewDocumentDataModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Show document data </h5>
                    <div class="avatar avatar-label-light avatar-circle">
                        <div class="avatar-display"><i class="fa fa-user"></i></div>
                    </div>
                    <button type="button" class="btn btn-label-danger btn-icon" data-bs-dismiss="modal"><i
                            class="fa fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="portlet-body">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Head</th>
                                <th>Head</th>
                                <th>Head</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Data</td>
                                <td>Data</td>
                                <td>Data</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Create</button>
                    <button class="btn btn-outline-danger">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            $('.btn.btn-danger').on('click', function() {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        )
                    }
                })
            });

            let addLeadGroup = new bootstrap.Modal('#addLeadGroupModal', {
                keyboard: false
            });

            let previewDocumentDataModal = new bootstrap.Modal('#previewDocumentDataModal', {
                keyboard: false
            })

            $('.addLeadGroup').on('click', () => {
                addLeadGroup.show();
            });

            $('.previewDocumentData').on('click', () => {
                previewDocumentDataModal.show();
            });

            $('.addTwoFields').on('click', () => {
                if($('.additionalFieldsLeadsGroup').append(`@include('clients.additionalFieldsLeadGroup')`)){
                    toastr.success("Success Added")
                }

                $('.removeAdditionalFields').click((e) => {
                    if($(e.target).closest('.rich-list-item').remove()){
                        toastr.info("Success Removed")
                    }
                });
            });

        }, false);
    </script>
@endsection
