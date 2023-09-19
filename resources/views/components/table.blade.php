<!-- component -->

    <div class="p-6">
        <!-- Table -->
        <div class="w-full  mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Apiarios</h2>
            </header>

            <!-- component -->

                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Project</th>
                            <th class="py-3 px-6 text-left">Client</th>
                            <th class="py-3 px-6 text-center">Users</th>
                            <th class="py-3 px-6 text-center">Status</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @forelse ($apiaries as $apiary )
                        <tr>
                            <td>{{$apiary->name}}</td>
                            <td>{{$apiary->location}}</td>
                            <td class="flex items-center justify-center space-x-2">
                                <form action="{{ route('apiaries.destroy', $apiary->id) }}" method="POST">
                                    <a href="{{ route('apiaries.show', $apiary->id) }}" class="opacity-50 hover:opacity-100"><span
                                            class="material-icons cursor-pointer "
                                            title="Detalles">visibility</span></a>
                                    @csrf
                                    @method('DELETE')
                                    <a class="box-content" href="{{ route('apiaries.edit', $apiary->id) }}"><span
                                        class="material-icons cursor-pointer opacity-50 hover:opacity-100"
                                        title="Editar">edit</span></a>
                                    <input
                                        class="box-content cursor-pointer material-icons opacity-50 hover:opacity-100"
                                        type="submit" value="delete"
                                        onclick="return confirm('Está por eliminar el apiario: {{ $apiary->name }}')">

                                </form>
                            </td>
                        </tr>
                        @empty
                            <p>Sin resultados</p>
                        @endforelse


                    </tbody>
                </table>






            {{-- <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Name</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Email</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Spent</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Country</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg" width="40" height="40" alt="Alex Shatov"></div>
                                        <div class="font-medium text-gray-800">Alex Shatov</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">alexshatov@gmail.com</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">$2,890.66</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">??</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> --}}
        </div>
    </div>


