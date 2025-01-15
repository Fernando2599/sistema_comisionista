<x-admin-layout>
    {{ Breadcrumbs::render('admin.estado.show', $estado) }}

    <div class="card bg-white shadow-md rounded-lg overflow-hidden">
        <!-- Card Header -->
        <x-card-header-act>
            <x-label class="mb-2">
                DETALLES
            </x-label>
        </x-card-header-act>

        <div class="bg-white rounded-lg p-6 shadow-lg">
            <div class="mb-4">
                <x-label class="mb-3">Id:</x-label>
                <x-input class="w-full" value="{{ $estado->id }}" readonly/>

                <x-label class="mb-3">Nombre:</x-label>
                <x-input class="w-full" value="{{ $estado->nombre_estado }}" readonly/>

                <x-label class="mb-3">Creado el:</x-label>
                <x-input class="w-full" value="{{ $estado->created_at }}" readonly/>

                <x-label class="mb-3">Modificado el:</x-label>
                <x-input class="w-full" value="{{ $estado->updated_at }}" readonly/>
            </div>
        </div>

        <div class="flex justify-end mt-1">
            <a href="{{ route('admin.estado.edit', $estado) }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">
                Editar
            </a>
        </div>
    </div>
</x-admin-layout>
