<form action="/providers/razdels{{ isset($razdel)? '/'.$razdel->id:'' }}" method="post">
        {{csrf_field()}}

        {{ isset($razdel)? method_field('patch'):'' }}

    <table border="0" width="90%">
        <tr>
            <td class="form-group">
                <label for="name">Название: *</label><br>
                <input type="text"  size="60" name="name" id="name"  value="{{ isset($razdel->name)? $razdel->name:'' }}">

            </td>
            <td width="5%">

            </td>
            <td class="form-group">
                <label for="position">Позиция в списке:</label>
                <br>
                <input type="text" size=4 name="position" id="position"  value="{{ isset($razdel->position)? $razdel->position:'' }}">
                (чем больше число, тем выше раздел в списке)


            </td>
        </tr>

        <tr>
            <td class="form-group" colspan="3">
                <label for="parent_id">К&nbsp;какому&nbsp;разделу&nbsp;относится:</label>

                <select class="custom-select" name="parent_id" id="parent_razdel_id">
                    <option value="0">Основной раздел</option>

                    <?php

                    $razdels = DB::table('providers_razdels')->get()->where('parent_id','0');
                    ?>
                    @foreach($razdels as $db_razdel)
                        <option value="{{ $db_razdel->id }}" >{{ $db_razdel->name }}</option>

                    @endforeach
                </select>

            </td>
        </tr>
        <tr>
            <td >
                <label for="status">Статус: </label>
                &nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="form-check-inline" {{ (empty($razdel->status) || $razdel->status==1)?'checked':'' }} ="status" id="status" value="1" type="radio">
                    Показывать

                <input class="form-check-inline" name="status" {{ ((isset($razdel->status) && $razdel->status == 0))?'checked':'' }} id="status" value="0" type="radio">
                    Скрыть

                <input class="form-check-inline" name="status"  {{ ((isset($razdel->status) && $razdel->status == "-1"))?'checked':'' }} id="status" value="-1" type="radio">
                <small>    Удалить</small>


            </td>

            <td width="5%">

            </td>
            <td class="form-check-inline">

                <label for="color">Цвет: </label>
                <br>

                <input class="form-check-inline" name="color" id="color" value="" type="radio" {{ (empty($razdel->color))?'checked':'' }}>
                нет
                <input class="form-check-inline" name="color" id="color" value="yellow" type="radio" {{ ((isset($razdel->color) && $razdel->color == "yellow"))?'checked':'' }}>
                <font color="yellow"> Желтый</font>
                <input class="form-check-inline" name="color" id="color" value="green" type="radio" {{ ((isset($razdel->color) && $razdel->color == "green"))?'checked':'' }}>
                <font color="green">Зеленый</font>
                <input class="form-check-inline" name="color" id="color" value="orange" type="radio" {{ ((isset($razdel->color) && $razdel->color == "orange"))?'checked':'' }}>
                <font color="orange">Оранжевый</font>
                <input class="form-check-inline" name="color" id="color" value="red" type="radio" {{ ((isset($razdel->color) && $razdel->color == "red"))?'checked':'' }}>
                <font color="red">Красный</font>

            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="form-group">
                    <label for="opis">Описание: </label>
                    <textarea name="opis" id="opis" cols="20" rows="2" class="form-control">{{ isset($razdel->opis)? $razdel->opis:'' }}</textarea>
                </div>

            </td>
        </tr>
    </table>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">{{ isset($razdel)? 'Сохранить':'Добавить' }}</button>

    </div>

</form>
