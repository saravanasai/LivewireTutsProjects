<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Counter Application
        </div>
        <div class="card-body m-2">
            <div class="d-flex justify-content-center">

                    <h1 class="m-5">{{$count}}</h1>

            </div>
        </div>
    <div class="card-footer">
        <div class="d-flex justify-content-around">
            <button wire:click="decrement" type="button" class="btn btn-danger">Dcrease</button>
            <button wire:click="increment" type="button" class="btn btn-success">Increase</button>
        </div>
    </div>
    </div>
</div>
