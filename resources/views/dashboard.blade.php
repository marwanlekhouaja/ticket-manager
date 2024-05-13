<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center font-mono">
                    <h1>Welcome back charge clientele {{auth()->user()->name}}</h1>
                </div>
                <div class="flex flex-col">
                  <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                      <div class="overflow-hidden">
                        @if(session()->has('success'))
                        <div style="background-color: rgb(144, 224, 144);margin:7px;padding:6px;color:white" class="p-3 mb-4 text-sm  text-green-800 rounded-lg bg-green-50 shadow ms-2 me-2" role="alert">
                          {{session('success')}}
                        </div>
                        @endif
                        <table class="min w-full divide-y mt-2 text-center divide-gray-200">
                          <thead>
                            <tr>
                              <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase">Ticket number</th>
                              <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase">is valid</th>
                              <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase">created at</th>
                              <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase">Actions</th>
                            </tr>
                          </thead>
                          <tbody class="divide-y divide-gray-200">
                            @foreach ($tickets as $ticket)
                                @if(!$ticket->isValid)
                                <tr>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$ticket->ticket_number}}</td>
                                  <td>
                                    @if (!$ticket->isValid)
                                      <span class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">non</span>                                    
                                    @endif
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$ticket->created_at}}</td>
                                  <td>
                                    <a href="{{route('ticket.edit',$ticket->ticket_number)}}" style="border-radius: 1rem;background-color:rgb(121, 216, 121);padding:8px;color:white" >
                                      validation
                                    </a>
                                  </td>
                                </tr>  
                                @endif                      
                            @endforeach
                
                          </tbody>
                        </table>
                       
                      </div>
                      <div class="flex justify-center mt-4 mb-3 items-center">
                        {{$tickets->links()}}
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
