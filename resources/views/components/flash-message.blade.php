@if(session()->has('message'))

<div data="{open:false}" x-init="{setTimeout() => show = false,3000}" x-show="show" class="fixed top-0 left-1/2 transform bg-laravel px-48 py-3 text-white -traslate-x-1/2">
    <p>
        {{ session('message') }}
    </p>
</div>
@endif