<x-admin-layout>
    
    <div class="card bg-white shadow-md rounded-lg overflow-hidden">

        <!-- Card Header -->
        <div class="card-header bg-blue-200 p-2 flex justify-center items-center">
            <x-label class="mb-2">
                CREAR ROL
            </x-label>
        </div>

        <form action="{{route('admin.roles.store')}}" method="POST"
            class="bg-white rounded-lg p-6 shadow-lg">

            @csrf

            <x-validation-errors class="mb-4"/>
            <div class="mb-4">

                <x-label class="mb-3">
                    Nombre:
                </x-label>

                <x-input
                name="name"
                class="w-full" 
                placeholder="Escriba el nombre del rol"
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