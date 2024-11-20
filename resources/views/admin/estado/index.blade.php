<x-admin-layout>
    {{ Breadcrumbs::render('admin.estado.index') }}

    <div class="card bg-white shadow-md rounded-lg overflow-hidden">
        <!-- Card Header -->

        <div class="card-header bg-blue-200 p-4 flex justify-end items-center">
            <x-button-link href="{{ route('admin.estado.create') }}" class="extra-class">
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
                        @foreach ($estados as $estado)
                            <tr class="odd:bg-white even:bg-gray-50 border-b dark:border-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $estado->id }}</td>
                                <td class="px-6 py-4">{{ $estado->nombre_estado }}</td>
                                <td class="px-6 py-4">{{ $estado->created_at }}</td>
                                <td class="px-6 py-4">{{ $estado->updated_at }}</td>
                                <td class="px-6 py-4 flex space-x-2">
                                    <a href="{{ route('admin.estado.show', $estado) }}" class="text-blue-600 hover:underline"><i class="fa-solid fa-eye"></i></a>
                                    <a href="{{ route('admin.estado.edit', $estado) }}" class="text-black-custom hover:underline"><i class="fa-solid fa-pen"></i></a>
                                    <form method="POST" action="{{ route('admin.estado.destroy', $estado) }}" class="eliminar-estado">
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

    <div class="mt-4">
        {{ $estados->links() }}
    </div>

    @push('js')
    <script>
        document.querySelectorAll('.eliminar-estado').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "¿Estás seguro?",
                    text: "¡No podrás revertir esto!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Sí, eliminar",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            });
        });
    </script>
    @endpush

</x-admin-layout>
