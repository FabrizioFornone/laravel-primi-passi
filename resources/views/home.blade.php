<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>

<body>
    <nav class="container-fluid vh-100 d-flex justify-content-center align-items-center ">
        <div class="text-center">
            <img src="logo/logo.svg" alt="">
            <h1 class="py-3">Benvenuti</h1>
            <ul class="d-flex justify-content-center py-3">
                @foreach ($adepts_list as $adept )
                <li>
                    <a class="px-3" href="#">{{$adept}}</a>
                </li>
                @endforeach
            </ul>
            <div class="py-3">
                <h5>Il {{$loggia}} vi accoglie nella sede di {{$sede}}</h5>
            </div>
        </div>
    </nav>
</body>

</html>