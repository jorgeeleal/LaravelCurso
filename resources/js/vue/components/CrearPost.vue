<script>
import axios from 'axios';
export default {
    data() {
        return {
            categories: [],
        }
    },
    async mounted() {
        axios.get('/api/category').then((response) => {
            this.categories = response.data;
        })
    },
}
</script>

<template>
    <div class="card">
        <div class="card-header fs-4">
            Crear Post
        </div>
        <div class="card-body">
            <form action="">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-1">
                            <label for="title">Título</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control form-control-sm" name="title">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-1">
                            <label for="content">Contenido</label>
                        </div>
                        <div class="col">
                            <textarea class="form-control form-control-sm" name="content" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-1">
                            <label for="description">Descripción</label>
                        </div>
                        <div class="col">
                            <textarea class="form-control form-control-sm" name="description" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-1">
                            <label for="posted">Posted</label>
                        </div>
                        <div class="col">
                            <select class="form-select form-control-sm" name="posted">
                                <option value="not">Not</option>
                                <option value="yes">Yes</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-1">
                            <label for="posted">Categoría</label>
                        </div>
                        <div class="col">
                            <select class="form-select form-control-sm" name="category_id">
                                <option v-for="category in categories" :value="category.id">{{ category.title }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>
        </div>
    </div>
</template>