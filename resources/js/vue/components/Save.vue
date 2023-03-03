<script>
import axios from 'axios';
export default {
    data() {
        return {
            categories: [],
            form:{
                title:"",
                content:"",
                description:"",
                posted:"",
                category_id:"", 
                slug:""
            },
            errors:{
                title:"",
                content:"",
                description:"",
                posted:"",
                category_id:""
            },
            post: ""
        }
    },
    async mounted() {
        if(this.$route.params.slug)
        {
            this.getPost();  
        }
        this.getCategory();
    },
    methods: {
        getCategory(){
            axios.get('/api/category').then((response) => {
                this.categories = response.data;
            })
        },
        getPost(){
            axios.get("/api/post/slug/" + this.$route.params.slug)
            .then(response => {
                //console.log(response.data);
                this.post = response.data;
                //console.log(this.post);
            }).then(() => {
                this.initPost();
            })
            
        },
        submit(){
            this.cleanErrorsForm();
            if(this.post == ""){
                axios.post('/api/post', this.form).then((response) => {
                    this.$router.push('/vue')
                }).catch(error => {
                    this.errorsForm(error);
                });
            } else {
                axios.put('/api/post/slug/' + this.$route.params.slug, this.form).then((response) => {
                    this.$router.push('/vue')
                }).catch(error => {
                    // console.log(error.response.data);
                    this.errorsForm(error);
                });
            }

            
        },
        cleanErrorsForm() {
            this.errors.title = "";
            this.errors.content = "";
            this.errors.description = "";
            this.errors.posted = "";
            this.errors.category_id = "";
        },
        initPost(){
            this.form.title = this.post.title;
            this.form.content = this.post.content;
            this.form.description = this.post.description;
            this.form.posted = this.post.posted;
            this.form.category_id = this.post.category_id;
            this.form.slug = this.post.slug;
        },
        errorsForm(error){
            if(error.response.data.title) this.errors.title = error.response.data.title[0];
            if(error.response.data.content) this.errors.content = error.response.data.content[0];
            if(error.response.data.description) this.errors.description = error.response.data.description[0];
            if(error.response.data.posted) this.errors.posted = error.response.data.posted[0];
            if(error.response.data.category_id) this.errors.category_id = error.response.data.category_id[0];
        }
    },
}
</script>

<template>
    <div class="card">
        <div class="card-header fs-4">
            Guardar Post
        </div>
        <div class="card-body">
            <form @submit.prevent="submit">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-1">
                            <label for="title">Título</label>
                        </div>
                        <div class="col">
                            <input v-model="form.title" type="text" class="form-control form-control-sm" name="title" >
                            <p v-if="errors.title" class=" fs-6 text-danger " >*{{errors.title}}</p>

                        </div>
                    </div>
                </div>
                <div v-if="$route.params.slug" class="mb-3">
                    <div class="row">
                        <div class="col-1">
                            <label for="title">Slug</label>
                        </div>
                        <div class="col">
                            <input v-model="form.slug" type="text" class="form-control form-control-sm" name="title" >
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-1">
                            <label for="content">Contenido</label>
                        </div>
                        <div class="col">
                            <textarea v-model="form.content" class="form-control form-control-sm" name="content" rows="3" ></textarea>
                            <p v-if="errors.content" class=" fs-6 text-danger " >*{{errors.content}}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-1">
                            <label for="description">Descripción</label>
                        </div>
                        <div class="col">
                            <textarea v-model="form.description" class="form-control form-control-sm" name="description" rows="2" ></textarea>
                            <p v-if="errors.description" class=" fs-6 text-danger " >*{{errors.description}}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-1">
                            <label for="posted">Posted</label>
                        </div>
                        <div class="col">
                            <select v-model="form.posted" class="form-select form-select-sm" name="posted" >
                                <option value="not">Not</option>
                                <option value="yes">Yes</option>
                            </select>
                            <p v-if="errors.posted" class=" fs-6 text-danger " >*{{errors.posted}}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-1">
                            <label for="posted">Categoría</label>
                        </div>
                        <div class="col">
                            <select v-model="form.category_id" class="form-select form-select-sm" name="category_id" >
                                <option v-for="category in categories" :value="category.id">{{ category.title }}</option>
                            </select>
                            <p v-if="errors.category_id" class=" fs-6 text-danger " >*{{errors.category_id}}</p>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>
        </div>
    </div>
</template>