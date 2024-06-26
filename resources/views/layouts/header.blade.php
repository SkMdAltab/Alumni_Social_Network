<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @stack('title')
    @vite('resources/css/app.css')
    <style>
        /* width */
        /* ::-webkit-scrollbar {
            width: 15px;
        } */

        /* Track */
        /* ::-webkit-scrollbar-track {
            background: #ff0000;
        } */

        /* Handle */
        /* ::-webkit-scrollbar-thumb {
            background: #00ff26;
            border-radius: 1px;
        } */

        /* Handle on hover */
        /* ::-webkit-scrollbar-thumb:hover {
            background: #1900ff;
        } */


        /* width */
        ::-webkit-scrollbar {
            width: 3px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #454545;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #00aeff;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #0062ff;
        }
    </style>
</head>

<body class="font-sans bg-gray-100">
    <x-Navbar />
