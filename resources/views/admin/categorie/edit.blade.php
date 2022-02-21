@extends('layouts.app')

@section("content")
<div class="flex flex-col md:flex-row">
    @include("components.sidebar")
    <div class="w-full max-w-xs">
        <form action="{{ route("categorie.update", $categorie->id) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method='POST'>
            @csrf
            @method("PUT")
          <div class="mb-4">
            <label value="{{ $categorie->name }}" class="block text-gray-700 text-sm font-bold mb-2" for="name">
              name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="name">
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              submit
            </button>
          </div>
        </form>
      </div>
</div>
@endsection


