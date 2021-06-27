@extends('layouts.app')


@section('content')

<div class="md:w-5/12 md:m-auto md:p-0 p-5 my-20">
  <form action="{{route('jobs.store')}}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
      <div class="text-2xl font-bold text-center my-3">
          Add a fake Job
      </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Company Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text">
    @error('name')
        <p class="text-red-500 font-bold">{{$message}}</p>
    @enderror
    </div>


    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
        Location
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="address" type="text">
    @error('address')
        <p class="text-red-500 font-bold">{{$message}}</p>
    @enderror
    </div>
    <div class="">
      <button class="bg-black hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Submit
      </button>
    </div>
  </form>
</div>



@endsection
