<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thanks</title>
    <link rel="stylesheet" href="{{asset('css/thanks.css')}}"/>
</head>
<body>
    <from class='from' action="/index.blade.php" method="post">
        @csrf
    <div class="thank">
        <div class="thank__title">
            <div class="thank__img">Thank you</div>
            <h2 class="thank__title--item">お問い合わせありがとうございました</h2>
        </div>
    </div>
        <div class="thank__button">
            <button class="thank__button-submit" onclick="location.href='./'" method="post">HOME</button>
        </div>
     </from>
</body>
</html>