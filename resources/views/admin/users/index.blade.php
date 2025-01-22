<x-admin-layout>

    {{ Breadcrumbs::render('admin.roles.index') }}

    <div class="card bg-white shadow-md rounded-lg overflow-hidden">
        <!-- Card Header -->

        <x-card-header-new>
            <x-button-link href="#" class="extra-class">
                <i class="fa-solid fa-plus"></i> Nuevo
            </x-button-link>
        </x-card-header-new>
        
        @if ($users->count())
            
            <!-- Card Body -->
            <div class="card-body p-6">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">ID</th>
                                <th scope="col" class="px-6 py-3">Nombre</th>
                                <th scope="col" class="px-6 py-3">Creado el</th>
                                <th scope="col" class="px-6 py-3">Actualizado el</th>
                                <th scope="col" class="px-6 py-3">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="odd:bg-white even:bg-gray-50 border-b dark:border-gray-700">
                                    <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $user->id }}</td>
                                    <td class="px-6 py-4">{{ $user->name }}</td>
                                    <td class="px-6 py-4">{{ $user->created_at }}</td>
                                    <td class="px-6 py-4">{{ $user->updated_at }}</td>
                                    <td class="px-6 py-4 flex space-x-2">
                                        
                                        <a href="{{ route('admin.users.edit', $user) }}" class="text-black-custom hover:underline"><i class="fa-solid fa-pen"></i></a>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                <span class="font-medium"></span> No se encuentran información registrada.
                </div>
            </div>
        @endif
    </div>

    <div class="mt-4">
        {{ $users->links() }}
    </div>

    @push('js')
    @vite(['resources/js/app.js'])
    @endpush

</x-admin-layout>