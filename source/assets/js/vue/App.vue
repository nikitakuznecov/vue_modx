<template>
    <transition name="fade" mode="out-in">
        <div class="container">
            <Blog></Blog> 
        </div>
    </transition>
</template>

<script>
 
import { defineAsyncComponent } from 'vue';

export default {
    components:{
        Blog: defineAsyncComponent(() => import(/* webpackChunkName: 'blog' */'./views/Blog.vue')),
        Contacts: defineAsyncComponent(() => import(/* webpackChunkName: 'contacts' */'./views/Contacts.vue')),
    },
    data(){
         return {
             message: 'VUE + modx revo!'
         }
    },
    mounted(){

    }
}
</script>
