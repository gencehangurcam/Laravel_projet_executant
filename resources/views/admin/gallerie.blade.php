@extends('layouts.app')
<div class="flex flex-col md:flex-row">
    @include("components.sidebar")
    <!-- ====== Contact Section Start -->
    <div class="bg-white py-20 lg:py-[120px] overflow-hidden relative z-10 container">
        <div class="flex flex-wrap lg:justify-between">
            <div class="lg:w-1/2 xl:w-6/12 px-4">
                <div class="bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        @foreach ($image as $image)
                        <img class="object-center object-cover h-36 w-36"
                            src="{{ asset('img/' . $image->url) }}" alt="photo">
                            <button class="flex-shrink-0 bg-teal-500 hover:bg-red-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded">
                            download</button>
                        @endforeach

                    </div>
                </div>
            </div>
