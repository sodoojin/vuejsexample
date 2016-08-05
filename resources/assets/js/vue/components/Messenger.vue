<template>
    <div>
        <div class="panel panel-default">
            <div class="panel-heading">
                총 메세지 수 : {{ messages.length }}
            </div>
            <div class="panel-body">
                <ul class="list-unstyled">
                    <li v-for="message in messages">
                        {{ message }}
                    </li>
                </ul>
            </div>
            <div class="panel-footer">
                <input type="text" v-model="user_message" @keyup.enter="send_message" class="form-control">
            </div>
        </div>
    </div>
</template>
<style>
</style>
<script>
    import { getRecentMessage, sendMessage } from '../actions';
    import { messages } from '../getters';

    export default {
        data() {
            return {
                user_message: ''
            };
        },
        created() {
            this.getRecentMessage(this.messages.length);
        },
        methods: {
            send_message() {
                var self = this;

                this.sendMessage(this.user_message, () => {
                    self.getRecentMessage(self.messages.length);
                });
                this.user_message = '';
            }
        },
        vuex: {
            getters: {
                messages
            },
            actions: {
                getRecentMessage,
                sendMessage
            }
        }
    }
</script>
