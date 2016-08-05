import message_api from './api/message';
import * as types from './mutation-types';

export const getRecentMessage = ({ dispatch }, offset) => {
    message_api.getRecentMessage(offset, message => {
        dispatch(types.RECENT_MESSAGE_RECEIVED, message);
    });
};

export const sendMessage = ({ dispatch }, message, callback) => {
    message_api.sendMessage(message, msg => {
        callback();
    });
};