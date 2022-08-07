<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Your Tranings
        </div>
        <div class="card-body m-2">
            <div class="d-flex justify-content-center">
                <div class="card-body m-2">
                    <div class="d-flex justify-content-center">
                        <input class="form-input mx-2" type="text" placeholder="Question Text" wire:model="questionText">
                        <input class="form-input mx-2" type="text" placeholder="Answer Text" wire:model="answerText">
                        <button wire:click="trainBot" type="button" class="btn btn-success mx-2"
                            {{ $disable ? 'disabled' : '' }}>Train Bot</button>
                            <button wire:click="updateQuestion" type="button" class="btn btn-warning">Update</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Question ID</th>
                            <th scope="col">Question</th>
                            <th scope="col">Answer</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($questionAnswers as $questionAnswer)
                            <tr>
                                <th scope="row">{{ $questionAnswer->id }}</th>
                                <td>{{ $questionAnswer->question }}</td>
                                <td>{{ $questionAnswer->answer }}</td>
                                <td> <button type="button" wire:click="editQuestion({{$questionAnswer->id}})" class="btn btn-sm btn-primary mx-2">Edit</button><button type="button" wire:click="deleteQuestion({{$questionAnswer->id}})" class="btn btn-sm btn-danger">Delete</button> </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Zero Training</td>
                            </tr>
                        @endforelse ()

                    </tbody>
                </table>



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
