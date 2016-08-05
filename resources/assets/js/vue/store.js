import Vue from 'vue';
import Vuex from 'vuex';

import messages from './modules/messages';

Vue.use(Vuex);
Vue.config.debug = true;

export default new Vuex.Store({
    modules: {
        messages
    },
    strict: true
});