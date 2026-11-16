<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Notes</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="flex-col">
    <header class="header">
        <div class="_container">
            <a href="{{ route('notes.index') }}" class="logo" >Notes</a>
        </div>
    </header>

    
    <main>
        <div class="_container">
            
            <h1>Заметка {{ $note->id }}</h1>
            <div class="app-wrap _flex">
                <div class="notes _flex-col">

                    

                </div>
                <div class="workspace">
                    <div class="single-note _flex-col">
                        <p class="single-note--id">ID: {{ $note->id }}</p>
                        <p class="single-note--txt">{{ $note->content }}</p>
                        <p class="single-note--source">Источник: {{ $note->source }}</p>
                        {{-- <p class="single-note--link">Ссылка: 4444</p> --}}
                        <div class="single-note--tags _flex">
                            <div class="tag">55</div>
                            <div class="tag">66</div>
                        </div>
                        <div class="single-note--book">Книга: {{ $note->book }}</div>
                        <div class="single-note--chapter">Глава: {{ $note->chapter }}</div>
                        <div class="single-note--verses">Стихи:{{ $note->verse }}</div>
                        <p class="single-note--created">Дата создания: {{ $note->created_at }}</p>
                        <a href="#" class="change">Изменить</a>
                        <a href="#" class="delete">Удалить</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
