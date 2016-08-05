import http from './http';

export default {
    getRecentMessage(offset, cb) {
        http.get('/api/get_message.php?offset=' + offset).then(function(response) {
            cb(response.data.messages);
        });
    },
    sendMessage(message, cb) {
        let formData = new FormData();
        formData.append('message', message);

        http.post('/api/write_message.php', formData).then(function(response) {
            cb(response.data);
        });
    }
};