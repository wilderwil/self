<template>
    <div>

<select v-model="selected" name="course_id" seleccionado="selected" id="course_select">
  <option v-for="course in courses" :key=" course.id" v-bind:value=" course.id " >
    {{ course.course }}
    
  </option>
  
</select>

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
