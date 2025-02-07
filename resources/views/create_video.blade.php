@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="card">
                <form method="POST" action="{{ route('register-store') }}" style="padding:16px;">
                    @csrf

                    <div class="row">
                        <!-- ส่วนที่ 1: ข้อมูลพื้นฐาน -->
                        <h5 class="col-12 mt-3 mb-3 text-primary"><strong>
                                เพิ่ม video

                            </strong></h5>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">Email: </label>
                            <input name="website" type="url" value="https://www.youtube.com/embed/{{ old('website') }}"
                                class="form-control @error('website') is-invalid @enderror"
                                placeholder="https://www.youtube.com/embed/id">
                            @error('website')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">หัวข้อ Video: </label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">เเหล่งข้อมูล Video: </label>
                            <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="3"></textarea>

                        </div>


                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
