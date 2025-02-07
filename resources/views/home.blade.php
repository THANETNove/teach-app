@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="card-title">รายการทั้งหมด</div>
                        <a href="{{ url('create-video') }}" class="btn btn-primary ms-auto">เพิ่ม video</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">video</th>
                                    <th scope="col">name</th>
                                    <th scope="col">รายละเอียด</th>
                                    <th scope="col">ลบ</th>
                                </tr>
                            </thead>
                            @php
                                $i = 1;
                            @endphp
                            <tbody>
                                @foreach ($data as $da)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>
                                            <iframe width="300" height="150" src="{{ $da->website }}" frameborder="0"
                                                allow="autoplay; encrypted-media" allowfullscreen>
                                            </iframe>
                                        </td>
                                        <td>{{ $da->name }}</td>
                                        <td>{{ $da->details }}</td>
                                        <td>
                                            <a href="javascript:void(0);" class="icon-action delete"
                                                data-email="{{ $da->name }}" data-user-id="{{ $da->id }}">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
