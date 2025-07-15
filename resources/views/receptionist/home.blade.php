<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome to the Receptionist Dashboard
        </h2>
    </x-slot>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center text-blue-700">Receptionist Home</h1>
            <div class="flex flex-col gap-4">
                <a class="w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition">Register Medical Record</a>
                <a class="w-full text-center bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded transition">Waiting for Triage</a>
            </div>
        </div>
    </div>

</x-app-layout>