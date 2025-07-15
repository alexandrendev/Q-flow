<div>
    <h2>Waiting for Triage</h2>
    <ul>
        <li><strong>Name</strong> | <strong>Status</strong> | <strong>Priority</strong></li>
        @foreach($records as $record)
            <li>
                {{ $record->patient->name ?? 'N/A' }} |
                {{ $record->status }} |
                {{ $record->priority }}
            </li>
        @endforeach
    </ul>
</div>
