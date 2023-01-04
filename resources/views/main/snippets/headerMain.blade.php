<div class="headerMain">
   <div class="container">
      <div class="headerMain_logo">
         <a href="/" class="logoMain" aria-label="Trang chủ thiết kế Website {{ env('LOCAL_VN') }}">
            @php
               $titlePage = null;
               if(!empty($item)&&$item->slug==null) $titlePage = '<h1 style="display:none;">Trang chủ Thiết kế Website '.env('LOCAL_VN').'</h1>';
            @endphp
            {!! $titlePage !!}
         </a>
      </div>
      <!-- header main desktop -->
      <div class="hide-990 headerMain_item">
         @php
            $listMenu = [
               [
                  'name'         => 'Thiết kế website',
                  'url'          => '/',
                  'label'        => 'Thiết kế Website '.env('LOCAL_VN')
               ],
               [
                  'name'        => 'Chăm sóc website',
                  'url'          => '/cham-soc-website-'.env('LOCAL_URL'),
                  'label'        => 'Chăm sóc Website '.env('LOCAL_VN')
               ]
            ];
         @endphp
         <ul style="justify-content:flex-end;">
            @foreach($listMenu as $itemMenu)
               @php
                   $active = null;
                   if(Request::getRequestUri()==$itemMenu['url']) $active = 'active';
               @endphp
               <li>
                  <div>
                     <a href="{{ $itemMenu['url'] }}" class="{{ $active }}" title="{{ $itemMenu['label'] }}" aria-label="{{ $itemMenu['label'] }}">{{ $itemMenu['name'] }}</a>
                  </div>
               </li>
            @endforeach
            <li>
               <div>
                  <a href="#lien-he-thiet-ke-website-{{ env('LOCAL_URL') }}" title="liên hệ thiết kế website {{ env('LOCAL_VN') }}">Liên hệ</a>
               </div>
            </li>
            {{-- <li>
               <div>
                  <i class="fa-solid fa-bars" style="font-size:1.4rem;margin-top:0.25rem;"></i>
               </div>
               <div class="normalMenu" style="margin-right:1.5rem;right:0;">
                  <ul>
                     <li>
                        <a href="/lien-he-Website {{ env('LOCAL_VN') }}" title="Liên hệ Website {{ env('LOCAL_VN') }}">
                           <div>Liên hệ</div>
                        </a>
                     </li>
                  </ul>
               </div>
            </li> --}}
         </ul>
      </div>
      <!-- header main mobile -->
      {{-- <div class="show-990 headerMain_item" onClick="toggleMenuMobile('navMobile')">
         <div style="padding:0.5rem;">
            Dịch vụ
         </div>
      </div> --}}
      <div class="show-990 headerMain_item" onClick="toggleMenuMobile('navMobile')">
         <div style="padding:0.5rem;">
            <i class="fa-solid fa-bars" style="font-size:1.4rem;margin-top:0.25rem;"></i>
         </div>
      </div>
   </div>
</div>
@push('modal')
   @include('main.snippets.menuMobile')

@endpush