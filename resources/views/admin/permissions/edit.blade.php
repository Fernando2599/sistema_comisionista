<x-admin-layout>
    
    {{ Breadcrumbs::render('admin.permissions.edit', $permission) }}

    <div class="card bg-white shadow-md rounded-lg overflow-hidden">

        <!-- Card Header -->
        <div class="card-header bg-green-200 p-2 flex justify-center items-center">
            <x-label class="mb-2">
                ACTUALIZAR ROL
            </x-label>
        </div>

        <form action="{{route('admin.permissions.update', $permission)}}" method="POST"
            class="bg-white rounded-lg p-6 shadow-lg">

            @csrf
            @method('PUT')

            <x-validation-errors class="mb-4"/>
            <div class="mb-4">

                <x-label class="mb-3">
                    Nombre:
                </x-label>

                <x-input
                name="name"
                class="w-full" 
                placeholder="Escriba el nombre del permiso"
                value="{{ $permission->name}}"/>

            </div>

            <div class="flex justify-end">
                <x-button-blue>
                    Guardar
                </x-button-blue>
            </div>

        </form>
    </div>

</x-admin-layout>