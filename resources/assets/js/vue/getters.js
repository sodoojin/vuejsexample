export const messages = state => {
    return state.messages.messages.map(message => {
        return message.content;
    });
};

export const remained_messages = state => {
    let remained = state.messages.messages.filter(message => {
        return !message.read;
    });

    return remained.map(message => {
        return message.content;
    });
};