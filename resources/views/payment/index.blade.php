@extends('template.master')
@section('title', 'Thanh Toán')
@section('content')

    <div class="card shadow-sm border">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Phòng</th>
                        <th scope="col">Đã Thanh Toán</th>
                        <th scope="col">Trạng Thái</th>
                        <th scope="col">Vào Lúc</th>
                        <th scope="col">Phục Vụ Bởi</th>
                        <th scope="col">Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($payments as $payment)
                        <tr>
                            <th scope="row">
                                {{ ($payments->currentpage() - 1) * $payments->perpage() + $loop->index + 1 }}
                            </th>
                            <td>{{ $payment->transaction->room->number }}</td>
                            <td>{{ Helper::convertToRupiah($payment->price) }}</td>
                            <td>{{ $payment->status }}</td>
                            <td>{{ Helper::dateFormatTime($payment->created_at) }}</td>
                            <td>{{ $payment->user->name }}</td>
                            <td> <a href="{{ route('payment.invoice', $payment->id) }}">Hóa Đơn</a> </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="6">Không tìm thấy thanh toán nào trong cơ sở dữ liệu</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
