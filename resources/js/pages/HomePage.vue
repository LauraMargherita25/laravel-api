<template>
  <div class="container">
            <div class="row g-1">
                <h1>Alcuni dei nostri post</h1>
                <div class="col-4" v-for="post in posts" :key="post.id">
                    <div class="card h-100">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">{{ post.title }}</h5>
                            <p class="card-text">{{ getExcerpt(post.content) }}</p>
                        </div>
                        <div class="card-footer border-0 d-flex justify-content-end">
                            <router-link :to="{name: 'postShow', params: {slug: post.slug}}" class="btn btn-primary">Read more</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    name:'HomePage',
    
    data() {
        return{
            excerptMaxLenght: 200,
            posts : [],
            baseApiUrl: 'http://localhost:8000/api/guest?home',
        }
    },

    created(){
        this.getData(this.baseApiUrl);
    },

    methods: {
        getData(url) {
            if (url) {       
                Axios.get(url)
                .then(response => {
                    this.posts = response.data.response.data;
                })
            }
        },

        getExcerpt(content) {
            if (content.length > this.excerptMaxLenght) {
                return content.substring(0, this.excerptMaxLenght) + ' ...';
            } else {
                return content;
            }
        }
    }
}
</script>

<style>

</style>