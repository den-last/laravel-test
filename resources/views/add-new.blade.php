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
            
            <h1>Добавить новую</h1>
            <div class="app-wrap _flex">
                <div class="notes _flex-col">

                    

                </div>
                <div class="workspace">
                    <div class="single-note _flex-col">
                        1111
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
