<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container">
        <a class="navbar-brand" href="/">Vue + Modx Revolution</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"
                    :class="{ 'active': $router.currentRoute.value.name === 'blog' ||  $router.currentRoute.value.name === 'blog-item' }"
                >
                    <router-link
                            class="nav-link"
                            :to="{ name: 'blog' }"
                    >Блог</router-link>
                </li>
                <li class="nav-item"
                    :class="{ 'active': $router.currentRoute.value.name === 'contacts'}"
                >
                    <router-link
                            class="nav-link"
                            :to="{ name: 'contacts' }"
                    >Контакты</router-link>
                </li>
            </ul>
        </div>
        </div>
    </nav>
</template>
<script>
    export default {
        mounted(){
            console.log('%cNavbar загружен','color: lime; background: black');
            //console.log(this.$router.currentRoute);
        }
    }
</script>