@if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{ !empty($error)? $error: 'неизвестная ошибка' }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
