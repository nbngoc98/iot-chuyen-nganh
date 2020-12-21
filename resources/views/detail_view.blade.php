@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row invisible" data-toggle="appear">
            <!-- Row #3 -->

            <div class="col-md-6">
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default border-b">
                        <h3 class="block-title">Hệ thống 1</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>



                    <div class="block-content">
                        <p class="text-danger">Chú ý:  10 Thông số được update gần đây nhất</p>
                        <table class="table table-borderless table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 20px;">###</th>
                                    <th>Độ ẩm không khí</th>
                                    <th>Độ ẩm đất</th>
                                    <th>Nhiệt độ</th>
                                    <th>Thời gian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt = 1; ?>
                                @foreach ($data_new1 as $key => $data_new)

                                <tr>
                                    <td>
                                        <span >{{$stt++}}</span>
                                    </td>
                                    @foreach ($data_new as $key2 => $value)
                                    <td>
                                        <span ><a class="text-danger">{{$value}}{{$key2 == 'temperature' ? '°C ' : '%'}}</a></span>
                                    </td>
                                    @endforeach
                                    <td>
                                        {{$key}}
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default border-b">
                        <h3 class="block-title">Hệ thống 2</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>



                    <div class="block-content">
                        <p class="text-danger">Chú ý:  10 Thông số được update gần đây nhất</p>
                        <table class="table table-borderless table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 20px;">###</th>
                                    <th>Độ ẩm không khí</th>
                                    <th>Độ ẩm đất</th>
                                    <th>Nhiệt độ</th>
                                    <th>Thời gian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt = 1; ?>
                                @foreach ($data_new2 as $key => $data_new)

                                <tr>
                                    <td>
                                        <span >{{$stt++}}</span>
                                    </td>
                                    @foreach ($data_new as $key2 => $value)
                                    <td>
                                        <span ><a class="text-danger">{{$value}}{{$key2 == 'temperature' ? '°C ' : '%'}}</a></span>
                                    </td>
                                    @endforeach
                                    <td>
                                        {{$key}}
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- END Row #3 -->
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@push('js')
    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_widgets_stats.min.js"></script>

    <!-- Page JS Helpers (Easy Pie Chart Plugin) -->
    <script>jQuery(function(){ Codebase.helpers('easy-pie-chart'); });</script>
@endpush
