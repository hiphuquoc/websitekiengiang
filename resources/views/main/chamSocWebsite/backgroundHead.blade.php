<div id="js_setHeightBox_box" class="backgroundHead" style="background:url('{{ $url ?? null }}') no-repeat;background-size:100% 100%;">
    <!-- === START:: Header Main === -->
        @include('main.snippets.headerMain')
    <!-- === END:: Header Main === -->
</div>
@push('scriptCustom')
	<script type="text/javascript">
		setHeightBox('js_setHeightBox_box', 0.18229);
        $(window).resize(function(){
            setHeightBox('js_setHeightBox_box', 0.18229);
        });
		function setHeightBox(idBox, ratio){
            const valueWidth    = $('#'+idBox).innerWidth();
            const valueHeight   = parseInt(valueWidth)*ratio;
            $('#'+idBox).css('height', valueHeight+'px');
        }
	</script>
@endpush