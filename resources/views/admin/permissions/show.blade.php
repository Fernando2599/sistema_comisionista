<x-admin-layout>
    {{ Breadcrumbs::render('admin.permissions.show', $permission) }}

    <div class="card bg-white shadow-md rounded-lg overflow-hidden">
        <!-- Card Header -->
        <div class="card-header bg-green-200 p-2 flex justify-center items-center">
            <x-label class="mb-2">
                DETALLES
            </x-label>
        </div>

        <div class="bg-white rounded-lg p-6 shadow-lg">
            <div class="mb-4">
                <x-label class="mb-3">Id:</x-label>
                <x-input class="w-full" value="{{ $permission->id }}" readonly/>

                <x-label class="mb-3">Nombre:</x-label>
                <x-input class="w-full" value="{{ $permission->name }}" readonly/>

                <x-label class="mb-3">Creado el:</x-label>
                <x-input class="w-full" value="{{ $permission->created_at }}" readonly/>

                <x-label class="mb-3">Modificado el:</x-label>
                <x-input class="w-full" value="{{ $permission->updated_at }}" readonly/>
            </div>
        </div>

        <div class="flex justify-end mt-1">
            <a href="{{ route('admin.permissions.edit', $permission) }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">
                Editar
            </a>
        </div>
    </div>
</x-admin-layout>
