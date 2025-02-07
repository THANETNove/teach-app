@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <!-- สร้าง .row ครั้งเดียว -->
                        <iframe class="video-play  " src="{{ $videoId->website }}" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>

                        <div class="nav-video-home">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">วิดีโอถัดไป</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">วิดีโอก่อนหน้า</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">เเหล่งข้อมูล</button>

                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab" tabindex="0">
                                    <h3 class="mt-5 text-primary">วิดีโอถัดไป</h3>
                                    <div class="row">
                                        @foreach ($dataAll as $da)
                                            <div class="col-sm-6 col-md-3">
                                                <a href="{{ url('video', $da->id) }}" class="text-decoration-none">
                                                    <div class="card card-info2 position-relative">
                                                        <iframe class="video-disabled" width="auto" height="100"
                                                            src="{{ $da->website }}" frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen
                                                            style="border-top-left-radius: 10px; border-top-right-radius: 10px; overflow: hidden;">
                                                        </iframe>
                                                        <div class="overlay"></div>
                                                        <div class="physics2">{{ $da->name }}</div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab" tabindex="0">
                                    <h3 class="mt-5 text-secondary">วิดีโอก่อนหน้า</h3>
                                    <div class="row">
                                        @foreach ($dataAll2 as $da2)
                                            <div class="col-sm-6 col-md-3">
                                                <a href="{{ url('video', $da2->id) }}" class="text-decoration-none">
                                                    <div class="card card-info2 position-relative">
                                                        <iframe class="video-disabled" width="auto" height="100"
                                                            src="{{ $da2->website }}" frameborder="0"
                                                            allow="autoplay; encrypted-media" allowfullscreen
                                                            style="border-top-left-radius: 10px; border-top-right-radius: 10px; overflow: hidden;">
                                                        </iframe>
                                                        <div class="overlay"></div>
                                                        <div class="physics2">{{ $da2->name }}</div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab" tabindex="0">
                                    <p class="mt-3"> {!! $videoId->details !!}</p>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // ดึงค่าที่เลือกไว้จาก LocalStorage
            let activeTab = localStorage.getItem("activeTab");

            if (activeTab) {
                // ถ้ามีค่าที่บันทึกไว้ ให้เปิดแท็บนั้น
                let selectedTab = document.querySelector('[data-bs-target="' + activeTab + '"]');
                if (selectedTab) {
                    selectedTab.click();
                }
            }

            // เมื่อผู้ใช้คลิกเปลี่ยนแท็บ ให้บันทึกค่าใหม่ใน LocalStorage
            document.querySelectorAll(".nav-link").forEach(function(tab) {
                tab.addEventListener("click", function() {
                    localStorage.setItem("activeTab", this.getAttribute("data-bs-target"));
                });
            });
        });
    </script>
@endsection
