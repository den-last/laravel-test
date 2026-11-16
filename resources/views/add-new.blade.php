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
            <a href="{{ route('notes.index') }}" class="logo">Notes</a>
        </div>

    </header>


    <main>
        <div class="_container">

            <h1>Добавить новую</h1>
            <div class="app-wrap _flex">
                <div class="notes _flex-col">
                    @if (session('success'))
                    <div class="alert alert-success">
                        <h2>{{ session('success') }}</h2>
                    </div>
                    @endif


                </div>
                <div class="workspace">
                    <div class="single-note _flex-col">
                        <form action="{{ route('notes.store') }}" method="POST">
                            @csrf
                            <div>
                                <label>Содержание</label>
                                <textarea name="content">{{ old('content') }}</textarea>
                                @error('content')
                                <div>{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label>Источник</label>
                                <input type="text" name="source" value="{{ old('source') }}">
                                @error('source')
                                <div>{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label>Книга</label>
                                <input type="text" name="book" value="{{ old('book') }}">
                                @error('book')
                                <div>{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label>Глава</label>
                                <input type="text" name="chapter" value="{{ old('chapter') }}">
                                @error('chapter')
                                <div>{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label>Стих</label>
                                <input type="text" name="verse" value="{{ old('verse') }}">
                                @error('verse')
                                <div>{{ $message }}</div>
                                @enderror
                            </div>


                            <button type="submit" class="watch">Создать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>