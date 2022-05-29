<template>
    <main>
        <!-- <div class="container">
            <div class="row g-1">
                <div class="col-4" v-for="post in posts" :key="post.id">
                    <div class="card h-100">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">{{ post.title }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer border-0 d-flex justify-content-end">
                            <a :href="'/guest/' +  post.slug" class="btn btn-primary ">Read more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <nav aria-label="Page navigation example" class="mt-5 d-flex justify-content-center">
                    <ul class="pagination">
                        <li class="page-item" :class="{disabled: nCurrentPage == 1}" @click="getData(frstPageUrl)"><a class="page-link" style="cursor: pointer">First Page</a></li>
                        <li class="page-item" :class="{disabled: !prvPageUrl}" @click="getData(prvPageUrl)"><a class="page-link" style="cursor: pointer">Previous</a></li>
                        <li class="page-item disabled"><a class="page-link text-dark" style="cursor: pointer">Page {{ nCurrentPage }} of {{ nLstPage }}</a></li>
                        <li class="page-item" :class="{disabled: !nxtPageUrl}" @click="getData(nxtPageUrl)"><a class="page-link" style="cursor: pointer">Next</a></li>
                        <li class="page-item" :class="{disabled: nCurrentPage == nLstPage}" @click="getData(lstPageUrl)"><a class="page-link" style="cursor: pointer">Last Page</a></li>
                    </ul>
                </nav>
            </div>
        </div> -->
    </main>
</template>

<script>
export default {
    name:'MainApp',

    data() {
        return{
            posts : [],
            frstPageUrl: null,
            prvPageUrl : null,
            nxtPageUrl : null,
            lstPageUrl: null,
            nCurrentPage: null,
            nLstPage: null,
        }
    },

    created(){
        this.getData('http://localhost:8000/api/guest');
    },

    methods: {
        getData(url) {
            if (url) {       
                Axios.get(url)
                .then(response => {
                    this.posts = response.data.response.data;
                    this.frstPageUrl = response.data.response.first_page_url;
                    this.prvPageUrl = response.data.response.prev_page_url;
                    this.nxtPageUrl = response.data.response.next_page_url;
                    this.lstPageUrl = response.data.response.last_page_url;
                    this.nCurrentPage = response.data.response.current_page;
                    this.nLstPage = response.data.response.last_page;
                })
            }
        }
    }
}
</script>

<style>

</style>