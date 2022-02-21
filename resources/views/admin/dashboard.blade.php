@extends('layouts.app')
<div class="flex flex-col md:flex-row">
    @include("components.sidebar")
    <!-- ====== Contact Section Start -->
    <div class="bg-white py-20 lg:py-[120px] overflow-hidden relative z-10 container">
        <div class="flex flex-wrap lg:justify-between">
            <div class="lg:w-1/2 xl:w-6/12 px-4">
                <div class="bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover rounded-full h-36 w-36"
                            src="{{ asset('img/' . Auth::user()->avatar_id . '.png') }}" alt="photo">

                    </div>
                    <div class="text-center">
                        <p class="text-xl text-white font-bold mb-2">{{ Auth::user()->name }}</p>
                        <p class="text-base text-gray-400 font-normal">{{ Auth::user()->surename }}</p>
                        <p class="text-base text-gray-400 font-normal">{{ Auth::user()->year }} ans</p>
                        <p class="text-base text-gray-400 font-normal">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="bg-white relative rounded-lg p-8 sm:p-12 shadow-lg">
                    <form action="{{ route('dashboard') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <input name="name" type="text" placeholder="Your Name"
                                class="
                         w-full
                         rounded
                         py-3
                         px-[14px]
                         text-body-color text-base
                         border border-[f0f0f0]
                         outline-none
                         focus-visible:shadow-none
                         focus:border-primary
                         " />
                        </div>
                        <div class="mb-6">
                            <input name="surename" type="string" placeholder="Your Surename"
                                class="
                         w-full
                         rounded
                         py-3
                         px-[14px]
                         text-body-color text-base
                         border border-[f0f0f0]
                         outline-none
                         focus-visible:shadow-none
                         focus:border-primary
                         " />
                        </div>
                        <div class="mb-6">
                            <input name="year" type="number" placeholder="Year"
                                class="
                         w-full
                         rounded
                         py-3
                         px-[14px]
                         text-body-color text-base
                         border border-[f0f0f0]
                         outline-none
                         focus-visible:shadow-none
                         focus:border-primary
                         " />
                        </div>
                        <div class="mb-6">
                            <p>your avatar</p>
                            <select type="email" id="avatar" name="avatar_id" placeholder="Your avatar"
                                class="
                         w-full
                         rounded
                         py-3
                         px-[14px]
                         text-body-color text-base
                         border border-[f0f0f0]
                         outline-none
                         focus-visible:shadow-none
                         focus:border-primary
                         ">
                                @foreach ($avatar as $avatar)
                                    <option value="{{ $avatar->id }}">{{ $avatar->type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <button type="submit"
                                class="
                         w-full
                         text-black
                         bg-primary
                         rounded
                         border border-primary
                         p-3
                         transition
                         hover:bg-opacity-90
                         ">
                                modifiying profil
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Contact Section End -->
</div>
