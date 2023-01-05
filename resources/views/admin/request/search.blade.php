<form id="formSearch" method="get" action="https://hitour.vn/admin/ship_booking">
    <div class="searchBox">
    <div class="searchBox_item">
        <div class="input-group">
            <input type="text" class="form-control" name="search_customer" placeholder="Tìm theo Khách hàng" value="">
            <button class="btn btn-primary waves-effect" id="button-addon2" type="submit" aria-label="Tìm">Tìm</button>
        </div>
    </div>
    <div class="searchBox_item">
        <div class="position-relative">
            <select class="form-select select2 select2-hidden-accessible" name="search_departure" onchange="submitForm('formSearch');" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option value="0" data-select2-id="3">- Tìm theo Cảng đi -</option>
                <option value="Cảng Côn Đảo">Cảng Côn Đảo</option>
                <option value="Cảng Rạch Giá">Cảng Rạch Giá</option>
                <option value="Cảng Phú Quốc">Cảng Phú Quốc</option>
                <option value="Cảng Tô Châu">Cảng Tô Châu</option>
                <option value="Cảng Nam Du">Cảng Nam Du</option>
                <option value="Cảng Cà Mau">Cảng Cà Mau</option>
                <option value="Cảng Hòn Sơn">Cảng Hòn Sơn</option>
                <option value="Cảng Vũng Tàu">Cảng Vũng Tàu</option>
                <option value="Cảng Trần Đề">Cảng Trần Đề</option>
                <option value="Cảng Cần Thơ">Cảng Cần Thơ</option>
                <option value="Cảng Hồ Mây">Cảng Hồ Mây</option>
                <option value="Cảng Bạch Đằng">Cảng Bạch Đằng</option>
                <option value="Cảng Cần Giờ">Cảng Cần Giờ</option>
                <option value="Cảng Bình Dương">Cảng Bình Dương</option>
                <option value="Cảng Củ Chi">Cảng Củ Chi</option>
                <option value="Cảng Phan Thiết">Cảng Phan Thiết</option>
                <option value="Cảng Phú Quý">Cảng Phú Quý</option>
            </select>
        </div>
    </div>
    <div class="searchBox_item">
        <div class="position-relative">
            <select class="form-select select2 select2-hidden-accessible" name="search_location" onchange="submitForm('formSearch');" data-select2-id="4" tabindex="-1" aria-hidden="true">
                <option value="0" data-select2-id="6">- Tìm theo Cảng đến -</option>
                <option value="Cảng Côn Đảo">Cảng Côn Đảo</option>
                <option value="Cảng Rạch Giá">Cảng Rạch Giá</option>
                <option value="Cảng Phú Quốc">Cảng Phú Quốc</option>
                <option value="Cảng Tô Châu">Cảng Tô Châu</option>
                <option value="Cảng Nam Du">Cảng Nam Du</option>
                <option value="Cảng Cà Mau">Cảng Cà Mau</option>
                <option value="Cảng Hòn Sơn">Cảng Hòn Sơn</option>
                <option value="Cảng Vũng Tàu">Cảng Vũng Tàu</option>
                <option value="Cảng Trần Đề">Cảng Trần Đề</option>
                <option value="Cảng Cần Thơ">Cảng Cần Thơ</option>
                <option value="Cảng Hồ Mây">Cảng Hồ Mây</option>
                <option value="Cảng Bạch Đằng">Cảng Bạch Đằng</option>
                <option value="Cảng Cần Giờ">Cảng Cần Giờ</option>
                <option value="Cảng Bình Dương">Cảng Bình Dương</option>
                <option value="Cảng Củ Chi">Cảng Củ Chi</option>
                <option value="Cảng Phan Thiết">Cảng Phan Thiết</option>
                <option value="Cảng Phú Quý">Cảng Phú Quý</option>
            </select>
        </div>
    </div>
    <div class="searchBox_item">
        <div class="position-relative">
            <select class="form-select select2 select2-hidden-accessible" name="search_status" onchange="submitForm('formSearch');" data-select2-id="7" tabindex="-1" aria-hidden="true">
                <option value="0" data-select2-id="9">- Tìm theo Trạng thái -</option>
                <option value="1">Chờ xác nhận</option>
                <option value="2">Đã xác nhận Email</option>
                <option value="3">Đã xác nhận Zalo</option>
                <option value="4">Đã cọc</option>
                <option value="5">Đã thanh toán</option>
                <option value="6">Đã gửi vé</option>
                <option value="7">Đã hủy</option>
            </select>
        </div>
    </div>
    <div class="searchBox_item" style="margin-left:auto;text-align:right;">
        <div class="flexBox" style="margin:0;display:inline-block;">
            <div class="input-group input-group-merge">
                <select class="form-select" style="max-width:60px;" tabindex="-1" aria-hidden="true" onchange="settingView('viewShipBooking', this.value);">
                <option value="20">20</option>
                <option value="50" selected="">50</option>
                <option value="100">100</option>
                <option value="200">200</option>
                <option value="500">500</option>
                </select>
                <span class="input-group-text" style="background:#dee2e6;padding:0.5rem 0.75rem !important;">/ tổng <span style="font-weight:700;margin-left:0.5rem;">104</span></span>
            </div>
        </div>
    </div>
    </div>
</form>