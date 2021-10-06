<template>
    <div>
    <draggable
        class="dragArea list-group"
        :list="activities"
        :group="{ name: 'activities', pull: 'clone', put: false }">
     <div
          class="list-group-item-drag"
          v-for="element in activities"
          :key="element.id"
        >
        {{element.description}}
    </div>
    </draggable>
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
