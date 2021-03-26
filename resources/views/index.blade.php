<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALBUMS</title>
</head>
<body>

    @foreach ($albums as $album)

        <div>Name: {{$album->album_name}}</div><br>
        <div>Group: {{$album->group_name}}</div><br>
        <div>Genre: {{$album->genre}}</div><br>
        <div>Songs number: {{$album->songs_number}}</div><br>
        <div>Year: {{$album->year}}</div><br><br><br>

    @endforeach

</body>
</html>
