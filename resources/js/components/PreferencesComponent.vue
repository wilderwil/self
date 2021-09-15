<template>
    <div>
    <div
        class="dragArea list-group">
     <div
          class="list-group-item-drag"
          v-for="element in preferences"
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

                preferences:[],

                
            }
        },
       
        mounted() {
        },
        created(){
            this.fechPreferences();
            console.log('Component mounted.');
          },
        methods: {
            fechPreferences() {
                axios.get('/preferences').then(response => {
                this.preferences = response.data;
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
