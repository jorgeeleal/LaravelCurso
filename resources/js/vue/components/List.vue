<script>
import axios from 'axios';
import { RouterLink } from 'vue-router';
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
            },
            deletePost(post, index){
                if(confirm('¿Está seguro que desea eliminar el post?') == true){
                    this.posts.data.splice(index, 1);
                    axios.delete('/api/post/' + post.id)
                }
            }
        }
    }
</script>

<template>
    <div class="container">
        <p class="text-center fs-3 fw-semibold">Posts</p>
        <RouterLink class="btn btn-outline-primary mb-3" to="/vue/add">Crear Post</RouterLink>
        <div v-if="isLoading && posts" class="text-center mt-5">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <div v-else>
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
                    <tr v-for="(post, index) in posts.data" :key="index">
                        <td>{{ post.id }}</td>
                        <td>{{ post.title }}</td>
                        <td>{{ post.posted }}</td>
                        <td>{{ post.created_at }}</td>
                        <td>{{ post.updated_at }}</td>
                        <td>{{ post.category.title }}</td>
                        <td>
                            <RouterLink :to="`/vue/save/${post.slug}`" class="btn btn-outline-secondary">Actualizar</RouterLink>
                            <RouterLink :to="`/vue/show/${post.slug}`" class="btn btn-outline-success mx-1">Ver</RouterLink>
                            <button class="btn btn-outline-danger mx-2" @click="deletePost(post, index)">Eliminar</button>
                        </td>
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