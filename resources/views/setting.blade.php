@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row invisible" data-toggle="appear">
            <!-- Row #3 -->

            <div class="col-md-7">
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default border-b">
                        <h3 class="block-title">Cập nhật ngưỡng tưới</h3>
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
                        <p class="text-danger">Chú ý:  Nếu muốn bỏ điều kiện ngưỡng cho phép của 1 module thì để giá trị là 0</p>
                        <table class="table table-borderless table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">###</th>
                                    <th>Độ ẩm không khí</th>
                                    <th>Độ ẩm đất</th>
                                    <th>Nhiệt độ</th>
                                    <th >Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt = 1; ?>
                                @foreach ($data_threshold as $key => $data_threshold2)

                                <tr>
                                    <td>
                                        <span >Hệ thống {{$stt++}}</span>
                                    </td>
                                    @foreach ($data_threshold2 as $key2 => $value)
                                    <td>
                                        <span ><a class="text-danger" href="javascript:void(0)">{{$value}}{{$key2 == 'temperature' ? '°C ' : '%'}}</a></span>
                                    </td>
                                    @endforeach
                                    <td>
                                        <a class="btn btn-danger min-width-125 js-click-ripple-enabled" href="{{ route('edit_threshold_get',['irrigation'=> $key]) }}"> Chỉnh sửa</a>

                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default border-b">
                        <h3 class="block-title">Tác vụ đóng ngắt máy bơm</h3>
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
                        <table class="table table-borderless table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">###</th>
                                    <th>Trạng thái</th>
                                    <th >Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt = 1; ?>
                                @foreach ($relay as $key => $value)
                                <tr>
                                    <td>
                                        <span >Máy bơm {{$stt++}}</span>
                                    </td>
                                    <td>
                                        <span ><a class="text-{{$value == 0 ? 'warning ' : 'danger'}}" href="javascript:void(0)">{{$value == 0 ? 'Đang tuới ' : 'Không tưới'}}</a></span>
                                    </td>
                                    <td>
                                        @if($value == 0)
                                        <a class="btn btn-danger min-width-125 js-click-ripple-enabled" href="{{ route('turn_off_relay',['irrigation'=> $key]) }}"> Tắt máy bơm</a>
                                        @else
                                        <a class="btn btn-info min-width-125 js-click-ripple-enabled" href="{{ route('turn_on_relay',['irrigation'=> $key]) }}"> Bật máy bơm</a>
                                        @endif

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
