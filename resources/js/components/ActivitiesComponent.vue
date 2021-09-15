<template>
    <div>
    <div
        class="dragArea list-group">
     <div
          class="list-group-item-drag"
          v-for="element in activities"
          :key="element.description"
        >
        {{element.description}}
    </div>
    </div>
    </div>
</template>
<script>
    export default {
        props: [],
        data(){
            return {

                activities:[],

                
            }
        },
       
        mounted() {
        },
        created(){
            this.fechActivities();
            console.log('Component mounted.');
          },
        methods: {
            fechActivities() {
                axios.get('/activities').then(response => {
                this.activities = response.data;
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
