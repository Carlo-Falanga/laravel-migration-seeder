 @props(["trains"])
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