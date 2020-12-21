@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row invisible" data-toggle="appear">
            <!-- Row #2 -->
            <div class="col-md-12">
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default border-b">
                        <h3 class="block-title">
                            Hệ thống 1
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full row">
                        <div class="col-6">
                            <div class="">
                                <iframe width="450" height="260" style="border: 1px solid #cccccc;width: -webkit-fill-available" src="https://thingspeak.com/channels/1264754/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="">
                                <iframe width="450" height="260" style="border: 1px solid #cccccc;width: -webkit-fill-available" src="https://thingspeak.com/channels/1264754/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="">
                                <iframe width="450" height="260" style="border: 1px solid #cccccc;width: -webkit-fill-available" src="https://thingspeak.com/channels/1264754/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=%C4%90%E1%BB%99+%E1%BA%A9m+kh%C3%B4ng+kh%C3%AD+-+H%E1%BB%87+th%E1%BB%91ng+1&type=line&xaxis=%C4%90%E1%BB%99+%E1%BA%A9m&yaxis=Th%E1%BB%9Di+gian"></iframe>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="row invisible" data-toggle="appear">
            <!-- Row #2 -->
            <div class="col-md-12">
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default border-b">
                        <h3 class="block-title">
                            Hệ thống 1
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full row">
                        <div class="col-6">
                            <div class="">
                                <iframe width="450" height="260" style="border: 1px solid #cccccc;width: -webkit-fill-available" src="https://thingspeak.com/channels/1264754/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="">
                                <iframe width="450" height="260" style="border: 1px solid #cccccc;width: -webkit-fill-available" src="https://thingspeak.com/channels/1264754/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="">
                                <iframe width="450" height="260" style="border: 1px solid #cccccc;width: -webkit-fill-available" src="https://thingspeak.com/channels/1264754/charts/6?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        {{--  <div class="row invisible" data-toggle="appear">
            <div class="col-md-6">
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default border-b">
                        <h3 class="block-title">
                            Hệ thống 1
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="row gutters-tiny">
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Độ ẩm không khí</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Đổ ẩm trong đất</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Nhiệt độ ngoài trời</div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-tiny">
                        @foreach ($data_new1 as $key => $data)
                            @foreach ($data as $keyItem => $value)
                            <div class="col-md-6 col-xl-4">
                                <div class="block">
                                    <div class="block-content block-content-full bg-success">
                                        <div class="js-pie-chart pie-chart" data-percent="{{ $value }}" data-line-width="6" data-size="120" data-bar-color="#ffffff" data-track-color="rgba(255,255,255,.25)" data-scale-color="rgba(255,255,255,.5)">
                                            <span class="text-white">{{ $value }}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endforeach
                        <!-- END Row #2 -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default border-b">
                        <h3 class="block-title">
                            Hệ thống 2
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="row gutters-tiny">
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Độ ẩm không khí</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Đổ ẩm trong đất</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Nhiệt độ ngoài trời</div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-tiny">
                        @foreach ($data_new2 as $key => $data)
                            @foreach ($data as $keyItem => $value)
                            <div class="col-md-6 col-xl-4">
                                <div class="block">
                                    <div class="block-content block-content-full bg-success">
                                        <div class="js-pie-chart pie-chart" data-percent="{{ $value }}" data-line-width="6" data-size="120" data-bar-color="#ffffff" data-track-color="rgba(255,255,255,.25)" data-scale-color="rgba(255,255,255,.5)">
                                            <span class="text-white">{{ $value }}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endforeach
                        <!-- END Row #2 -->
                    </div>
                </div>
            </div>
            <!-- END Row #2 -->
        </div>  --}}
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
