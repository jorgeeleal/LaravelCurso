<script>
import { RouterLink, RouterView } from 'vue-router'
export default {
}
</script>

<template>
    <div class="container mt-3">
        <nav class="navbar navbar-expand-lg bg-body-tertiary mt-3 mb-3">
            <div class="container">
                <RouterLink to="/vue" class="navbar-brand" href="#">Lista</RouterLink>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <RouterLink to="/vue" class="nav-link active">Categorías</RouterLink>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <RouterView />
    </div>
</template>       
