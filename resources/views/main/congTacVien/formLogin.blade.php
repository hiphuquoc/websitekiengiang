<div id="js_toggleModalLogin_idWrite" class="formModalBox">
    
    <div class="formModalBox_bg js_toggleModalLogin"></div>
    <div class="formModalBox_box" style="max-width:500px;">
        <form id="formLogin" method="get" style="width:100%;">
            <div class="formModalBox_box_body">
                <!-- Form Login -->
                <div class="formLogin">
                    <div class="formLogin_logo">
                        <img src="/storage/images/logo-color-full.png" alt="logo website kiên giang" title="logo website kiên giang" />
                    </div>
                    <div class="formLogin_text">
                        <div class="formLogin_text_title">Chào mừng bạn! 👋</div>
                        <div class="formLogin_text_description">Đây khu vực dành cho Cộng tác viên. Vui lòng đăng nhập trước khi thao tác!</div>
                    </div>
                    <div class="formLogin_form">
                        <div class="formLogin_form_item">
                            <label class="required">Số điện thoại</label>
                            <input type="text" name="phone" tabindex="1" required />
                        </div>
                        <div class="formLogin_form_item">
                            <label class="required">Mật khẩu</label>
                            <div class="inputWithIcon" >
                                <input type="password" name="password"  tabindex="2" required />
                            </div>
                        </div>
                        <div id="js_noticeLogin" class="formLogin_form_item" style="display:none;color:red;">
                            <!-- thông báo lỗi -->
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="formModalBox_box_footer">
                <div class="formModalBox_box_footer_item button" tabindex="3" onClick="submitFormLogin('formLogin')" style="width:100%;border-radius:7px;text-align:center;">
                    Đăng nhập
                </div>
            </div>
        </form>
    </div>

</div>
@push('scriptCustom')
    <script type="text/javascript">
        $('.js_toggleModalLogin').on('click', function(){
            toggleModalLogin('js_toggleModalLogin_idWrite');
        })

        function toggleModalLogin(idElement, valueSelect = 1){
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
        function submitFormLogin(idForm){
            const error     = validateFormLogin(idForm);
            if(error.length==0){
                /* tải loading */ 
                // loadLoading(idForm);
                /* lấy dữ liệu truyền đi */
                var data    = $('#'+idForm).serializeArray();
                $.ajax({
                    url         : '{{ route("ajax.loginCtv") }}',
                    type        : 'post',
                    dataType    : 'html',
                    data        : {
                        '_token'    : '{{ csrf_token() }}',
                        data        : data
                    },
                    success     : function(response){
                        if(response==true){
                            window.location.href = "/";
                        }else {
                            $('#js_noticeLogin').html('Số điện thoại và mật khẩu không khớp!').css('display', 'block');
                        }
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
        function validateFormLogin(idForm){
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