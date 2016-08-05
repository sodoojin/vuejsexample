import {
    RECENT_MESSAGE_RECEIVED,
    MESSAGE_SENT
} from '../mutation-types';

const state = {
    messages: []
};

const mutations = {
    [RECENT_MESSAGE_RECEIVED] (state, message) {
        state.messages = state.messages.concat(message);
    }
};

export default {
    state,
    mutations
};