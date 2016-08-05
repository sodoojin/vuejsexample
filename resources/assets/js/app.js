import Vue from 'vue';
import store from './vue/store';

import Messenger from './vue/components/Messenger.vue';
import MessageAlert from './vue/components/MessageAlert.vue';

new Vue({
    el: '#app',
    store,
    components: {
        Messenger,
        MessageAlert
    }
});