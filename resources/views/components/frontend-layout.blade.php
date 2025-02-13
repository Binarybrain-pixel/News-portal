<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .container {
            width: 80%;
            margin: auto;
        }
    </style>
</head>

<body>

    <header>
        <div class="container flex justify-between items-center">
            
            <div>
                <img class="h-[100px] " src="http://jawaaf.com/storage/01JF6CJYGS53X1S7DZ5XKFC705.png" alt="company logo">
            </div>

            <div class="text-blue-800">
                {{ nepalidate(now()) }}
                
                    <img class="h-[20px]" src="http://jawaaf.com/frontend/images/redline.png" alt="underline">
            </div>

        </div>
        <x-frontend-navbar />
    </header>
    <main>



        {{ $slot }}


    </main>
    <footer></footer>


</body>

</html>
