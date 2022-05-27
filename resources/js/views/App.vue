<template>
    <div>
        <header-app/>
    </div>

    <div>
        <main-app/>
    </div>
</template>

<script>
import HeaderApp from '../components/HeaderApp.vue';
import MainApp from '../components/MainApp.vue';

export default {
    name: 'App',
    components: {
        HeaderApp,
        MainApp,
    }
}
</script>

<style>

</style>