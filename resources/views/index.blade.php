@php
 $time = now() -> format("H:i:s")
@endphp

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabellone Treni</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">
</head>
<body class="bg-dark text-light">

    <div class="container py-4">

        {{-- Intestazione tabellone --}}
        <header class="d-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0">
                <i class="bi bi-train-front me-2"></i>Partenze
            </h1>
            <span class="badge bg-warning text-dark fs-6">
                <i class="bi bi-clock me-1"></i>{{ $time }}
            </span>
        </header>

        {{-- Tabellone --}}
        <x-train-table :trains="$trains"/>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
