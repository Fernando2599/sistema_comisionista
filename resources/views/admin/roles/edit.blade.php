<x-admin-layout>
    
    {{ Breadcrumbs::render('admin.roles.edit', $role) }}

    <div class="card bg-white shadow-md rounded-lg overflow-hidden">

        <!-- Card Header -->
        <x-card-header-act>
            <x-label class="mb-2">
                ACTUALIZAR ROL
            </x-label>
        </x-card-header-act>

        <form action="{{route('admin.roles.update', $role)}}" method="POST"
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
                placeholder="Escriba el nombre del estado"
                value="{{ $role->name}}"/>

            </div>

            <div class="flex justify-end">
                <x-button-blue>
                    Guardar
                </x-button-blue>
            </div>

        </form>
    </div>

</x-admin-layout>