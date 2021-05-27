<x-app-layout>
    <x-slot name="header">
        <button class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full"> Add Schedule</button>
    </x-slot>
    @if(session('success'))

    <div class=" max-w-7xl mx-auto py-12 m-3 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 shadow-md bg-green-100" role="alert">
        <div class="flex">
          <div>
            <h3 class="font-bold"> {{session('success')}}</h3>
          </div>
        </div>
      </div>
      @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-fixed w-full">
                        <thead >
                          <tr class="text-left">
                            <th class="w-1/4 ...">Title</th>
                            <th class="w-1/4 ...">Description</th>
                            <th class="w-1/4 ...">Date and Time</th>
                            <th class="w-1/4 ...">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                          <tr>
                            <td>{{ $d->title }}</td>
                            <td>{{ $d->description }}</td>
                            <td>{{ $d->date_time }}</td>
                            <td> <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border rounded inline-block">
                                Edit
                              </button> || <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border rounded inline-block">
                                Delete
                              </button> </td> 
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.modal')
    @include('layouts.script')

</x-app-layout>
