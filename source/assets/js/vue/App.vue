<template>
    <NavBar />
    <div class="container">
        <!-- crumbs -->
        <transition name="fade" mode="out-in">
            <router-view></router-view>
        </transition>
        <!-- footer -->
    </div>
</template>
<script>
    import NavBar from './components/NavBar.vue'

    export default {
        components: {
            NavBar,
        },
        data(){
            return{
                show: true
            }
        },
        mounted(){

        }
    }
</script>