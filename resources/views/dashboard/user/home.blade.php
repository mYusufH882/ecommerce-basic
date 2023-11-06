@extends('layouts.app')

@section('content')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    @include('partials.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        </div>
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                aria-labelledby="overview">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div
                                            class="statistics-details d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="statistics-title">Transaksi</p>
                                                <h3 class="rate-percentage">68.8</h3>
                                            </div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg d-flex flex-column">
                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div
                                                            class="d-sm-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h4 class="card-title card-title-dash">Daftar Transaksi
                                                                </h4>
                                                                <p class="card-subtitle card-subtitle-dash">Kamu
                                                                    memiliki daftar transaksi n baru.</p>
                                                            </div>
                                                            <div>
                                                                <button
                                                                    class="btn btn-primary btn-lg text-white mb-0 me-0"
                                                                    type="button"><i class="mdi mdi-eye"></i>Lihat
                                                                    Transaksi</button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive  mt-1">
                                                            <table class="table select-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div
                                                                                class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </th>
                                                                        <th>Customer</th>
                                                                        <th>Company</th>
                                                                        <th>Progress</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div
                                                                                class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex ">
                                                                                <img src="{{asset('assets/star-admin2/template/images/faces/face1.jpg')}}"
                                                                                    alt="">
                                                                                <div>
                                                                                    <h6>Brandon Washington</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">79%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-success"
                                                                                        role="progressbar"
                                                                                        style="width: 85%"
                                                                                        aria-valuenow="25"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-warning">In
                                                                                progress</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div
                                                                                class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <img src="images/faces/face2.jpg"
                                                                                    alt="">
                                                                                <div>
                                                                                    <h6>Laura Brooks</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">65%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-success"
                                                                                        role="progressbar"
                                                                                        style="width: 65%"
                                                                                        aria-valuenow="65"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-warning">In
                                                                                progress</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div
                                                                                class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <img src="images/faces/face3.jpg"
                                                                                    alt="">
                                                                                <div>
                                                                                    <h6>Wayne Murphy</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">65%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-warning"
                                                                                        role="progressbar"
                                                                                        style="width: 38%"
                                                                                        aria-valuenow="38"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-warning">In
                                                                                progress</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div
                                                                                class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <img src="images/faces/face4.jpg"
                                                                                    alt="">
                                                                                <div>
                                                                                    <h6>Matthew Bailey</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">65%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-danger"
                                                                                        role="progressbar"
                                                                                        style="width: 15%"
                                                                                        aria-valuenow="15"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-danger">
                                                                                Pending</div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div
                                                                                class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <img src="images/faces/face5.jpg"
                                                                                    alt="">
                                                                                <div>
                                                                                    <h6>Katherine Butler</h6>
                                                                                    <p>Head admin</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6>Company name 1</h6>
                                                                            <p>company type</p>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                    <p class="text-success">65%</p>
                                                                                    <p>85/162</p>
                                                                                </div>
                                                                                <div class="progress progress-md">
                                                                                    <div class="progress-bar bg-success"
                                                                                        role="progressbar"
                                                                                        style="width: 65%"
                                                                                        aria-valuenow="65"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-success">
                                                                                Completed</div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        @include('partials.footer')
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
@endsection