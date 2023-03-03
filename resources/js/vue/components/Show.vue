<script>
import axios from 'axios';
export default {
    data() {
        return {
            post: ""
        }
    },
    async mounted() {
        this.getPost();
    },
    methods: {
        getPost(){
            axios.get('/api/post/slug/' + this.$route.params.slug)
            .then(response => {
                this.post = response.data;
            })
        }
    },
}
</script>

<template>
    <div v-if="post" class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-5">{{ post.title }}</h5>
            <div class="row mb-2">
                <div class="col">
                    <p><span class="fw-semibold">Descripción:</span> <span class="fw-light mb-3">{{ post.description }}</span></p>
                </div>
                <div class="col-auto">
                    <p>Posted: {{ post.posted }}</p>
                </div>
            </div>
            <p class="mb-1 fw-semibold">Contenido:</p>
            <p class="mb-4">{{ post.content }}</p>
            <p><span class="mb-1 fw-semibold">Categoría: </span> {{ post.category.title }}</p>
        </div>
    </div>    
</template>