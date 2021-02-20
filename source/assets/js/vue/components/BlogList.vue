<template>
    <div class="row">
        <div class="col-xs-12 col-sm-4 p-3" v-for="resource of resources">
            <div class="card">
                <img src="https://loremflickr.com/320/240/paris,girl/all" class="card-img-top" alt="{{resource.pagetitle}}">
                <div class="card-body">
                    <h5 class="card-title">{{resource.pagetitle}}</h5> 
                    <p class="card-text">{{resource.introtext}}</p>
                    <router-link class="btn btn-primary" :to="{path: '/' + resource.uri}">Подробнее</router-link>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                resources: []
            };
        },
        created(){
            let that = this;
            axios.get('/api/blog').then(function(result){
                that.resources = result.data.results;
            })
        }
    }
</script>