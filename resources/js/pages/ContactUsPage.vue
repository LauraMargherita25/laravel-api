<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Contact Us</h1>
                <form @submit.prevent="sendMessage" action="api/contact-us" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" v-model="name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="text" class="form-control" id="email" name="email" v-model="email">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="10" name="message" v-model="message"></textarea>
                    </div>

                    <button class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ContactUsPage',

    data() {
        return {
            apiUrl: "/api/contact-us",
            name: '',
            email: '',
            message: '',
            statusMessage: ''
        }
    },

    methods: {
        sendMessage() {
            console.log(this.name, this.email, this.message);
            // Axios.post(this.apiUrl, `?name=${this.name}&email=${this.email}&message=${this.message}`)
            Axios.post(this.apiUrl, {
                name: this.name,
                email: this.email,
                message: this.message
            })
                .then(response => this.statusMessage = response.data.statusMessage);
        }
    }
}
</script>

<style lang="scss" scoped>

</style>