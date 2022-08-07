<?php

namespace App\Http\Livewire\BotTrainerApp;

use App\Models\ChatBotApp\ChatBot;
use Livewire\Component;

class BotTrainer extends Component
{

    public $questionAnswers = [];

    public $questionText = "";
    public $answerText = "";
    public $updateId = 0;
    public $disable = true;


    public function mount()
    {
        $this->loadQuestionAnswers();
    }

    public function loadQuestionAnswers()
    {
        $this->questionAnswers = ChatBot::all();
    }

    public function trainBot()
    {
        ChatBot::create([
            "question" => $this->questionText,
            "answer" => $this->answerText,
        ]);

        $this->loadQuestionAnswers();
        $this->disable = true;
        $this->questionText = "";
        $this->answerText = "";
    }

    public function updateQuestion()
    {
        $question = ChatBot::find($this->updateId);

        $question->update([
            "question" => $this->questionText,
            "answer" => $this->answerText,
        ]);
        $this->loadQuestionAnswers();
        $this->questionText = "";
        $this->answerText = "";
        $this->updateId = 0;
    }


    public function editQuestion($id)
    {
        $this->updateId = $id;
        $question = ChatBot::find($id);

        $this->questionText = $question->question;
        $this->answerText = $question->answer;
    }

    public function deleteQuestion($id)
    {
        ChatBot::destroy($id);
        $this->loadQuestionAnswers();
    }

    public function updated($property)
    {
        if ($this->questionText == "" || $this->answerText == "") {
            $this->disable = true;
        } else {
            $this->disable = false;
        }
    }

    public function render()
    {
        return view('livewire.bot-trainer-app.bot-trainer');
    }
}
