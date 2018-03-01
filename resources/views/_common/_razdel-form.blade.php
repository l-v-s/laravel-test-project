<form action="/prom-razdel{{ isset($razdel)? '/'.$razdel->id:'' }}" method="post">
        {{csrf_field()}}

        {{ isset($razdel)? method_field('patch'):'' }}

    <did class="form-group">
        <label for="name">Название: *</label>
        <input type="text" class="form-control" name="name" id="name"  value="{{ isset($razdel->name)? $razdel->name:'' }}">
    </did>

        <div class="form-group">
            <label for="parent_razdel_id">К какому разделу относится:</label>
            <select class="custom-select" name="parent_razdel_id" id="parent_razdel_id">
                <option selected value="0">Основной раздел</option>

                <?php

                $razdels = DB::table('razdels')->get()->where('parent_razdel_id','0');
                ?>
                @foreach($razdels as $db_razdel)
                    <option value="{{ $db_razdel->id }}">{{ $db_razdel->name }}</option>

                @endforeach
            </select>
        </div>

    <div class="form-group">
        <label for="opis">Описание: </label>
        <textarea name="opis" id="opis" cols="20" rows="3" class="form-control">{{ isset($razdel->opis)? $razdel->opis:'' }}</textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">{{ isset($razdel)? 'Сохранить':'Добавить' }}</button>

    </div>

</form>
