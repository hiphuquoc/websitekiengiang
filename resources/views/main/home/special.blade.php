@php
    $arrayData = [
        [
            'icon'          => '<i class="fa-brands fa-google"></i>',
            'color'         => 'green',
            'title'         => 'Tất cả trong một',
            'description'   => 'Dịch vụ <strong>thiết kế Website</strong> của chúng tôi đã bao gồm: tư vấn chọn tên miền thương hiệu phù hợp, đăng ký và quản lí hosting, SSL, Content, Banner, Cài đặt Google Analytics, Google Console, Backup định kỳ, vv. (có thể tùy chọn trừ ra)'
        ],
        [
            'icon'          => '<i class="fa-regular fa-lightbulb"></i>',
            'color'         => 'yellow',
            'title'         => 'Website là ý tưởng của bạn',
            'description'   => 'Nếu bạn có bất kỳ ý tưởng hoặc mẫu thiết kế nào, Chúng tôi sẽ luôn sẵn sàng tiếp thu, tư vấn và phát triển thêm để hiện thực hóa ý tưởng của bạn và tạo ra sản phẩm phù hợp nhất với nhu cầu của bạn.'
        ],
        [
            'icon'          => '<i class="fa-solid fa-wand-magic-sparkles"></i>',
            'title'         => 'Giao diện đẹp, phù hợp',
            'color'         => 'cyan',
            'description'   => 'Thiết kế riêng biệt chuẩn Ux/Ui phù hợp từng mô hình, ý tưởng kinh doanh và yêu cầu của bạn. Tạo ấn tượng tốt, chuyên nghiệp đối với khách hàng và đối tác. Tăng khả năng chốt đơn.'
        ],
        [
            'icon'          => '<i class="fa-solid fa-rocket"></i>',
            'color'         => 'red',
            'title'         => 'Tốc độ nhanh',
            'description'   => 'Được xây dựng trên nền tảng công nghệ hiện đại, kỹ thuật mới nhất, code được tối ưu tối đa nên gọn, nhẹ. Website hoạt động hiệu quả và tốc độ tải trang cực nhanh.'
        ],
        [
            'icon'          => '<i class="fa-solid fa-mobile-screen-button"></i>',
            'color'         => 'blue',
            'title'         => 'Tương thích mọi nền tảng',
            'description'   => 'Tối ưu trải nghiệm người dùng, website hoạt động tốt trên mọi nền tảng và tương thích trên tất cả các thiết bị Desktop, Mobile, Tablet, vv.'
        ],
        [
            'icon'          => '<i class="fa-brands fa-google"></i>',
            'color'         => 'green',
            'title'         => 'Website chuẩn SEO',
            'description'   => 'Website thân thiện với các bộ máy tìm kiếm Google, Bing, Yahoo, vv. Được tối ưu theo checklist trên 40 tiêu chuẩn Seo mới nhất. Đảm báo khả năng cạnh tranh và dễ dàng vượt qua đối thủ của bạn.'
        ],
        [
            'icon'          => '<i class="fa-solid fa-shield"></i>',
            'color'         => 'orange',
            'title'         => 'Ổn định cao, bảo mật',
            'description'   => 'Website được xây dựng với mức độ bảo mật cao và khả năng vận hành ổn định lâu dài để bạn có thể kinh doanh mà không có bất kỳ sự gián đoạn nào.'
        ],
        [
            'icon'          => '<i class="fa-solid fa-wrench"></i>',
            'color'         => 'pink',
            'title'         => 'Hỗ trợ trọn đời',
            'description'   => 'Chúng tôi cam kết sẽ Hỗ trợ - Bảo trì - Bảo hành Website trọn đời đối với các tính năng chốt sau bàn giao và sẵn sàng phát triển thêm tính năng mới bạn cần với những ưu đãi dành riêng "khách hàng thân thiết".'
        ],
        [
            'icon'          => '<i class="fa-solid fa-seedling"></i>',
            'color'         => 'purple',
            'title'         => 'Ưu đãi dịch vụ đi kèm',
            'description'   => 'Có nhiều tùy chọn các gói dịch vụ chăm sóc Website, Seo Google, Xây dựng /chăm sóc Social, thiết kế bannner /ấn phẩm quảng cáo, thiết kế bộ nhận diện thương hiệu, vv. Để bạn có thể tập trung cải thiện sản phẩm và phát triển kinh doanh.'
        ],
    ]
@endphp
<div class="specialBox">
    <div class="container">
        <div class="specialBox_head">
            <h2>Dịch vụ thiết kế Website {{ ucwords(env('LOCAL_VN')) }} có gì?</h2>
            <div class="specialBox_head_desc">Các tính năng, gói hỗ trợ có trong tất cả các Website của chúng tôi.</div>
        </div>
        <div class="specialBox_body effectFadeIn">
            @foreach($arrayData as $special)
                <div class="specialBox_body_item">
                    <div class="specialBox_body_item_icon {{ $special['color'] }}">
                        {!! $special['icon'] !!}
                    </div>
                    <div class="specialBox_body_item_title">
                        <h3>{!! $special['title'] !!}</h3>
                    </div>
                    <div class="specialBox_body_item_content">
                        {!! $special['description'] !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@push('scriptCustom')
    <script type="text/javascript">
        

    </script>

@endpush