<template>
  <div class="row">
    <div class="col-5">
      <h3>Draggable 1</h3>
      <draggable
        class="dragArea list-group"
        :list="preferences"
        :group="{ name: 'people', pull: 'clone', put: false }"
        @change="log"
      >
        <div
          class="list-group-item"
          v-for="element in preferences"
          :key="element.description"
        >
          {{ element.description }}
        </div>
      </draggable>
    </div>

    <div class="col-3">
      <h3>Draggable 2</h3>
      <draggable
        class="dragArea list-group"
        :list="list2"
        group="people"
        @change="log"
      >
        <div
          class="list-group-item"
          v-for="(element, idx) in list2"
          :key="element.description"
        >
          {{ element.description }} <i class="fa fa-times close" @click="removeAt(idx)"></i>
        </div>
      </draggable>
    </div>


  </div>
</template>

<script>
import draggable from "vuedraggable";
export default {
  name: "clone",
  display: "Clone",
  order: 2,
  components: {
    draggable
  },
  data() {
    return {
      preferences: [
        { name: "John", id: 1 },
        { name: "Joao", id: 2 },
        { name: "Jean", id: 3 },
        { name: "Gerard", id: 4 }
      ],
      list2: [
        { name: "Juan", id: 5 }
   
      ]
    };
  },
    created(){
    this.fechPreferences();
    console.log('Component mounted.');
    },
    methods: {
        log: function(evt) {
             window.console.log(evt);
        },
        fechPreferences() {
            axios.get('/preferences').then(response => {
            this.preferences = response.data;
        })
       },removeAt(idx) {
      this.list2.splice(idx, 1);
    },
    }}
</script>
<style scoped>
.list-group-item {
    width: 96px;
    border-radius: 15px;
    height: 23px;
    padding: .50rem 1.25rem;
    text-align:center;
    float:left;
    margin:5px;
}
.dragArea.list-group{
    display:block;
    width:500px;
    height: 160px;
}
 .list-group-item {
    border-top-width: 1;
}
</style>