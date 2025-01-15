<x-admin-layout>

    {{ Breadcrumbs::render('admin.roles.index') }}

    <div class="card bg-white shadow-md rounded-lg overflow-hidden">
        <!-- Card Header -->

        <div class="card-header bg-green-200 p-4 flex justify-end items-center">
            <x-button-link href="{{ route('admin.roles.create') }}" class="extra-class">
                <i class="fa-solid fa-plus"></i> Nuevo
            </x-button-link>
        </div>
        

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
                        @foreach ($roles as $rol)
                            <tr class="odd:bg-white even:bg-gray-50 border-b dark:border-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $rol->id }}</td>
                                <td class="px-6 py-4">{{ $rol->name }}</td>
                                <td class="px-6 py-4">{{ $rol->created_at }}</td>
                                <td class="px-6 py-4">{{ $rol->updated_at }}</td>
                                <td class="px-6 py-4 flex space-x-2">
                                    <a href="{{ route('admin.roles.show', $rol) }}" class="text-blue-600 hover:underline"><i class="fa-solid fa-eye"></i></a>
                                    <a href="{{ route('admin.roles.edit', $rol) }}" class="text-black-custom hover:underline"><i class="fa-solid fa-pen"></i></a>
                                    <form method="POST" action="{{ route('admin.roles.destroy', $rol) }}" class="confirmar-eliminacion">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('js')
    @vite(['resources/js/app.js'])
    @endpush

</x-admin-layout>