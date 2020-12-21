@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <!-- Static Labels -->
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Chỉnh sửa các ngương của hệ thống {{ $irrigation }}</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="{{ route('edit_threshold_post', ['irrigation' => $irrigation]) }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material">
                                        <input type="text" class="form-control" id="material-help" name="humidity" value="{{ $humidity }}">
                                        <label for="material-help">Ngưỡng độ ẩm không khí </label>
                                        <div class="form-text text-muted text-right">Nhập vào thông số muốn điều chỉnh</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material">
                                        <input type="text" class="form-control" id="material-help" name="soil_moisture" value="{{ $soil_moisture }}">
                                        <label for="material-help">Ngưỡng độ ẩm đất </label>
                                        <div class="form-text text-muted text-right">Nhập vào thông số muốn điều chỉnh</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <div class="form-material">
                                        <input type="text" class="form-control" id="material-help" name="temperature" value="{{ $temperature }}">
                                        <label for="material-help">Nhiệt độ thời tiết </label>
                                        <div class="form-text text-muted text-right">Nhập vào thông số muốn điều chỉnh</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-alt-primary">Cập nhật</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Static Labels -->
            </div>
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
