<div class="headerTop">
   <div class="container">
      <div class="headerTop_item">
         <div class="headerTop_item_list">
            {{-- <a href="#" class="headerTop_item_list_item">
               Tư vấn khách hàng
            </a> --}}
            <div class="headerTop_item_list_item" style="font-size:1rem;">
               Xin chào...! Có phải bạn đang cần dịch vụ Website chất lượng?
            </div>
         </div>
         <div class="headerTop_item_language">
            <div class="headerTop_item_language_item vi"></div>
            <div class="headerTop_item_language_item en"></div>
         </div>
      </div>
      <div class="headerTop_item">
         <div class="headerTop_item_hotline">
            <i class="fa-solid fa-phone"></i>zalo<span>0968 6171 68</span>
         </div>
         <div class="headerTop_item_list">
            {{-- <a href="#" class="headerTop_item_list_item">
               Tư vấn khách hàng
            </a> --}}
            <div class="headerTop_item_list_item js_toggleModalLogin">
               Đăng nhập
            </div>
         </div>
      </div>
      
   </div>
</div>
@push('modal')
   <!-- Form -->
   @include('main.congTacVien.formLogin')
@endpush