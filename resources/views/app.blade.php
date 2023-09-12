<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @inertiaHead
    @vite(['resources/scripts/main.ts'])
    <title>The Financial Fighters Crew</title>
    <style>
        li {
            border-radius: 4px;
            padding: 1px 8px;
            font-weight: 400;
        }

        li:hover {
            /* color: #66A7F7; */
            /* background-color: #66A7F7; */
            color: #66a7f7;
        }
    </style>
</head>

<body class="bg-[#F8F8F9]">
    @inertia
</body>

</html>
