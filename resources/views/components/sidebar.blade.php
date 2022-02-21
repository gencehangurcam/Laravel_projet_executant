
<nav aria-label="alternative nav">
    <div class="bg-gray-800 shadow-xl fixed bottom-0 md:relative md:h-screen z-10 w-full md:w-48 content-center">
        <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
            @include('layouts.navigation')
            <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                <!-- Settings Dropdown -->
                <li class="mr-3 flex-1">
                    <a href="{{ route('dashboard') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                        <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">dashboard</span>
                    </a>
                </li>
                @admin
                <li class="mr-3 flex-1">
                    <a href="{{ route('avatar') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">avatars</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{ route('categorie.index') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">categorie</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{ route('image.index') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">images</span>
                    </a>
                </li>
                @endadmin
                <li class="mr-3 flex-1">
                    <a href="{{ route("gallerie.index") }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">gallerie</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{ route('utilisateur') }}"  class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">utilisiteurs</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
