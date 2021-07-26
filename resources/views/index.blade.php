<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>キャンプアプリ</title>
</head>
<body>
    <div class="container">
        <h1>キャンプアプリ▲</h1>
        <h2>メニュー</h2>
        <ul>
            @forelse ($posts as $index => $post)
                <li>
                    <a href="/posts/{{ $index }}">
                        {{ $post }}
                    </a>
                </li>
            @empty
                <li>データがありません</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
