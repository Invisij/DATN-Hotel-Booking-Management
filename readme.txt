cp .env.example .env

composer install
npm install
php artisan migrate:fresh --seed
php artisan serv
php artisan reverb:start
npm run dev

1. Bảng điều khiển (Dashboard)
Biểu đồ khách hàng
Số lượng khách hàng trong ngày
2. Giao dịch (Transaction)
Tạo và lưu thông tin thanh toán
Lịch sử thanh toán
3. Đặt phòng:
Bước 1: Chọn khách hàng: Tạo khách hàng mới hoặc chọn khách hàng có sẵn
Bước 2: Nhập thông tin đặt phòng: Số lượng khách, Ngày nhận phòng, Ngày trả phòng
Bước 3: Chọn phòng trống: Kiểm tra phòng chưa có người thuê trong khoảng thời gian đã chọn, Số lượng người tối đa của phòng phải lớn hơn số khách nhập vào
Bước 4: Xác nhận & đặt cọc, Số tiền thanh toán phải bằng hoặc lớn hơn số tiền đặt cọc
Bước 5: Nếu giao dịch thành công, Gửi thông báo đến quản lý
4. Quản lý khách hàng
Thêm khách hàng
Xem danh sách khách hàng (phân trang, tìm kiếm)
Cập nhật thông tin khách hàng
Xóa khách hàng (không thể xóa nếu có giao dịch liên quan)
Tìm kiếm, xem chi tiết khách hàng
5. Quản lý người dùng
Thêm người dùng
Xem danh sách người dùng (Super Admin, Admin)
Phân trang, tìm kiếm
Cập nhật thông tin người dùng
Xóa người dùng (không thể xóa nếu có giao dịch liên quan)
Tìm kiếm, xem chi tiết người dùng
6. Quản lý phòng
Thêm phòng
Xem danh sách phòng (phân trang, tìm kiếm)
Cập nhật thông tin phòng
Xóa phòng (không thể xóa nếu phòng đã có giao dịch liên quan)
Xem chi tiết phòng
7. Quản lý loại phòng
Thêm loại phòng
Xem danh sách loại phòng (phân trang, tìm kiếm)
Cập nhật loại phòng
Xóa loại phòng
8. Quản lý trạng thái phòng
Thêm trạng thái phòng
Xem danh sách trạng thái phòng (phân trang, tìm kiếm)
Cập nhật trạng thái phòng
Xóa trạng thái phòng