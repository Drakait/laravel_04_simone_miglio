<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> DevBlog </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/109fb709db.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <x-navbar></x-navbar>
    {{ $slot }}
    


</body>

</html>
