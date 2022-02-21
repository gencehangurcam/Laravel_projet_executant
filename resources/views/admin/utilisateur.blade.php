@extends('layouts.app')
<div class="flex flex-col md:flex-row">
    @include("components.sidebar")
    <!-- ====== Contact Section Start -->
    <div class="bg-white py-20 lg:py-[120px] overflow-hidden relative z-10 container">
        <div class="flex flex-wrap lg:justify-between">
            <div class="lg:w-1/2 xl:w-6/12 px-4">
                @foreach ($user as $user)
                <div class=" mt-5 bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover rounded-full h-36 w-36"
                            src="{{ asset('img/' . $user->avatar_id . '.png') }}" alt="photo">
                    </div>
                    <div class="text-center">
                            <p class="text-xl text-white font-bold mb-2">{{ $user->name }}</p>
                            <p class="text-base text-gray-400 font-normal">{{ $user->surename }}</p>
                            <p class="text-base text-gray-400 font-normal">{{ $user->email }}</p>
                            <p class="text-base text-gray-400 font-normal">{{ $user->year }}</p>
                            <p class="text-base text-gray-400 font-normal">{{ $user->role->name }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $user->links() }}
        </div>
    </div>
</div>
