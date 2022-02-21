
    @extends('layouts.app')
    @section('content')
        <div class="flex flex-col md:flex-row">
            @include("components.sidebar")
            <!-- ====== Contact Section Start -->
            <div class="bg-white py-20 lg:py-[120px] overflow-hidden relative z-10 container">
                <div class="flex flex-wrap lg:justify-between">
                    <div class="lg:w-1/2 xl:w-6/12 px-4">
                        <div class="bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                            <div class="mb-8 bg-white-900">
                                <div class="font-sans bg-white-900 antialiased bg-gray-50 bg-white-900 py-8">
                                    <!-- Author -->
                                    <div class=" bg-white-900 mx-8 md:mx-12 lg:mx-24 xl:mx-36 pt-2 bg-white-50 md:bg-white md:shadow-lg dark:bg-gray-900 md:dark:bg-gray-800
                                                        md:p-6 md:shadow-lg md:rounded-lg mb-10 flex justify-between items-center">
                                            <div class="flex bg-white-900">
                                                <div class="bg-white-900">
                                                    <h1 class="text-white">Toutes les categories</h1>
                                                    <a href="{{ route("categorie.create") }}" class="w-full inline-flex items-center justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold capitalize text-white hover:bg-green-700 active:bg-green-700 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 disabled:opacity-25 transition">add</a>
                                                </div>
                                            </div>
                                    </div>
                                    <!-- Next & Prev Links -->
                                    <div class="font-sans flex justify-between content-center px-4 pb-12">

                                        <div class="text-left">
                                            <a href="/blog/2021/08/23/nft-and-defi/">
                                                <div class="flex">
                                                    <div class="">
                                                        @foreach ($categorie as $item)
                                                        <div class="border-2 border-black m-3 p-3">
                                                            <h1>nom de la categorie: <span class="font-bold">{{ $item->name }}</span></h1>
                                                            <a href="{{ route("categorie.edit", $item->id) }}"><button class="inline-flex items-center justify-center bg-green-600 border border-transparent rounded-md font-semibold capitalize text-white hover:bg-green-700 active:bg-green-700 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 disabled:opacity-25 transition">modifier</button></a>
                                                            <form action="{{ route('categorie.destroy', $item->id) }}" method="Post">
                                                                @csrf
                                                                @method("DELETE")
                                                                <button class="inline-flex items-center justify-center bg-red-600 border border-transparent rounded-md font-semibold capitalize text-white hover:bg-green-700 active:bg-red-700 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 disabled:opacity-25 transition">delete</button>
                                                            </form>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- ====== Contact Section End -->
        </div>
    @endsection
