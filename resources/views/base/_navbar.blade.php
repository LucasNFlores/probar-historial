<nav aria-label="menu nav" class=" bg-gradient-to-r from-orange-600 to-orange-600 md:pt-2 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0 border-solid border-b-0 border-white  ">
    <div class="flex flex-wrap items-center  ">

        <div class=" flex flex-shrink md:w-1/3 justify-center md:justify-start text-white pl-2 ">
            <a href="{{route('dashboard')}}" aria-label="Home">
                <img src="{{ asset('favicon.ico') }}" alt="Icon" class="icon-size  ">
            </a>
        </div>

        <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
            <span class="relative w-full">
                <input aria-label="search" type="search" id="search" placeholder="Buscar" class="w-full bg-neutral-100	 text-black transition border border-transparent focus:outline-none focus:border-blue-500 rounded py-3 px-2 pl-10 appearance-none leading-normal">
                <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                    <svg class="fill-current pointer-events-none text-black w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                    </svg>
                </div>
            </span>
        </div>

        <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                <li class="flex-1 md:flex-none md:mr-3">
                    <div class="relative inline-block">
                        <button onclick="toggleDD('myDropdown')" class="flex items-center justify-between drop-button text-white py-2 px-2"><span class="material-symbols-outlined pr-2">account_circle</span> Usuario <svg class="pl-2 h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                        <div id="myDropdown" class="dropdownlist absolute bg-orange-500 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible  rounded-lg">
                            <a href="#" class="flex items-center p-2 hover:bg-gradient-to-r from-orange-300 to-transparent rounded-lg text-white text-sm no-underline hover:no-underline block"><i class="pr-6 fa fa-user fa-fw"></i> Mi Perfil</a>
                            <a href="#" class="flex items-center p-2 hover:bg-gradient-to-r from-orange-300 to-transparent rounded-lg text-white text-sm no-underline hover:no-underline block"><i class="pr-6 fa fa-cog fa-fw"></i> Configuración</a>
                            <div class=""></div>
                            {{-- <a href="{{route('logout')}}" class="flex items-center p-2 hover:bg-gradient-to-r from-orange-500 to-transparent rounded-lg text-white text-sm no-underline hover:no-underline block"><i class="pr-6 fas fa-sign-out-alt fa-fw"></i> Salir</a> --}}

                            <form action="{{ route('logout')}}" method="POST" class="flex items-center p-2 hover:bg-gradient-to-r from-orange-200 to-transparent rounded-lg text-white">
                                @csrf
                                <i class="pr-6 fas fa-sign-out-alt fa-fw"></i>
                                <input type="submit" value="Salir" class=" text-sm no-underline hover:no-underline block"/>



                            </form>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


