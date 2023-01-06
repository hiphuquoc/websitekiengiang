@extends('layouts.admin')
@section('content')

<div class="titlePage">Danh sách yêu cầu</div>
@include('admin.congTacVien.search')
@include('admin.congTacVien.test', compact('list'))
    
@endsection
@push('scripts-custom')
    <script type="text/javascript">
        function deleteItem(id){
            $.ajax({
                url         : "",
                type        : "GET",
                dataType    : "html",
                data        : { id : id }
            }).done(function(data){
                if(data==true) $('#tourLocation-'+id).remove();
            });
        }

        function submitForm(idForm){
            $('#'+idForm).submit();
        }
    </script>
@endpush