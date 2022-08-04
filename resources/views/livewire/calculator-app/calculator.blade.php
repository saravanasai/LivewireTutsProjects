
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Calculator Application
        </div>
        <div class="card-body m-2">
            <div class="d-flex justify-content-center">
                <input class="form-input mx-2" type="number" wire:model="number1">
                <input class="form-input mx-2" type="number" wire:model="number2">
            </div>
        </div>
    <div class="card-footer">

        <div class="d-flex justify-content-end">
            <button wire:click="calculate" type="button" {{$disabled ? 'disabled' : ''}} class="btn btn-{{$disabled ? 'danger' : 'success'}} ">Sum</button>
            <input class="form-input px-2 mx-2" type="text" value="{{$perviousCalc}}"  readonly>
            <input class="form-input px-2 mx-2" type="number" value="{{$result}}"  readonly>
        </div>
    </div>
    </div>
</div>
