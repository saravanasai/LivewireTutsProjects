<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Your Todos
        </div>
        <div class="card-body m-2">
            <div class="d-flex justify-content-center">
                <div class="card-body m-2">
                    <div class="d-flex justify-content-center">
                        <input class="form-input mx-2" type="text" wire:keydown.enter="addTodo" wire:model="todoText">
                        <button wire:click="addTodo" type="button" class="btn btn-success" {{$disable ? 'disabled' : ''}} >Add</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="list-group">
                    @forelse ($todos as $todo)
                        <li class="list-group-item d-flex justify-content-between align-items-center mb-3  " >
                            <input class="form-check-input" wire:change="toggleCompletion({{$todo->id}})" type="checkbox" {{$todo->is_completed ? 'checked' : ''}}   ><span class="{{$todo->is_completed ? 'text-decoration-line-through' : ''}}" > {{ $todo->todo_text }}</span>
                            <button type="button" wire:click="deleteTodo({{$todo->id}})" class="btn btn-sm btn-{{$todo->is_completed ? 'danger' : 'dark'}}" {{$todo->is_completed ? '' : 'disabled'}} >{{$todo->is_completed ? 'Delete' : 'Delete'}}</button>
                        </li>
                    @empty
                        <li class="list-group-item d-flex justify-content-between align-items-center mb-3">
                            No Todo's Left
                        </li>
                    @endforelse ()


                </ul>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-around">
                {{-- <button wire:click="decrement" type="button" class="btn btn-danger">Dcrease</button>
            <button wire:click="increment" type="button" class="btn btn-success">Increase</button> --}}
            </div>
        </div>
    </div>
</div>
