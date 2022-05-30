<template>
    <div class="container">
        <div v-if="post">
            <h1>{{ post.title }}</h1>
            <b><span v-if="post.category"> In category: {{ post.category.name }}</span></b>
            <img :src="post.img_url" alt="post.title">
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
                if (response.data.success) {
                    this.post = response.data.response.data;
                } else {
                    this.$router.push({name : 'page404'})
                }
            });
        }
    }
}
</script>

<style lang="scss" scoped>

</style>