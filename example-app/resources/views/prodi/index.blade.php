<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prodi</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script type="text/javascript" src="{{ asset('assets') }}/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>UMDP</h1>
    <h2>Program studi</h2>
    <ul>
    @foreach($prodi as $item)
        <li>{{$item["nama"]}}{{$istem ["singkatan"]}} {{$item["fakultas"]["nama"]}}</li>
    @endforeach
    </ul>
</body>
</html>