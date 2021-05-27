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
                    <table class="table-fixed">
                        <thead>
                          <tr>
                            <th class="w-1/2 ...">Title</th>
                            <th class="w-1/4 ...">Author</th>
                            <th class="w-1/4 ...">Views</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Intro to CSS</td>
                            <td>Adam</td>
                            <td>858</td>
                          </tr>
                          <tr class="bg-blue-200">
                            <td>A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                            <td>Adam</td>
                            <td>112</td>
                          </tr>
                          <tr>
                            <td>Intro to JavaScript</td>
                            <td>Chris</td>
                            <td>1,280</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

  
    <!--Modal-->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
      <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
      
      <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        
        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
          <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
          </svg>
          <span class="text-sm">(Esc)</span>
        </div>
  
        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
          <!--Title-->
          <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Add Schedule</p>
            <div class="modal-close cursor-pointer z-50">
              <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
              </svg>
            </div>
          </div>
  
          <!--Body-->
            <form class="px-8 pt-6 pb-8 mb-4" method="post" action="{{  url('/add-schedule') }}">
                @csrf
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                  Title
                </label>
                <input name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
              </div>
              <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                  Short Description
                </label>
                <input name="description" class="shadow appearance-none borde rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Description">
              </div>
              <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                  Date and Time
                </label>
                <input name="date_time" type="datetime-local" value="<?php echo date("Y-m-d");?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
              </div>
          <!--Footer-->
          <div class="flex justify-end pt-2">
            <button class="px-4 bg-transparent p-3 rounded-lg text-white bg-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Save</button>
            <button class="modal-close px-4  p-3 rounded-lg  text-indigo-500  hover:bg-indigo-400" type="submit">CLose</button>
          </div>

            </form>        

          
        </div>
      </div>
    </div>
    @include('layouts.script')

</x-app-layout>
