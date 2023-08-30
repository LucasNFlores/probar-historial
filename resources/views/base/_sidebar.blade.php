
        <div class="flex flex-col md:flex-row">
            <nav aria-label="alternative nav">
                <div class="bg-zinc-900 shadow-xl h-20 fixed bottom-0 pt-8 md:relative md:h-screen z-10 w-full md:w-48 content-center">
                    <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                        <li class="mr-3 flex-1">
                            <a href="{{route('dashboard')}}" class="flex items-center block py-1 md:py-3 pl-1 align-middle  text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-orange-500">
                                <span class="material-symbols-outlined pr-3">
                                    space_dashboard</span><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block ">Tablero</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1 ">
                            <a href="{{route('apiaries.index')}}" class="flex items-center block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-orange-500 ">
                                <span class="material-symbols-outlined pr-3">inventory_2</span><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Apiarios</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="{{route('hives.index')}}" class="flex items-center block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-orange-500">
                                <span class="material-symbols-outlined pr-3">
                                    hive
                                    </span><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Colmenas</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="{{route('devices.index')}}" class="flex items-center block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-orange-500">
                                <span class="material-icons md:pr-3 text-white-600">devices</span><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Dispositivos</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="{{route('variables.index')}}" class="flex items-center block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2  border-gray-800 hover:border-orange-500">
                                <span class="material-icons pr-0 md:pr-3 text-white-600 pr-1">data_array</span><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Variables</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="{{route('datas.index')}}" class="flex items-center block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2  border-gray-800 hover:border-orange-500 ">
                                <span class="material-icons pr-0 md:pr-3 text-white-600 pr-2">dataset</span><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Datos</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

