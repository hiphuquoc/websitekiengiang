@extends('layouts.main')
@push('headCustom')

@endpush
@section('content')
    <div class="pageContent" style="overflow: hidden;">

        <img src="{{ Storage::url('images/banner-cong-tac-vien-1.png') }}" alt="banner cộng tác viên của website kiên giang" title="banner cộng tác viên của website kiên giang" />
        
        <!-- Nội dung -->
        <div class="sectionBox">
            <div class="container">
                @include('main.congTacVien.content')
            </div>
        </div>

        <!-- tocContent main -->
        <div id="tocContentMain"></div>
        <!-- Form -->
        @include('main.home.form')
    </div>
@endsection
@push('scriptCustom')
    <script type="text/javascript">
        
    </script>
@endpush