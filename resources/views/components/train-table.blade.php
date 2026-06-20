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

                   <x-train-table-values :trains="$trains"/>

                </tbody>
            </table>
        </div>
