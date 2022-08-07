<div class="container mt-3" x-data="chatData()">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                    <span>Chat Bot</span>
                    <span class="mx-3" x-show="isTyping">Bot typing....</span>
                </div>
                <div class="card-body chat-care">
                    <ul class="chat" id="chat-box">
                        <li class="agent clearfix"></li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" x-model="sendMsgText" class="form-control input-sm"
                            placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button x-on:click="sendMessage" class="btn btn-primary" type="button" id="btn-chat">
                                Send</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@section('scripts')
    <script>
        function chatData() {
            return {
                sendMsgText: '',
                isTyping: false,
                displayChat(toNode, classPerfix, message,from='You') {

                    const textNode = document.createElement("li");
                    textNode.setAttribute("class", `${classPerfix}`);
                    textNode.innerHTML = `<div class="chat-body clearfix">
                                <div class="header clearfix">
                                    <strong class="right primary-font">${from}</strong>
                                </div>
                                <p>
                                    ${message}
                                </p>
                            </div>`
                    toNode.appendChild(textNode)
                },
                sendMessage() {

                    let chatBox = document.getElementById("chat-box").lastElementChild

                    this.displayChat(chatBox, 'admin clearfix', this.sendMsgText)

                    let data = {
                        message: this.sendMsgText
                    }

                    this.sendMsgText=""

                    axios.post(`{{ route('chat-bot.sendMessage') }}`, data).then(e => {

                        if (e.status == 200) {

                            let reply = e.data.data

                            this.isTyping=true

                            setTimeout(() => {

                                this.isTyping=false
                                this.displayChat(chatBox, 'agent clearfix', reply.answer,'Ms.Love')

                            }, Math.floor(Math.random() * (5000 - 1000 + 1)) + 1000);

                        }
                    })

                }
            }
        }
    </script>
@endsection
