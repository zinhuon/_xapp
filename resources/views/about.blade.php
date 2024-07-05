<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{  asset('css/styles.css') }}" />
    <title>About</title>
</head>
<body>
    <?php /* @include("parts.header") */ ?>
    <main>
        <h1>会社概要ページ</h1>
        <p>{{ $message}}</p>
    </main>
    <?php /* @include("parts.footer") */ ?>
</body>
</html>