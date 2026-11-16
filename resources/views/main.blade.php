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
            <h1>Все заметки</h1>
            <a href="{{ route('notes.create') }}" class="watch">Добавить новую заметку</a>
            <a href="{{ route('notes.create') }}" class="watch">Добавить новый тег</a>
            <div class="app-wrap _flex">
                <div class="notes _flex-col">

                    @foreach ($notes as $note)
                        <div class="note">
                            <div class="note-txt">{{ $note->content }}</div>
                            <div class="note-tags _flex">
                                @foreach ($note_tags as $note_tag)
                                    @if ($note_tag->note_id == $note->id)
                                        <div class="tag">{{ $tags[$note_tag->tag_id]->tag_name }}</div>
                                    @endif
                                @endforeach
                            </div>
                            <a href="{{ route('note.show', $note->id) }}" class="watch">Открыть</a>
                        </div>
                    @endforeach

                </div>
                <div class="workspace">
                    <div class="single-note _flex-col">
                        <p class="single-note--id">ID: 1111</p>
                        <p class="single-note--txt">Первая заметка Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Esse deleniti, magnam ea temporibus odio quasi atque eum. Illum vel, assumenda
                            mollitia hic illo numquam incidunt quae placeat veniam, minus facere.</p>
                        <p class="single-note--source">Источник: 3333</p>
                        <p class="single-note--link">Ссылка: 4444</p>
                        <div class="single-note--tags _flex">
                            <div class="tag">55</div>
                            <div class="tag">66</div>
                        </div>
                        <div class="single-note--book">Бытие</div>
                        <div class="single-note--chapter">1</div>
                        <div class="single-note--verses">1</div>
                        <p class="single-note--created">Дата создания: 25.09.26</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
