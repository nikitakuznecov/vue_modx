import { createRouter, createWebHistory } from 'vue-router'
import { defineAsyncComponent } from 'vue'

const Blog = defineAsyncComponent(() => import(/* webpackChunkName: 'blog' */'./views/Blog.vue'));
const Contacts = defineAsyncComponent(() => import(/* webpackChunkName: 'contacts' */'./views/Contacts.vue'));
const BlogItem = defineAsyncComponent(() => import(/* webpackChunkName: 'blog-item' */'./views/BlogItem.vue'));

const routes = [
    {
        path: '/',
        name: 'blog',
        component: Blog
    },
    {
        path: '/blog/:suburl(.*)',
        name: 'blog-item',
        component: BlogItem
    },
    {
        path: '/contacts',
        name: 'contacts',
        component: Contacts
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;