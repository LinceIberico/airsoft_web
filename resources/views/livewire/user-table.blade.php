<div class="max-w-full mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between">
        <div class="bg-white border-gray-200 sm:px-6">
            <select wire:model="perPage" class="rounded-lg border-gray-300 text-gray-500 text-sm">
                <option value="5">5 por página</option>
                <option value="10">10 por página</option>
                <option value="15">15 por página</option>
                <option value="25">25 por página</option>
                <option value="100">100 por página</option>
            </select>
        </div>
        <div class="relative flex">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative flex">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input wire:model="search" type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="búsqueda...">
                
                @if($search !== "")

                <button wire:click="clear" class="ml-2 text-gray-800 bg-white border border-gray-300 focus:outline-none hover:bg-red-500 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">X</button>
                
                @endif
            </div>
        </div>
    </div>

    <div class="flex flex-col mt-4">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                    @if ($users->count())

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th wire:click="sortBy('id')" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer @if($sortField === 'id') {{ $sortAsc ? 'sort-asc' : 'sort-desc' }} @endif">ID</th>
                                <th wire:click="sortBy('name')" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer @if($sortField === 'name') {{ $sortAsc ? 'sort-asc' : 'sort-desc' }} @endif">USUARIO</th>
                                <th wire:click="sortBy('email')" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer @if($sortField === 'email') {{ $sortAsc ? 'sort-asc' : 'sort-desc' }} @endif">EMAIL</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer @if($sortField === 'club') {{ $sortAsc ? 'sort-asc' : 'sort-desc' }} @endif">EQUIPO</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->id }}</td>
                                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="w-10 h-10 rounded-full" src="{{$user->profile_photo_url}}" alt="foto_usuario">
                                        <div class="pl-3">
                                            <div class="text-base font-semibold">{{$user->name}}</div>
                                        </div>  
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->nombreClub()->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="" class="text-indigo-600 hover:text-indigo-900">View</a>
                                        <a href="" class="ml-4 text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @else

                    <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                        <p class="text-center">No existen registros para la búsqueda "{{$search}}"</p>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>

