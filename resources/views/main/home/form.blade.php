<div id="formRequestWebsite" class="formModalBox">
    <div class="formModalBox_bg js_toggleModalWebsite"></div>
    <div class="formModalBox_box">
        <form id="formModalSubmit" method="get" style="width:100%;">
            <!-- hidden -->
            <input type="hidden" name="service_info_id"  value="{{ $item->service->id }}" />
            <div class="formModalBox_box_head">Yêu cầu thiết kế Website</div>
            <div class="formModalBox_box_body">
                <div class="formModalBox_box_body_item">
                    <label class="required">Họ tên</label>
                    <input type="text" name="customer_name" tabindex="1" required />
                </div>
                <div class="formModalBox_box_body_item">
                    <label class="required">Điện thoại</label>
                    <input type="text" name="customer_phone"  tabindex="2" required />
                </div>
                <div class="formModalBox_box_body_item">
                    <label class="required">Gói Website</label>
                    <select id="optionWebsite" name="service_price_id" tabindex="3">
                        @foreach($item->service->prices as $price)
                            @php
                                $option         = $price->name;
                                $numberPrice    = (integer) $price->price_origin;
                                $unit           = !empty($item->unit) ? ' /'.$item->unit : null;
                                if(!empty($numberPrice)) $option .= ' - '.number_format($price->price_origin*(100-$price->sale_off)/100).$unit;
                                if(!empty($price->sale_off)) $option .= ' (đã giảm '.$price->sale_off.'%)';
                            @endphp 
                            <option value="{{ $price->id }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="formModalBox_box_body_item">
                    <label>Mã giảm giá</label>
                    <input type="text" name="code" tabindex="4" />
                </div>
                <div class="formModalBox_box_body_item">
                    <label>Ghi chú</label>
                    <textarea name="customer_note" cols="3" tabindex="5"></textarea>
                </div>
            </div>
            <div class="formModalBox_box_footer">
                <div class="formModalBox_box_footer_item button" tabindex="6" onClick="submitForm('formModalSubmit')">
                    Gửi yêu cầu
                </div>
            </div>
        </form>
    </div>
</div>
@push('scriptCustom')
    <script type="text/javascript">
        $('.js_toggleModalWebsite').on('click', function(){
            toggleModalWebsite('formRequestWebsite');
        })

        function toggleModalWebsite(idElement, valueSelect = 1){
            const element   = $('#'+idElement);
            const displayE  = element.css('display');
            if(displayE=='none'){
                /* điều chỉnh lại selected */
                $('#optionWebsite').children().each(function(){
                    $(this).removeAttr('selected');
                    if($(this).val()==valueSelect) $(this).attr('selected', true);
                })
                /* hiển thị */
                element.css('display', 'flex');
                $('body').css('overflow', 'hidden');
                $('#js_blurBackground').addClass('blurBackground');
            }else {
                element.css('display', 'none');
                $('body').css('overflow', 'unset');
                $('#js_blurBackground').removeClass('blurBackground');
            }
        }

        /* submit form */
        function submitForm(idForm){
            const error     = validateForm(idForm);
            if(error.length==0){
                /* tải loading */ 
                loadLoading(idForm);
                /* lấy dữ liệu truyền đi */
                var data    = $('#'+idForm).serializeArray();
                $.ajax({
                    url         : '{{ route("ajax.submitFormRequestWebsite") }}',
                    type        : 'post',
                    dataType    : 'html',
                    data        : {
                        '_token'    : '{{ csrf_token() }}',
                        data        : data
                    },
                    success     : function(response){
                        setTimeout(() => {
                            /* thông báo */
                            $('#'+idForm).html(response);
                        }, 500);
                    }
                });
            }else {
                $.each(error, function(index, value){
                    const input = $('#'+idForm).find('[name='+value.name+']');
                    input.attr('placeholder', value.notice).css('border', '1px solid red');
                });
            }
        }
        /* validate form */
        function validateForm(idForm){
            let error       = [];
            /* input required không được bỏ trống */
            $('#'+idForm).find('input[required]').each(function(){
                /* đưa vào mảng */
                if($(this).val()==''){
                    const errorItem = [];
                    errorItem['name']       = $(this).attr('name');
                    errorItem['notice']     = 'Không được để trống trường này';
                    error.push(errorItem);
                }
            });
            /* validate số điện thoại => bắt đầu bằng số 0 và 10 số */
            // var phone       = $('#phone').val();
            // var phoneRegex  = /^0\d{9}$/;
            // if (!phoneRegex.test(phone)) {
            //     const errorItem         = [];
            //     errorItem['name']       = 'phone';
            //     errorItem['notice']     = 'Điện thoại không hợp lệ';
            //     error.push(errorItem);
            // }
            return error;
        }

        function loadLoading(idWrite){
            $.ajax({
                url         : '{{ route("ajax.loadLoading") }}',
                type        : 'get',
                dataType    : 'html',
                success     : function(response){
                    $('#'+idWrite).html(response);
                }
            });
        }
    </script>
@endpush