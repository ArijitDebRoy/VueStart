<template>
    <div class="text-center">
        <img class="animated bounceIn margin-top-4x half-width-40" :src="'images/not-found-404.png'"/>
        <div class="half-width-30 auto margin-top-x">
            <button type="button" class="btn btn-warning">Click to back</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['not_found'],
    }
</script>