<div class="priceBox">
    <div class="container">
        <div class="priceBox_head">
            <h2 id="bang-gia-thiet-ke-website-kien-giang">Bảng giá {{ $item->service->name }}</h2>
            <div class="priceBox_head_desc">Chi tiết tính năng theo từng gói dịch vụ {{ $item->service->name }}</div>
        </div>
        <div class="priceBox_body">
            @foreach($item->service->prices as $item)
                <div class="priceBox_body_item {{ $item->label ?? null }} effectFadeIn">
                    <div class="priceBox_body_item_title">
                        <h3>{{ $item->name ?? null }}</h3> 
                    </div>
                    @if(!empty($item->description))
                        <div class="priceBox_body_item_desc">
                            {{ $item->description }}
                        </div>
                    @endif
                    <div class="priceBox_body_item_price">
                        <div class="priceBox_body_item_price_old">{{ !empty((integer) $item->price_origin) ? number_format($item->price_origin) : null }}</div>
                        @if(!empty((integer) $item->price_origin))
                            @php
                                $unit = null;
                                if(!empty($item->unit)) $unit = ' <span class="highLight" style="color:#333;">/'.$item->unit.'</span>';
                            @endphp
                            <div class="priceBox_body_item_price_new">{!! number_format($item->price_origin*(100-$item->sale_off)/100).$unit !!}</div>
                        @else 
                            <div class="priceBox_body_item_price_new">{{ $item->price_origin }}</div>
                        @endif
                        <div class="priceBox_body_item_price_saleoff">
                            <div class="saleoffBox effectBottomToTop">
                                <img src="/storage/images/giam-gia-1.png" title="thiết kế website {{ ucwords(env('LOCAL_VN')) }} khuyến mãi" alt="thiết kế website {{ ucwords(env('LOCAL_VN')) }} khuyến mãi" />
                                <div class="saleoffBox_number">
                                    {{ $item->sale_off }}% OFF
                                </div>
                                @if(!empty($item->time_sale_off))
                                    <div class="saleoffBox_todate">
                                        {{ $item->time_sale_off }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="priceBox_body_item_list">
                        <div class="priceBox_body_item_list_item" style="text-align:center;font-weight:bold;margin-left:-5rem;font-size:1.1rem;">
                            Đã bao gồm
                        </div>
                        @php
                            $details = preg_split('/\r\n|\r|\n/', $item->detail);
                        @endphp
                        @foreach($details as $detail)
                            <div class="priceBox_body_item_list_item">
                                {!! $detail !!}
                            </div>
                        @endforeach
                    </div>
                    <div class="priceBox_body_item_button">
                        <div class="button" onClick="toggleModalWebsite('formRequestWebsite', {{ $item->id }})">Chọn gói này</div>
                    </div>
                    {{-- <div class="priceBox_body_item_saleoff">
                        <div class="saleoffBox effectBottomToTop">
                            <img src="/storage/images/giam-gia-1.png" title="thiết kế website {{ ucwords(env('LOCAL_VN')) }} khuyến mãi" alt="thiết kế website {{ ucwords(env('LOCAL_VN')) }} khuyến mãi" />
                            <div class="saleoffBox_number">
                                {{ $item->sale_off }}% OFF
                            </div>
                            @if(!empty($item->time_sale_off))
                                <div class="saleoffBox_todate">
                                    {{ $item->time_sale_off }}
                                </div>
                            @endif
                        </div>
                    </div> --}}
                </div>
            @endforeach
        </div>
    </div>
</div>