<div>
    <div class="border-l-4 
    @if($priority === 'alta') border-red-500
    @elseif($priority === 'media') border-yellow-500
    @else border-green-500
    @endif">
        <div class="flex flex-row justify-center items-center w-full">
            <p>Paciente: {{$name}}</p>
            <p>Status: {{$status}}</p>
            <p>Prioridade: {{$priority}}</p>
        </div>
    </div>

</div>
