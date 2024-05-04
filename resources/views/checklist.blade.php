<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist</title>
    @vite('resources/css/app.css')
</head>

<body class="container p-8">
    <h1 class="text-3xl font-bold">737 Statup Procedure</h1>
    <p class="my-2">This is my checklist to start the PMDG 737 in Microsoft Flight Simulator.</p>
    @foreach ($checklist as $section => $items)
        <h2 class="my-2 text-lg font-bold">{{ $section }}</h2>

        <ul class="my-8">
            @foreach ($items as $item)
            <li class="flex my-2">
                <input class="mr-2 min-h-6 min-w-6" type="checkbox" value="{{ $item }}">
                <span>{{ $item }}<span>
            </li>
        @endforeach

    </ul>
    @endforeach
    <input type="button" value="Clear All" class="w-48 border bg-red-600 rounded text-white px-5 py-3" onclick="clearChecklist()">
    <input type="button" value="Check All" class="w-48 border bg-blue-600 rounded text-white px-5 py-3" onclick="populateChecklist()">

    <script>
        function clearChecklist() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        }
        function populateChecklist() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = true;
            });
        }
    </script>

</html>