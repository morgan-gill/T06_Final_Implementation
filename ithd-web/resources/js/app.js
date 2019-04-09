
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue'
import App from './App'

Vue.component('chat-messages', require('./components/ChatMessages.vue').default);
Vue.component('chat-form', require('./components/ChatForm.vue').default);


const ithd_chat = new Vue({
    el: '#ithd_chat',
    data: {
          messages: []
    },
    created() {
        this.fetchMessages();
        console.log("in the crated ", this.messages);
        this.messages.forEach(message => {
            console.log("#pray")
            console.log("in the crated ", message);
          })
        Echo.private('chat')
        .listen('MessageSent', (e) => {
            this.messages.push({
            message: e.message.message,
            user: e.user
            });
        });
    },

    methods: {
        fetchMessages() {
            let self = this;
            
            axios.get('/messages').then((response) => {
                console.log(response.data[0]);
                response.data.forEach(object => {
                    self.messages.push(object);
                    console.log(object.message);
                });
                
              }).catch(function(error) {
                console.log(error);
              });
              //this.messages = [{id: 1, user_id: 1, message: "balablabalbaa"}, {id: 2, user_id: 1, message: "balablabalbaa"}];
            
              console.log('afterrrrrr:', this.messages)
            //   this.messages.forEach(message => {
            //     console.log(message);
            //   })
        },

        addMessage(message) {
            this.messages.push(message);
            axios.post('/messages', message).then(response => {
              console.log(response.data);
            });
        }
    }
});
