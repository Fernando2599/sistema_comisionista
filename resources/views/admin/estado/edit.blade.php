<x-admin-layout>
    {{ Breadcrumbs::render('admin.estado.edit', $estado) }}

    <div class="card bg-white shadow-md rounded-lg overflow-hidden">

        <!-- Card Header -->
        <div class="card-header bg-blue-200 p-2 flex justify-center items-center">
            <x-label class="mb-2">
                ACTUALIZAR ESTADO
            </x-label>
        </div>

        <form action="{{route('admin.estado.update', $estado)}}" method="POST"
            class="bg-white rounded-lg p-6 shadow-lg">

            @csrf
            @method('PUT')

            <x-validation-errors class="mb-4"/>
            <div class="mb-4">

                <x-label class="mb-3">
                    Nombre:
                </x-label>

                <x-input
                name="nombre_estado"
                class="w-full" 
                placeholder="Escriba el nombre del estado"
                value="{{ $estado->nombre_estado}}"/>

            </div>

            <div class="flex justify-end">
                <x-button-blue>
                    Guardar
                </x-button-blue>
            </div>

        </form>
    </div>

</x-admin-layout>