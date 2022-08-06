<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Dependent Dropdown
        </div>
        <div class="card-body m-2">

            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">Select Section</label>
                        <select class="form-select" aria-label="Default select example" wire:model="sectionSelected"
                            wire:change="onChangeSection">
                            <option value="-1">Choose Section</option>
                            @foreach ($sections as $key => $section)
                                <option value="{{ $key }}">{{ $section }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">Select Category</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="-1" selected>Choose Category</option>
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->catogory_type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
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
