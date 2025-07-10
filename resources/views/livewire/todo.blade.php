<div>
    <form wire:submit="add">
        <input type="text" wire:model.live="todo">
        <button type="submit">add</button>
    </form>

    <span>Current todo: {{ $todo }}</span>

    <ul>
        @foreach($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
