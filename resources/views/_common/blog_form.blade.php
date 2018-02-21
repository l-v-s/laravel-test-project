
<form action="/post{{ isset($post)? '/'.$post->id:'' }}" method="post">
    {{csrf_field()}}

    {{ isset($post)? method_field('patch'):'' }}

    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{ isset($post->title)? $post->title:'' }}">
    </div>

    <div class="form-group">
        <label for="alias">Alias</label>
        <input class="form-control" type="text" name="alias" id="alias" value="{{ isset($post->alias)? $post->alias:'' }}">
    </div>

    <div class="form-group">
        <label for="intro">Intro</label>
        <textarea class="form-control" type="text" name="intro" id="intro">{{ isset($post->intro)? $post->intro:'' }}</textarea>
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" type="text" name="body" id="body"> {{ isset($post->body)? $post->body:'' }} </textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">{{ isset($post)? 'Update':'Post' }}</button>
    </div>
</form>