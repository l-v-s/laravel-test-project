<form action="/products{{ isset($product)? '/'.$product->id:'' }}" method="post">
        {{csrf_field()}}

        {{ isset($product)? method_field('patch'):'' }}

    <did class="form-group">
        <label for="name">Название: *</label>
        <input type="text" class="form-control" name="name" id="name"  value="{{ isset($product->name)? $product->name:'' }}">
    </did>

        <div class="form-group">
            <label for="razdel">К какому разделу относится:</label>
            <select class="custom-select" name="razdel" id="razdel">
                <option value="0">Основной раздел</option>

                <?php

                $razdels = DB::table('providers_razdels')->where('status','1')->orderBy('position','desc')->orderBy('id','asc')->get();
                ?>
                @foreach($razdels as $db_razdel)
                    <option value="{{ $db_razdel->id }}"

                    @if (isset($razdel))
                        {!!   ($db_razdel->id == $razdel->parent_id)?' selected':'' !!}

                            @endif
                    >{{ $db_razdel->name }}
                    </option>

                @endforeach
            </select>

        </div>

    <div class="form-group">
        <label for="specification">Тех. характеристики: </label>
        <textarea name="specification" id="specification" cols="20" rows="2" class="form-control">{{ isset($product->specification)? $product->specification:'' }}</textarea>
    </div>

    <div class="form-group">
        <label for="comment">Комментарии: </label>
        <textarea name="comment" id="comment" cols="20" rows="2" class="form-control">{{ isset($product->comment)? $product->comment:'' }}</textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">{{ isset($razdel)? 'Сохранить':'Добавить' }}</button>

    </div>

</form>
