@extends('layouts.main')
@push('headCustom')

@endpush
@section('content')
    
    <!-- Nội dung -->
    <div id="js_contentBox" class="contentBox" style="overflow:hidden;">
        <!-- Header Main -->
        @include('main.chamSocWebsite.backgroundHead', [
            'url'       => Storage::url('images/banner-cong-tac-vien-1.png'),
            'content'   => '<div class="backgroundHead_content">
                                <div class="container">
                                    <div class="backgroundHead_content_title">
                                        Đột phá thu nhập
                                    </div>
                                    <div class="backgroundHead_content_textBox">
                                        Cùng Website Kiên Giang 
                                    </div>
                                </div>
                            </div>'
        ])
        <!-- Nội dung -->
        <div class="sectionBox">
            <div class="container">
                @include('main.congTacVien.content')
            </div>
        </div>
    </div>
@endsection
@push('modal')
    <!-- Form -->
    @include('main.congTacVien.formLogin')
@endpush
@push('scriptCustom')
    <script type="text/javascript">
        
    </script>
@endpush