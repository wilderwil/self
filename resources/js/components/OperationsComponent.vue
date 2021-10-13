<template>
    <div>
    <draggable
        class="dragArea list-group"
        :list="operations"
        :group="{ name: 'operations', pull: 'clone', put: false }">
     <div
          class="list-group-item-drag"
          v-for="element in operations"
          :key="element.id"
        >
        {{element.description}}
    </div>
    </draggable>
    </div>
</template>
<script>
    export default {
        //name:'operations',
        props: [],
        data(){
            return {

                operations:[],

                
            }
        },
       
        mounted() {
        },
        created(){
            this.fechOperations();
            console.log('Component mounted2.');
          },
        methods: {
            fechOperations() {
                axios.get('/operations_view').then(response => {
                this.operations = response.data;
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
