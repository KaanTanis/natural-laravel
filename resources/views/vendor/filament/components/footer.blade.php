<div class="filament-main-footer py-4 shrink-0">
{{--    <div class="filament-footer flex items-center justify-center">--}}
{{--        <a href="https://webvogo.com" target="_blank" rel="noopener noreferrer" class="text-gray-300 hover:text-primary-500 transition">--}}
{{--            <img src="{{ asset('/vogo-assets/logo.png') }}" alt="Logo" class="h-7 opacity-25">--}}
{{--        </a>--}}
{{--    </div>--}}

{{--    <div class="filament-footer flex items-center justify-center text-gray-500 py-2 opacity-50">--}}
{{--        <a target="_blank" href="https://webvogo.com">webvogo.com - v{{ config('app.vogo_version') }}</a>--}}
{{--    </div>--}}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let filament = document.getElementsByClassName('filament');

        // Remove the class 'overflow-hidden and padding-right: 0' from the filament tags
        setInterval(function() {
            for (let i = 0; i < filament.length; i++) {
                filament[i].style.paddingRight = '0';
                filament[i].style.overflow = 'visible';
            }
        }, 1000);
    });
</script>
