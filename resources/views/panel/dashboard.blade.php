@extends('panel.layouts.app')

@section('content')
    <div class="row mb-2 mb-xl-4">
        <div class="col-auto d-none d-sm-block">
            <h3>Welcome back, Chris!</h3>
        </div>

        <div class="col-auto ml-auto text-right mt-n1">
            <span class="dropdown mr-2">
                <button class="btn btn-light bg-white shadow-sm dropdown-toggle" id="day" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="align-middle mt-n1" data-feather="calendar"></i> Today
                </button>
                <div class="dropdown-menu" aria-labelledby="day">
                    <h6 class="dropdown-header">Settings</h6>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </span>

            <button class="btn btn-primary shadow-sm">
                <i class="align-middle" data-feather="filter">&nbsp;</i>
            </button>
            <button class="btn btn-primary shadow-sm">
                <i class="align-middle" data-feather="refresh-cw">&nbsp;</i>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-xl-5 d-flex">
            <div class="w-100">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <span class="badge badge-primary float-right">Today</span>
                                <h5 class="card-title mb-0">Visitors</h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            17.212
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="text-muted">57%</span>
                                    </div>
                                </div>

                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 57%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card flex-fill">
                            <div class="card-header">
                                <span class="badge badge-info float-right">Monthly</span>
                                <h5 class="card-title mb-0">Real-Time</h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            1.856
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="text-muted">64%</span>
                                    </div>
                                </div>

                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 64%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <span class="badge badge-warning float-right">Annual</span>
                                <h5 class="card-title mb-0">Bounce</h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            2.364
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="text-muted">82%</span>
                                    </div>
                                </div>

                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 82%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card flex-fill">
                            <div class="card-header">
                                <span class="badge badge-success float-right">Yearly</span>
                                <h5 class="card-title mb-0">Activity</h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            57.300
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="text-muted">32%</span>
                                    </div>
                                </div>

                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 32%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-xl-7">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <div class="card-actions float-right">
                        <div class="dropdown show">
                            <a href="#" data-toggle="dropdown" data-display="static">
                                <i class="align-middle" data-feather="more-horizontal"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Real-Time</h5>
                </div>
                <div class="card-body p-2">
                    <div id="world_map" style="height:304px;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-4 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <div class="card-actions float-right">
                        <div class="dropdown show">
                            <a href="#" data-toggle="dropdown" data-display="static">
                                <i class="align-middle" data-feather="more-horizontal"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Languages</h5>
                </div>
                <table class="table table-striped my-0">
                    <thead>
                        <tr>
                            <th>Language</th>
                            <th class="text-right">Users</th>
                            <th class="d-none d-xl-table-cell w-75">% Users</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>en-us</td>
                            <td class="text-right">735</td>
                            <td class="d-none d-xl-table-cell">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 43%;"
                                        aria-valuenow="43" aria-valuemin="0" aria-valuemax="100">43%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>en-gb</td>
                            <td class="text-right">223</td>
                            <td class="d-none d-xl-table-cell">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 27%;"
                                        aria-valuenow="27" aria-valuemin="0" aria-valuemax="100">27%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>fr-fr</td>
                            <td class="text-right">181</td>
                            <td class="d-none d-xl-table-cell">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 22%;"
                                        aria-valuenow="22" aria-valuemin="0" aria-valuemax="100">22%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>es-es</td>
                            <td class="text-right">132</td>
                            <td class="d-none d-xl-table-cell">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 16%;"
                                        aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">16%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>de-de</td>
                            <td class="text-right">118</td>
                            <td class="d-none d-xl-table-cell">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 15%;"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>ru-ru</td>
                            <td class="text-right">98</td>
                            <td class="d-none d-xl-table-cell">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 13%;"
                                        aria-valuenow="13" aria-valuemin="0" aria-valuemax="100">13%</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-12 col-lg-4 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <div class="card-actions float-right">
                        <div class="dropdown show">
                            <a href="#" data-toggle="dropdown" data-display="static">
                                <i class="align-middle" data-feather="more-horizontal"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Mobile / Desktop</h5>
                </div>
                <div class="card-body d-flex w-100">
                    <div class="align-self-center chart">
                        <canvas id="chartjs-dashboard-bar-devices"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="card-actions float-right">
                        <div class="dropdown show">
                            <a href="#" data-toggle="dropdown" data-display="static">
                                <i class="align-middle" data-feather="more-horizontal"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Interests</h5>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="chartjs-dashboard-radar"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-5 col-xl-4 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <div class="card-actions float-right">
                        <div class="dropdown show">
                            <a href="#" data-toggle="dropdown" data-display="static">
                                <i class="align-middle" data-feather="more-horizontal"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Source / Medium</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center w-100">
                        <div class="py-3">
                            <div class="chart chart-xs">
                                <canvas id="chartjs-dashboard-pie"></canvas>
                            </div>
                        </div>

                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Source</th>
                                    <th class="text-right">Revenue</th>
                                    <th class="text-right">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fas fa-square-full text-primary"></i> Direct</td>
                                    <td class="text-right">$ 2602</td>
                                    <td class="text-right text-success">+43%</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-square-full text-warning"></i> Affiliate</td>
                                    <td class="text-right">$ 1253</td>
                                    <td class="text-right text-success">+13%</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-square-full text-danger"></i> E-mail</td>
                                    <td class="text-right">$ 541</td>
                                    <td class="text-right text-success">+24%</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-square-full text-dark"></i> Other</td>
                                    <td class="text-right">$ 1465</td>
                                    <td class="text-right text-success">+11%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-7 col-xl-8 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="card-actions float-right">
                        <div class="dropdown show">
                            <a href="#" data-toggle="dropdown" data-display="static">
                                <i class="align-middle" data-feather="more-horizontal"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Traffic</h5>
                </div>
                <table id="datatables-dashboard-traffic" class="table table-striped my-0">
                    <thead>
                        <tr>
                            <th>Source</th>
                            <th class="text-right">Users</th>
                            <th class="d-none d-xl-table-cell text-right">Sessions</th>
                            <th class="d-none d-xl-table-cell text-right">Bounce Rate</th>
                            <th class="d-none d-xl-table-cell text-right">Avg. Session Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Google</td>
                            <td class="text-right">1023</td>
                            <td class="d-none d-xl-table-cell text-right">1265</td>
                            <td class="d-none d-xl-table-cell text-right text-success">27.23%</td>
                            <td class="d-none d-xl-table-cell text-right">00:06:25</td>
                        </tr>
                        <tr>
                            <td>Bing</td>
                            <td class="text-right">504</td>
                            <td class="d-none d-xl-table-cell text-right">623</td>
                            <td class="d-none d-xl-table-cell text-right text-danger">66.76%</td>
                            <td class="d-none d-xl-table-cell text-right">00:04:42</td>
                        </tr>
                        <tr>
                            <td>Twitter</td>
                            <td class="text-right">462</td>
                            <td class="d-none d-xl-table-cell text-right">571</td>
                            <td class="d-none d-xl-table-cell text-right text-success">31.53%</td>
                            <td class="d-none d-xl-table-cell text-right">00:08:05</td>
                        </tr>
                        <tr>
                            <td>Pinterest</td>
                            <td class="text-right">623</td>
                            <td class="d-none d-xl-table-cell text-right">770</td>
                            <td class="d-none d-xl-table-cell text-right text-danger">52.81%</td>
                            <td class="d-none d-xl-table-cell text-right">00:03:10</td>
                        </tr>
                        <tr>
                            <td>Facebook</td>
                            <td class="text-right">812</td>
                            <td class="d-none d-xl-table-cell text-right">1003</td>
                            <td class="d-none d-xl-table-cell text-right text-success">24.83%</td>
                            <td class="d-none d-xl-table-cell text-right">00:05:56</td>
                        </tr>
                        <tr>
                            <td>DuckDuckGo</td>
                            <td class="text-right">693</td>
                            <td class="d-none d-xl-table-cell text-right">856</td>
                            <td class="d-none d-xl-table-cell text-right text-success">37.36%</td>
                            <td class="d-none d-xl-table-cell text-right">00:09:12</td>
                        </tr>
                        <tr>
                            <td>GitHub</td>
                            <td class="text-right">713</td>
                            <td class="d-none d-xl-table-cell text-right">881</td>
                            <td class="d-none d-xl-table-cell text-right text-success">38.09%</td>
                            <td class="d-none d-xl-table-cell text-right">00:06:19</td>
                        </tr>
                        <tr>
                            <td>Direct</td>
                            <td class="text-right">872</td>
                            <td class="d-none d-xl-table-cell text-right">1077</td>
                            <td class="d-none d-xl-table-cell text-right text-success">32.70%</td>
                            <td class="d-none d-xl-table-cell text-right">00:09:18</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
