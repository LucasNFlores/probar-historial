
        <div class="flex flex-col md:flex-row">
            <nav aria-label="alternative nav">
                <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">
                    <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                        <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                            <li class="mr-3 flex-1">
                                <a href="{{route('dashboard')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-orange-500">
                                    <i class="em em-chart_with_downwards_trend pr-0 md:pr-3 mr-2"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Tablero</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="{{route('apiaries.index')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-orange-500">
                                    <i class="em em-bee pr-0 md:pr-3 mr-2"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Apiarios</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="{{route('hives.index')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-orange-500">
                                    <span class="  material-icons pr-0 md:pr-3  ">hive</span><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Colmenas</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="{{route('devices.index')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-orange-500">
                                    <span class="material-icons pr-0 md:pr-3 text-white-600">devices</span><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Dispositivos</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="{{route('variables.index')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2  border-gray-800 hover:border-orange-500">
                                    <span class="material-icons pr-0 md:pr-3 text-white-600">data_array</span><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Variables</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="{{route('datas.index')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2  border-gray-800 hover:border-orange-500">
                                    <span class="material-icons pr-0 md:pr-3 text-white-600">dataset</span><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Datos</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

