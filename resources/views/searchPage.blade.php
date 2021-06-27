@extends('layouts.app')


@section('content')

<div class="flex flex-col md:p-20 p-5">

  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div>
            Search Results
        </div>
        <form action="{{route('search')}}" method="post">
        @csrf
        <input type="text" name="search" class="px-3 py-2 my-3 border border-black border-3" placeholder="Search by name">
        <button type="submit" class="px-3 py-2 bg-black text-white">Search</button>

        </form>

      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Company Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Location
              </th>

            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($jobs as $job )
            <tr>

                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm font-medium text-gray-900">
                      {{$job->name}}
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm font-medium text-gray-900">
                      {{$job->address}}
                    </div>
                </td>

                @empty
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm font-medium text-gray-900">
                      Nothing Found <a class="text-red-500 font-bold" href="{{route('home')}}">Go back</a>
                    </div>


            </tr>
            @endforelse
            <!-- More people... -->
          </tbody>

        </table>
      </div>
            <div class="my-5">
              {{$jobs->links()}}
            </div>


    </div>
  </div>
</div>


@endsection
