@extends('template.master')
@section('title', 'Tạo thông tin')
@section('head')
    <link rel="stylesheet" href="{{ asset('style/css/progress-indication.css') }}">
@endsection
@section('content')
    @include('transaction.reservation.progressbar')
    <div class="container mt-3">
        <div class="row justify-content-md-center">
            <div class="col-lg-12">
                <div class="card shadow-sm border">
                    <div class="card-header">
                        <h2>Thêm khách hàng</h2>
                    </div>
                    <div class="card-body p-3">
                        <form class="row g-3" method="POST" action="{{ route('transaction.reservation.storeCustomer') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <label for="name" class="form-label">Họ tên</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" " id=" email"
                                    name="email" value="{{ old('email') }}">
                                @error('email')
        <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
    @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="birthdate" class="form-label">Ngày sinh</label>
                                <input type="date" class="form-control @error('birthdate') is-invalid @enderror"
                                    id="birthdate" name="birthdate" value="{{ old('birthdate') }}">
                                @error('birthdate')
        <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
    @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="gender" class="form-label">Giới tính</label>
                                <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender" aria-label="Default select example">
                                    <option value="Male">Nam</option>
                                    <option value="Female">Nữ</option>
                                </select>
                                @error('gender')
        <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
    @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="job" class="form-label">Nghề nghiệp</label>
                                <input type="text" class="form-control @error('job') is-invalid @enderror" id="job"
                                    name="job" value="{{ old('job') }}">
                                @error('job')
        <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
    @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="address" class="form-label">Địa chỉ</label>
                                <textarea class="form-control" id="address" name="address" rows="3">{{ old('address') }}</textarea>
                                @error('address')
        <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
    @enderror
                            </div>
                            <div class="col-mg-12">
                                <label for="avatar" class="form-label">Ảnh đại diện</label>
                                <input class="form-control" type="file" name="avatar" id="avatar">
                                @error('avatar')
        <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
    @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn myBtn shadow-sm border float-end">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
