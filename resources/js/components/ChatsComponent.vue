<template>
    <div class="row">
        <div class="col-8">
            <div class=" card  card-outline direct-chat " v-bind:class=" role == 'Profesor' ? ' card-success direct-chat-success':'card-primary direct-chat-primary'">
                <div class="card-header">        {{role}} 
                       <div class="user-panel  d-flex">
        <div class="image">
          <img src="http://localhost:8000/img/user.png" class="img-circle " alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{user.name}}</a>
        </div>
      </div>
        </div>
            
                <div class="card-body p-0">
                    <div class="direct-chat-messages">
                    <ul class="list-unstyled" style="height:400px; " v-chat-scroll>
                        <li class="p-2" v-for="message in messages" :key="message.id" >
                            <div class="direct-chat-msg " v-bind:class="{ right:message.id%2 }">
        <div class="direct-chat-infos clearfix">
          <span class="direct-chat-name float-left">{{message.user.name}}</span>
          <span class="direct-chat-timestamp float-right">{{message.created_at}}</span>
        </div>
        <!-- /.direct-chat-infos -->
        <img class="direct-chat-img" src="http://localhost:8000/img/user.png" alt="message user image">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text">
          {{message.message}}
        </div>
        <!-- /.direct-chat-text -->
      </div>
                        </li>
                    </ul>
</div>
                </div>
                <input 
                    @keydown="sendTypingEvent"
                    v-model="newMessage" 
                    @keyup.enter="sendMessage"
                    type="text" name="message" placeholder="Enter your message" class="form-control">
                <div class="card-footer">
                    <span v-if="userTyping">{{userTyping.name }} isTypin... </span>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="card card-default">
                <div class="card-header">
                    Active Users
                </div>
                <div class="card-body">
                    <ul>
                                 <li v-for="activeUser in activeUsers" :key="activeUser.id" >{{ activeUser.name }}</li>
               
                    </ul>
                </div>
            </div>
        </div>


        
    </div>

    
</template>


<script>
    export default {
        props: ['user','role'],
        data(){
            return {

                messages:[],
                newMessage:'',
                activeUsers:[],
                userTyping : 'false',
                typingTimer : 'false',
                
            }
        },
       
        mounted() {



        },
        created(){
            this.fechMessages();
                        console.log('Component mounted.');
          Echo.join('chat')
                .here(user=>{
                    console.log('here');
                    this.activeUsers=user
                    console.log(user);})
                .joining(user=>{
                    console.log('joining');
                    this.activeUsers.push(user)
                    console.log(this.activeUsers);})
                .leaving(user=>{
                    console.log('leaving');
                    this.activeUsers.pop(user)
                    console.log(this.activeUsers);})
                .listen('MessageSent',(event)=>{
                    console.log('se recibio el mensaje');
                    console.log(event);
                    this.messages.push(event.message)
              
                }).listenForWhisper('typing', user => {
                    console.log('recibiendo typing')
                   this.userTyping = user;

                    if(this.typingTimer) {
                        clearTimeout(this.typingTimer);
                    }

                   this.typingTimer = setTimeout(() => {
                       this.userTyping = false;
                   }, 3000);
                })
        },
        methods: {
            fechMessages() {
                axios.get('/messages').then(response => {
                this.messages = response.data;
            })
            },
            sendMessage() {
                var message = {message:this.newMessage}
                message =  Object.assign(message, this.user);
                axios.post('/messages',{message});
                var message_push = {user:this.user}
                message_push = Object.assign(message_push, {message:this.newMessage, id:this.newMessage+this.user.id});
    
                this.messages.push(message_push)
                this.newMessage = ''

            },
            sendTypingEvent() {
                console.log("tipeando")
                Echo.join('chat')
                    .whisper('typing', this.user);
            }
            

        }
    }
</script>
