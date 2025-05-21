@extends('template.master')
@section('title', 'Người Dùng')
@section('content')
    <div class="container">
        <h1>Nhật Ký Hoạt Động Người Dùng</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mô Tả</th>
                    <th>Bởi</th>
                    <th>Thời Gian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activities as $activity)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $activity->description }}</td>
                        <td>{{ $activity->causer->name ?? 'Hệ Thống' }}</td>
                        <td>{{ $activity->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
