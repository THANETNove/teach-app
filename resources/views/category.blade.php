@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">หมวดหมู่</div>

                        <a href="{{ url('video-all') }}">
                            <div class="col-sm-6 col-md-3 mt-5">
                                <div class="card card-stats card-info card-round">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                        <img src="assets/img/OIUFOY1-01.png" alt="image profile" height="150px"
                                            width="150px" />
                                        <div class="physics">ฟิสิกส์</div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
