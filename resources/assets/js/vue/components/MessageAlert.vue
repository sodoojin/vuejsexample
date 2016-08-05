<template>
    <button v-show="remained_messages.length > 0" type="button" class="btn btn-primary">
        신규 메세지
        <span class="badge">
            {{ remained_messages.length }}
        </span>
    </button>
</template>
<style>
</style>
<script>
    import { remained_messages } from '../getters';

    export default{
        vuex: {
            getters: {
                remained_messages
            }
        }
    }
</script>
