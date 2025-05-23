<form id="form-save-room" class="row g-3" method="POST" action="{{ route('room.store') }}">
    @csrf
    <div class="col-md-12">
        <label for="type_id" class="form-label">Loại phòng</label>
        <select id="type_id" name="type_id" class="form-control select2">
            @foreach ($types as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>
        <div id="error_type_id" class="text-danger error"></div>
    </div>
    <div class="col-md-12">
        <label for="room_status_id" class="form-label">Trạng thái</label>
        <select id="room_status_id" name="room_status_id" class="form-control select2">
            @foreach ($roomstatuses as $roomstatus)
                <option value="{{ $roomstatus->id }}">{{ $roomstatus->name }} ({{ $roomstatus->code }})
                </option>
            @endforeach
        </select>
        <div id="error_room_status_id" class="text-danger error"></div>
    </div>
    <div class="col-md-12">
        <label for="number" class="form-label">Số phòng</label>
        <input room="text" class="form-control @error('number') is-invalid @enderror" id="number" name="number"
            value="{{ old('number') }}" placeholder="Ví dụ: 1A">
        <div id="error_number" class="text-danger error"></div>
    </div>
    <div class="col-md-12">
        <label for="capacity" class="form-label">Số người tối đa</label>
        <input room="text" class="form-control @error('capacity') is-invalid @enderror" id="capacity"
            name="capacity" value="{{ old('capacity') }}" placeholder="Ví dụ: 4">
        <div id="error_capacity" class="text-danger error"></div>
    </div>
    <div class="col-md-12">
        <label for="price" class="form-label">Giá phòng / ngày</label>
        <input room="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
            value="{{ old('price') }}" placeholder="Ví dụ: 500000">
        <div id="error_price" class="text-danger error"></div>
    </div>
    <div class="col-md-12">
        <label for="view" class="form-label">Tầm nhìn</label>
        <textarea class="form-control" id="view" name="view" rows="3" placeholder="Ví dụ: cửa sổ nhìn ra biển">{{ old('view') }}</textarea>
        <div id="error_view" class="text-danger error"></div>
    </div>
</form>
