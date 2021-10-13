<template>
    <div>
    <draggable
        class="dragArea list-group2"
        :list="lista"      
        group="operations"
        @remove="log"
        @add="insert_operation"
        @change="cambio"
        :sort="false"
        @start="inicio"
         @end="fin"
        >
     <div
          class="list-group-item-drag"
          v-for="(element,idx) in lista"
          :key="element.description"
    
        >
        {{element.description}}<i class="fa fa-times close" @click="removeAt(idx)">x</i>
          
    </div>
    </draggable>
  
    </div>

</template>
<script>
import draggable from "vuedraggable";
import rawDisplayer from "vuedraggable";
    export default {
        props: {hour_id:Number, day_id:Number,user_id:Number},
        components: {
         draggable,
         rawDisplayer
        },
        data(){
            return {

            lista:[],
            operation_id:null,
                
            }
        },
       
        mounted() {
        },
        created(){
         //   this.fechActivities();
            console.log('Component mounted.');
          },
        methods: {
            fechOperations() {
                axios.get('/operations').then(response => {
                this.operations = response.data;
            })
            },
            removeAt(idx) {
               
            var object_delete = {
            hour_id: this.hour_id,
            day_id: this.day_id,
            user_id: this.user_id,
            operation_id: this.lista[idx].id,
            }    
            axios.delete('/operations_profesor',{data:object_delete}).then(response => {
            console.log('procesado',response)
        }).catch(e => {
            console.log(e);
        });
      this.lista.splice(idx, 1);
    },
       log: function(evt) {
      
    },
    insert_operation: function (event){
        if(event.newIndex === 0 && this.lista.length>=2)
            this.removeAt(1)
        if(this.lista.length == 1){
        axios.post('/operations_profesor', {
            hour_id: this.hour_id,
            day_id: this.day_id,
            user_id: this.user_id,
            operation_id: this.lista[0].id
        }).then(response => {
            // Respuesta del servidor
        }).catch(e => {
            console.log(e);
        });
        }
    },
    cambio: function (event){
        console.log(event)
       //  this.removeAt(event.removed.oldIndex)
    },
    inicio:function (event){
        console.log(this.hour_id)
           this.operation_id = this.lista[0].id
    },
        fin:function (event){
     
         axios.delete('/operations_profesor', {data:{
            hour_id: this.hour_id,
            day_id: this.day_id,
            user_id: this.user_id,
            operation_id: this.operation_id
        }}).then(response => {
            console.log(response)
        }).catch(e => {
            console.log(e);
        });
    }



            }
            

        }
    
</script>
<style scoped>
.list-group-item {
    padding: 0.rem 1.25rem;
}
.dragArea.list-group2 {
    display: block;
    width: 60px;
    height: 30px;
}
</style>
