@extends('layouts.main')
@push('headCustom')

@endpush
@section('content')
    <!-- === START:: Header Top === -->
    @include('main.snippets.headerTop')
    <!-- Header Main -->
    @include('main.snippets.headerMain')
    <!-- Nội dung -->
    <div class="pageContent" style="overflow: hidden;">
        <!-- Ảnh đại diện trang -->
        <img class="hide-766" src="{{ Storage::url('images/banner-cong-tac-vien-1.png') }}" alt="banner cộng tác viên của website kiên giang" title="banner cộng tác viên của website kiên giang" />
        <img class="show-766" src="{{ Storage::url('images/banner-cong-tac-vien-mobile-1.png') }}" alt="banner cộng tác viên của website kiên giang" title="banner cộng tác viên của website kiên giang" />
        <!-- Nội dung -->
        <div class="sectionBox">
            <div class="container">
                @include('main.congTacVien.content')
            </div>
        </div>
    </div>
@endsection
@push('scriptCustom')
    <script type="text/javascript">
        
    </script>
@endpush