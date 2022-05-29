<template>
    <header class="mt-5">
        <div class="container">
            <router-link :to="{name: 'home'}">Home</router-link>
            <router-link :to="{name: 'about'}">About</router-link>
            <router-link :to="{name: 'postIndex'}">Blog</router-link>
        </div>
    </header>
</template>

<script>
export default {
    name:'HeaderApp'
}
</script>

<style>

</style>