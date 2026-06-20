@props(["trains"])
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
