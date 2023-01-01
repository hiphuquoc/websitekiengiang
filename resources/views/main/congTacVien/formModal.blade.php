<div id="formRequestWebsite" class="formModalBox">
    <form id="formModalSubmit" method="get" style="width:100%;">
        <div class="formModalBox_bg js_toggleModal"></div>
        <div id="js_loadNotice_write" class="formModalBox_box" style="max-width:500px;">
            <div class="formModalBox_box_body">
                <form id="formLogin" method="post">
                    <!-- giao diện form login -->
                    @include('main.congTacVien.formLogin')
                </form>
            </div>
            <div class="formModalBox_box_footer">
                <div class="formModalBox_box_footer_item button" tabindex="3" onClick="submitFormLogin('formLogin')" style="width:100%;border-radius:7px;text-align:center;">
                    Đăng nhập
                </div>
            </div>
        </div>
    </form>
</div>
@push('scriptCustom')
    <script type="text/javascript">
        $('.js_toggleModal').on('click', function(){
            toggleModal('formRequestWebsite');
        })

        function toggleModal(idElement, valueSelect = 1){
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

        function loadNotice(type, idWrite){
            $.ajax({
                url         : '{{ route("main.loadNotice") }}',
                type        : 'get',
                dataType    : 'html',
                data        : {
                    type    : 'success'
                },
                success     : function(data){
                    $('#'+idWrite).html(data);
                }
            });
        }

        /* submit form */
        function submitFormRegistry(idForm){
            const error     = validateForm(idForm);
            if(error.length==0){
                /* tải loading */ 
                loadLoading('js_loadNotice_write');
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
                            loadNotice(response, 'js_loadNotice_write');
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