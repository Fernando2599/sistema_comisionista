<x-admin-layout>
    {{ Breadcrumbs::render('admin.estado.create') }}
    <div class="card bg-white shadow-md rounded-lg overflow-hidden">

        <!-- Card Header -->
        <x-card-header-act>
            <x-label class="mb-2">
                CREAR ESTADO
            </x-label>
        </x-card-header-act>

        <form action="{{route('admin.estado.store')}}" method="POST"
            class="bg-white rounded-lg p-6 shadow-lg">

            @csrf

            <x-validation-errors class="mb-4"/>
            <div class="mb-4">

                <x-label class="mb-3">
                    Nombre:
                </x-label>

                <x-input
                name="nombre_estado"
                class="w-full" 
                placeholder="Escriba el nombre del estado"
                />

            </div>

            <div class="flex justify-end">
                <x-button-blue>
                    Guardar
                </x-button-blue>
            </div>

        </form>
    </div>

</x-admin-layout>