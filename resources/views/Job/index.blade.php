@extends('layouts.app')


@section('content')

<div class="flex flex-col md:p-20 p-5">

  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <input type="text" class="px-3 py-2 my-3 border border-black border-3" placeholder="Search by name">
        <button class="px-3 py-2 bg-black text-white">Search</button>
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
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Actions
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
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    {{$job->status}}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
                    {{-- <form action="{{route('status', $job->id)}}" method="post">
                        @csrf
                        @method('PUT')
                    <button type="submit" class="text-indigo-600 hover:text-indigo-900">Approve/Dissaprove</button>

                    </form> --}}
                    <a href="{{route('status', $job->id)}}" class="text-indigo-600 hover:text-indigo-900">Approve/Dissaprove</a>

                </td>
                @empty
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm font-medium text-gray-900">
                      No Fake Jobs
                    </div>


            </tr>
            @endforelse
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection
