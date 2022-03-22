<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>

    <form action="{{ route('contact.post') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="name" id="" placeholder="name">
        </div>

        <div>
            <input type="email" name="email" id="" placeholder="email">
        </div>

        <div>
            <textarea name="text" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>
