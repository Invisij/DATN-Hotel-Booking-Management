@extends('template.master')
@section('title', 'Chỉnh Sửa Người Dùng')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row justify-content-md-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border">
                <div class="card-header">
                    <h2>Chỉnh Sửa Người Dùng</h2>
                </div>
                <div class="card-body p-3">
                    <form class="row g-3" method="POST" action="{{ route('user.update', ['user' => $user->id]) }}">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12">
                            <label for="name" class="form-label">Tên</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ $user->name }}">
                            @error('name')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" " id=" email"
                                name="email" value="{{ $user->email }}">
                            @error('email')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" col-md-12">
                            <label for="role" class="form-label">Vai Trò</label>
                            <select id="role" name="role" class="form-select @error('password') is-invalid @enderror">
                                <option selected disabled hidden>Chọn...</option>
                                @if (in_array($user->role, ['Super', 'Admin']))
                                    <option value="Super" @if ($user->role == 'Super') selected @endif>Quản Lý</option>
                                    <option value="Admin" @if ($user->role == 'Admin') selected @endif>Quản Trị Viên</option>
                                @endif
                                @if ($user->role == 'Customer')
                                    <option value="Customer" @if ($user->role == 'Customer') selected @endif>Khách Hàng</option>
                                @endif
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
