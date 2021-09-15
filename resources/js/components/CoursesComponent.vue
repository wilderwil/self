<template>
    <div>

<select v-model="selected" name="course" seleccionado="selected">
  <option v-for="course in courses" :key=" course.id" v-bind:value=" course.course " >
    {{ course.course }}
    
  </option>
  
</select>
<input id="prueba" v-bind:value="selected" >
    </div>
    
</template>
<script>
    export default {
        props: [],
        data(){
            return {

                courses:[],
                selected:[]

                
            }
        },
       
        mounted() {
        },
        created(){
            this.fechCourses();
            console.log('Component mounted.');
          },
        methods: {
            fechCourses() {
                axios.get('/courses').then(response => {
                this.courses = response.data;
            })
            },


            }
            

        }
    
</script>
<style scoped>
.list-group-item {
    padding: 0.rem 1.25rem;
}
</style>
