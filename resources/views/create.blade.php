<form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <h3>Создать:</h3>
    <div>
        <input type="text" name="title" required>
    </div>
    <div>
        <textarea name="description" rows="10" required></textarea>
    </div>
    <input type="submit" value="создать">
</form>
