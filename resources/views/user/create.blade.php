@extends('template.master')
@section('title', 'Thêm Người Dùng')
@section('content')
    <div class="row justify-content-md-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border">
                <div class="card-header">
                    <h2>Thêm Người Dùng</h2>
                </div>
                <div class="card-body p-3">
                    <form class="row g-3" method="POST" action="{{ route('user.store') }}">
                        @csrf
                        <div class="col-md-12">
                            <label for="name" class="form-label">Họ Tên</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" " id=" email"
                                name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" col-md-6">
                            <label for="password" class="form-label">Mật Khẩu</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" " id="
                                password" name="password" value="{{ old('password') }}">
                            @error('password')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" col-md-12">
                            <label for="role" class="form-label">Vai Trò</label>
                            <select id="role" name="role" class="form-select @error('password') is-invalid @enderror">
                                <option selected disabled hidden>Chọn...</option>
                                <option value="Super" @if (old('role') == 'Super') selected @endif>Quản Lý</option>
                                <option value="Admin" @if (old('role') == 'Admin') selected @endif>Quản Trị Viên</option>
                            </select>
                            @error('role')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-light shadow-sm border float-end">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
