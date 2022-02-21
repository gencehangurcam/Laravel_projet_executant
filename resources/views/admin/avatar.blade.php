
    @extends('layouts.app')
    <div class="flex flex-col md:flex-row">
        @include("components.sidebar")
        <!-- ====== Contact Section Start -->
        <div class="bg-white py-20 lg:py-[120px] overflow-hidden relative z-10 container">
            <div class="flex flex-wrap lg:justify-between">
                <div class="lg:w-1/2 xl:w-6/12 px-4">
                    <div class="bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                        <div class="mb-8">
                            @foreach ($avatar as $avatar)
                            <img class="object-center object-cover rounded-full h-36 w-36"
                                src="{{ asset('img/' . $avatar->url) }}" alt="photo">
                                <form action="{{ route("dashboard.destroy", $avatar->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button class="flex-shrink-0 bg-teal-500 hover:bg-red-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded">
                                    delete</button>
                                </form>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                    <div class="bg-white relative rounded-lg p-8 sm:p-12 shadow-lg">
                        <form class="w-full max-w-sm" method="POST" action="{{ route("dashboard.store") }}" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-6">
                                <p>add a profil image
                                <input name="img" type="file"
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
                                <p>nom de img
                                <input name="type" type="text"
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
                                    add
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== Contact Section End -->
    </div>
