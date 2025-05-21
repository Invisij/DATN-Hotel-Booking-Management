<style>
    .dropend:hover .dropdown-menu {
        display: block;
        margin-top: 0;
    }

    #sidebar-wrapper .dropdown-menu.show {
        top: -60px !important;
        left: 80px !important;
    }
</style>

<div class="" id="sidebar-wrapper">
    <div class="d-flex flex-column"
        style="width: 4.5rem; border-top-right-radius:0.5rem; border-bottom-right-radius:0.5rem;">
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            @if (auth()->user()->role == 'Admin')
                <li class="mb-2 bg-white rounded cursor-pointer">
                    <a class="nav-link py-3 border-bottom border-right myBtn  dropdown-toggle
                        {{ in_array(Route::currentRouteName(), ['customer.index', 'customer.create', 'customer.edit']) ? 'active' : '' }}
                    "
                        href="{{ route('customer.index') }}" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Khách hàng"><i class="fas fa-users"></i></a>
                </li>
                <li class="mb-2 bg-white rounded cursor-pointer">
                    <a class="nav-link py-3 border-bottom border-right myBtn  dropdown-toggle
                        {{ in_array(Route::currentRouteName(), ['user.index', 'user.create', 'user.edit']) ? 'active' : '' }}"
                        href="{{ route('user.index') }}" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Người dùng"><i class="fas fa-user"></i></a>
                </li>
            @elseif(auth()->user()->role == 'Super')
                <li class="mb-2 bg-white rounded cursor-pointer">
                    <a href="{{ route('dashboard.index') }}"
                        class="nav-link py-3 border-bottom myBtn
                    {{ in_array(Route::currentRouteName(), ['dashboard.index', 'chart.dailyGuest']) ? 'active' : '' }}
                    "
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Bảng điều khiển">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li class="mb-2 bg-white rounded cursor-pointer">
                    <a class="nav-link py-3 border-bottom border-right myBtn
                    {{ in_array(Route::currentRouteName(), ['room.index', 'room.show', 'room.create', 'room.edit']) ? 'active' : '' }}"
                        href="{{ route('room.index') }}" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Phòng">
                        <i class="fas fa-bed"></i>
                    </a>
                </li>
                <li class="mb-2 bg-white rounded cursor-pointer">
                    <a class="nav-link py-3 border-bottom border-right myBtn
                    {{ in_array(Route::currentRouteName(), ['type.index', 'type.create', 'type.edit']) ? 'active' : '' }}"
                        href="{{ route('type.index') }}" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Loại phòng">
                        <i class="fas fa-house-user"></i>
                    </a>
                </li>
                <li class="mb-2 bg-white rounded cursor-pointer">
                    <a class="nav-link py-3 border-bottom border-right myBtn
                    {{ in_array(Route::currentRouteName(), ['roomstatus.index', 'roomstatus.create', 'roomstatus.edit']) ? 'active' : '' }}"
                        href="{{ route('roomstatus.index') }}" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Trạng thái">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </li>
            @elseif(auth()->user()->role == 'Receptionist')
                <li class="mb-2 bg-white rounded cursor-pointer">
                    <a href="{{ route('transaction.index') }}"
                        class="nav-link py-3 border-bottom border-right myBtn
                        {{ in_array(Route::currentRouteName(), ['payment.index', 'transaction.index', 'transaction.reservation.createIdentity', 'transaction.reservation.pickFromCustomer', 'transaction.reservation.usersearch', 'transaction.reservation.storeCustomer', 'transaction.reservation.viewCountPerson', 'transaction.reservation.chooseRoom', 'transaction.reservation.confirmation', 'transaction.reservation.payDownPayment']) ? 'active' : '' }}
                        "
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Giao dịch">
                        <i class="fas fa-cash-register"></i>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
