<template>
    <div class="container">
        <div v-if="post">
            <h1>{{ post.title }}</h1>
            <p>{{ post.content }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PostShow',

    props: ['slug'],

    data() {
        return {
            post: null,
            baseApiUrl: 'http://localhost:8000/api/guest'
        }
    },

    created() {
        this.getData(this.baseApiUrl + '/' + this.slug)
    },

    methods: {
        getData(url) {
            Axios(url)
            .then(response => {
                this.post = response.data.response.data;
            });
        }
    }
}
</script>

<style lang="scss" scoped>

</style>