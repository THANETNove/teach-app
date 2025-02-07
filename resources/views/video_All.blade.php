@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">video ทั้งหมด</div>

                        <!-- สร้าง .row ครั้งเดียว -->
                        <div class="row  mt-5">
                            @foreach ($data as $da)
                                <div class="col-sm-6 col-md-3">
                                    <a href="{{ url('video', $da->id) }}" class="text-decoration-none">
                                        <div class="card card-info2 position-relative">
                                            <iframe class="video-disabled" width="auto" height="150"
                                                src="{{ $da->website }}" frameborder="0" allow="autoplay; encrypted-media"
                                                allowfullscreen
                                                style="border-top-left-radius: 10px; border-top-right-radius: 10px; overflow: hidden;">
                                            </iframe>

                                            <!-- เพิ่ม Overlay ปิด iframe -->
                                            <div class="overlay"></div>

                                            <div class="physics2">{{ $da->name }} </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <!-- ปิด .row ที่เดียว -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
