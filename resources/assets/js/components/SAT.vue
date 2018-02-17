<template>
    <div class="fixed full-height full-width text-center margin-top-3x">
        <h2>I am in SAT</h2>
        <a v-link="{name:'dashboard'}">Dahboard</a>
        <a v-link="{name:'sat-course'}">SAT</a>
        <a v-link="{name:'act-course'}">ACT</a>
    </div>
</template>
<script>
    export default {
        components: {
        },
        data: function() {
            return {
            };
        },
        ready: function() {
        },
        methods: {
        },
    }
</script>