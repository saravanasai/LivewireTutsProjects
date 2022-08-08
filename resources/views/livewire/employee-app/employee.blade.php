<div class="container mt-5" x-data="gridData()">
    <div class="card">
        <div class="card-header">
            Employee Mamangement Grid
        </div>
        <div class="card-body m-2">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <label class="form-label" for="invalidCheck">Search</label>
                    <input class="form-input" type="text" wire:model="search" placeholder="Name / Phone " id="invalidCheck" >

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <th scope="row">{{ $employee->id }}</th>
                                    <td contenteditable="{{ $editableId == $employee->id ? 'true' : 'false' }}"
                                        wire:click="toggleContentEditable({{ $employee->id }})"
                                        x-on:blur="toggleContentEditableFalse('name_{{ $employee->id }}',{{ $employee->id }},'name')"
                                        id="name_{{ $employee->id }}">{{ $employee->name }}
                                    </td>
                                    <td contenteditable="{{ $editableId == $employee->id ? 'true' : 'false' }}"
                                        wire:click="toggleContentEditable({{ $employee->id }})"
                                        x-on:blur="toggleContentEditableFalse('phone_{{ $employee->id }}',{{ $employee->id }},'phone')"
                                        id="phone_{{ $employee->id }}">{{ $employee->phone }}</td>
                                    <td contenteditable="{{ $editableId == $employee->id ? 'true' : 'false' }}"
                                        wire:click="toggleContentEditable({{ $employee->id }})"
                                        x-on:blur="toggleContentEditableFalse('address_{{ $employee->id }}',{{ $employee->id }},'address')"
                                        id="address_{{ $employee->id }}">{{ $employee->address }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
               {{$employees->links()}}
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        function gridData() {

            return {

                employeedetail: '',

                toggleContentEditableFalse(id, rowid, column) {

                    console.log(id, rowid, column)

                    let editableRowCell = document.querySelector(`#${id}`)


                    if (column == 'name') {
                        this.employeedetail = editableRowCell.innerText
                    }
                    if (column == 'phone') {
                        this.employeedetail = editableRowCell.innerText
                    }
                    if (column == 'address') {
                        this.employeedetail = editableRowCell.innerText
                    }



                    editableRowCell.setAttribute('contenteditable', 'false')

                    let data = {
                        column: column,
                        info: this.employeedetail
                    }

                    axios.put('{{ route('employee.update', '') }}/' + rowid, data).then(e => {

                        if (e.status == 200) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                toast: true,
                                timer: 1500
                            })
                        }
                    })

                },




            }
        }
    </script>
@endsection
