<template>
    <div class="grid grid-cols-3 gap-4" >
        <div class="max-w-lg w-full rounded-lg shadow-lg p-4" v-for="project in projects" v-bind:key="project">
            <h3 class="font-semibold text-lg text-gray-700 tracking-wide">{{project.title}}</h3>
            <p class="text-gray-500 my-1">
                {{project.description}}
            </p>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data(){
        return{
            projects: []
        }
    },
    created(){
        
        axios.post('/graphql',{
            query: '{projects{id,title,description}}'
        }).then(res => {
            console.log('hola');
            this.projects = res.data.data.projects;
        }).catch(error => console.log(error));
    }
}
</script>