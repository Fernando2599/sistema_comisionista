<x-admin-layout>
    {{ Breadcrumbs::render('admin.roles.show', $role) }}

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
                <x-input class="w-full" value="{{ $role->id }}" readonly/>

                <x-label class="mb-3">Nombre:</x-label>
                <x-input class="w-full" value="{{ $role->name }}" readonly/>

                <x-label class="mb-3">Creado el:</x-label>
                <x-input class="w-full" value="{{ $role->created_at }}" readonly/>

                <x-label class="mb-3">Modificado el:</x-label>
                <x-input class="w-full" value="{{ $role->updated_at }}" readonly/>
            </div>
        </div>

        <div class="flex justify-end mt-1">
            <a href="{{ route('admin.roles.edit', $role) }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">
                Editar
            </a>
        </div>
    </div>
</x-admin-layout>
