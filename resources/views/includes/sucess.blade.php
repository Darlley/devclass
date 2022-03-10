@if(session()->has('message'))
    <span style="color: #00d000;">{{ session('message') }}</span>
@endif