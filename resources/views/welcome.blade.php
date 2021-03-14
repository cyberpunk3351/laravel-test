<h1>Articles</h1>

<?php
//    echo '<pre>';
//    var_dump($articles);
//    echo '</pre>';
//?>

@foreach($articles as $article)
    <div>
        <h3>{{ $article->title }}</h3>
        <p>{{ $article->description }}</p>
        <p>{{ $article->name }}</p>
        <p>{{ $article->id }}</p>
        <a href="{{ route('article.edit', ['id'=>$article->id]) }}">Редактировать</a>
        <form action="{{ route('article.delete', ['id'=>$article->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Удалить">
        </form>


    </div>

@endforeach
</br>
