<div>
    <ul>
        @foreach($projectMenuItems as $projectMenuItem)
            <li>{{ $projectMenuItem->name }}</li>
            <li>
                <button wire:click="delete({{ $projectMenuItem->id }})">
                    удалить
                </button>
            </li>
        @endforeach
    </ul>

    <input wire:model="name" type="text">

    <button wire:click="store">
        Создать
    </button>
</div>
