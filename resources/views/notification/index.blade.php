@extends('template.master')
@section('title', 'Thông báo')
@section('head')
    <link rel="stylesheet" href="{{ asset('style/css/notification.css') }}">
@endsection
@section('content')
    <div class="page">
        <div class="timelines">
            <div class="timeline__group">
                <span class="timeline__year time" aria-hidden="true">Chưa đọc</span>
                <div class="timeline__cards">
                    @forelse (auth()->user()->unreadNotifications as $notification)
                        <div class="timeline__card card">
                            <header class="card__header">
                                <time class="time">
                                    <span
                                        class="time__day">{{ Helper::dateFormatTimeNoYear($notification->created_at) }}</span>
                                </time>
                            </header>
                            <div class="card__content">
                                <p>{{ $notification->data['message'] }}</p>
                                <a class="btn btn-sm shadow-sm myBtn border rounded"
                                    href="{{ $notification->data['url'] }}"> Xem chi tiết</a>
                            </div>
                        </div>
                    @empty
                        <div class="timeline__card card">
                            <div class="card__content">
                                <p>Không có thông báo mới chưa đọc</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="timeline__group">
                <span class="timeline__year time" aria-hidden="true">Đã đọc</span>
                <div class="timeline__cards">
                    @forelse (auth()->user()->readNotifications as $notification)
                        <div class="timeline__card card">
                            <header class="card__header">
                                <time class="time">
                                    <span
                                        class="time__day">{{ Helper::dateFormatTimeNoYear($notification->created_at) }}</span>
                                </time>
                            </header>
                            <div class="card__content">
                                <p>{{ $notification->data['message'] }}</p>
                                <a class="btn btn-sm shadow-sm myBtn border rounded mt-2 float-end"
                                    href="{{ $notification->data['url'] }}"> Xem chi tiết</a>
                            </div>
                        </div>
                    @empty
                        <div class="timeline__card card">
                            <div class="card__content">
                                <p>Không có thông báo</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
