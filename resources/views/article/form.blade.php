@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{  html()->label('Имя', 'name') }} <br>
{{  html()->input('text', 'name') }} <br>
{{  html()->label('Содержание', 'body') }} <br>
{{  html()->textarea('body') }} <br>