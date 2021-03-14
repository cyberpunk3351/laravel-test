<form action="{{ route('article.update', ['id'=>$articles->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <h3>Редактировать:</h3>
    <div>
        <input type="text" name="title" required value="{{ $articles->title }}">
    </div>
    <div>
        <textarea name="description" rows="10" required>{{ $articles->description }}</textarea>
    </div>
    <input type="submit" value="создать">
</form>
