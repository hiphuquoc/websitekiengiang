@extends('layouts.main')
@push('headCustom')

@endpush
@section('content')
    
    <!-- Nội dung -->
    <div id="js_contentBox" class="contentBox" style="overflow:hidden;">
        <!-- Header Main -->
        @include('main.chamSocWebsite.backgroundHead', ['url' => Storage::url('images/banner-cong-tac-vien-1.png')])
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