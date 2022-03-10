@if ($errors)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li style="color: rgb(255, 68, 0);">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif