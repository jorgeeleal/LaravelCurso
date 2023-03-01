<script>
import axios from 'axios';
    export default {
        data() {
            return {
               posts : [],
               isLoading: true 
            }
        },
        async mounted() {
            this.getData('/api/post');
        },
        methods: {
            next(){
                this.getData(this.posts.next_page_url);
            },
            prev(){
                this.getData(this.posts.prev_page_url);
            },
            getData(url){
                this.isLoading = true;
                axios.get(url).then((response) => {
                this.posts = response.data;
                this.isLoading = false;
                })
            }
        }
    }
</script>

<template>
    <div class="container">
        <p class="text-center fs-3 fw-semibold">Posts</p>
        <div v-if="isLoading && posts" class="text-center mt-5">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <div v-else class="container">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Posted</th>
                        <th scope="col">Created_At</th>
                        <th scope="col">Updated_At</th>
                        <th scope="col">Category_id</th>         
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr v-for="post in posts.data">
                        <td>{{ post.id }}</td>
                        <td>{{ post.title }}</td>
                        <td>{{ post.posted }}</td>
                        <td>{{ post.created_at }}</td>
                        <td>{{ post.updated_at }}</td>
                        <td>{{ post.category.title }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-group mt-3" role="group">
                <button class="btn btn-outline-primary" @click="prev" :disabled="!posts.prev_page_url">
                    &laquo; Prev
                </button>
                <button class="btn btn-outline-primary" @click="next" :disabled="!posts.next_page_url">
                    Next &raquo;
                </button>
            </div>
        </div>
    </div>
</template>