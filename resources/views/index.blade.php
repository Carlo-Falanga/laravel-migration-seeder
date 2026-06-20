@php
    $time = now() -> format("H:i");
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
        <div class="table-responsive shadow rounded overflow-hidden">
            <table class="table table-dark table-hover align-middle mb-0">
                <thead class="table-warning text-dark">
                    <tr>
                        <th scope="col">Treno</th>
                        <th scope="col">Partenza</th>
                        <th scope="col">Arrivo</th>
                        <th scope="col" class="text-center">Orario partenza</th>
                        <th scope="col" class="text-center">Orario arrivo</th>
                        <th scope="col" class="text-center">Carrozze</th>
                        <th scope="col" class="text-center">Stato</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($trains as $train)
                        
                    <tr>
                        <td class="fw-bold">{{$train->train_code}}</td>
                        <td>{{$train->departure_station}}</td>
                        <td>{{$train->arrival_station}}</td>
                        <td class="text-center font-monospace">{{$train->departure_time}}</td>
                        <td class="text-center font-monospace">{{$train->arrival_time}}</td>
                        <td class="text-center">{{$train->total_carriages}}</td>
                        <td class="text-center">
                            @if ($train->cancelled)
                            <span class="badge bg-danger">
                                <i class="bi bi-x-circle me-1"></i>Cancellato
                            </span>
                            @elseIf($train->on_time)

                            <span class="badge bg-success">
                                <i class="bi bi-check-circle me-1"></i>In orario
                            </span>

                            @else
                              <span class="badge bg-warning text-dark">
                                <i class="bi bi-exclamation-triangle me-1"></i>In ritardo
                            </span>
                               
                            @endif

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
