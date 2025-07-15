<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home Médico') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 gap-5">
                
                <livewire:queue-item 
                    :name="'João Silva'" 
                    :status="'Aguardando'" 
                    :priority="'alta'" 
                />

                <livewire:queue-item 
                    :name="'João Silva'" 
                    :status="'Aguardando'" 
                    :priority="'baixa'" 
                />

                <div class="flex flex-row justify-center items-center w-full">
                    <button class="bg-red-500 rounded text-sm text-white p-5">Chamar o próximo paciente</button>
                </div>
                

            </div>
        </div>

    </div>
</x-app-layout>