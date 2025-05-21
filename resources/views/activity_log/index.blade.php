@extends('template.master')
@section('title', 'Người dùng')
@section('content')
    <div class="container">
        <h1>Nhật ký hoạt động người dùng</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mô tả</th>
                    <th>Bởi</th>
                    <th>Thời gian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activities as $activity)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $activity->description }}</td>
                        <td>{{ $activity->causer->name ?? 'Hệ thống' }}</td>
                        <td>{{ $activity->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Liên kết phân trang tùy chỉnh chỉ với Trước, Sau và Số trang -->
        <nav aria-label="Điều hướng trang">
            <ul class="pagination">
                <!-- Liên kết Trước -->
                @if ($activities->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Trước</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $activities->previousPageUrl() }}" rel="prev">Trước</a>
                    </li>
                @endif

                <!-- Số trang -->
                @for ($i = 1; $i <= $activities->lastPage(); $i++)
                    <li class="page-item {{ $i == $activities->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $activities->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                <!-- Liên kết Sau -->
                @if ($activities->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $activities->nextPageUrl() }}" rel="next">Sau</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">Sau</span>
                    </li>
                @endif
            </ul>
        </nav>

        <!-- Tùy chọn xem tất cả nhật ký -->
        <a href="{{ route('activity-log.all') }}" class="btn btn-primary">Xem tất cả</a>
    </div>
@endsection
