<template>
    <div>




      <!-- /.modal -->

      <div class="modal fade" data-keyboard="false" data-backdrop="static" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btn-close2">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" >
              <div class="container">
                <div class="row">
                   <div 
          class="col-sm-2 col-md-3 col-lg-1  mood"
          v-for="element in moods"
          :key="element.id"
        >
        
       <input type="radio" :id="'btn'+ element.id" name="btn" :id2="element.id">
<label :for="'btn'+ element.id">
    <div class="space-blank"></div>
    <div :class="'face-'+ element.id">
        <div class="face-draw">
            <img :src="asset('img/estado-'+ element.id+'.png')">
        </div>
    </div> 
    <div :class="'label-'+ element.id">{{element.name}}</div>
</label>

    </div>
    </div>
    </div>
            </div>
            <div class="modal-footer justify-content-between">
              
              <button type="button" class="btn btn-default" data-dismiss="modal" id="btn-close">Close</button>
              <button v-on:click="save_state" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


<button hidden type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl" id="open_modal">
                  Launch Modal
                </button>
    </div>
</template>
<script>
    export default {
        
         props: {user_id:Number},
        data(){
            return {

                moods:[],
               // moods_images:[]

                
            }
        },
       
        mounted() {
            var open_modal = document.getElementById('open_modal')
            open_modal.click()
        },
        created(){
            this.fechActivities();
            console.log('Component mounted.');
          },
        methods: {
            fechActivities() {
                axios.get('/moods_all').then(response => {
                this.moods = response.data;
            })
            },
            save_state: function (event) {

              var moods = document.getElementsByName('btn');
              var btn_close = document.getElementById('btn-close');
              for (var i = 0, length = moods.length; i < length; i++)
                {
                if (moods[i].checked)
                {
                    let mood_id = moods[i].getAttribute('id2')
                    axios.post('/mood_save', {
                        user_id: this.user_id,
                        mood_id: mood_id,
                    }).then(response => {
                                                
                    }).catch(e => {
                          console.log(e);
                    });
                    
                    btn_close.click()
                }
                }
            }


            }
            

        }
    
</script>

<style scoped>
.mood{
  width:auto;
}
@media (min-width: 992px){
  .mood {
   margin-right:35px;
}}
 
    body{
        background: #fff !important;
    }
    .banner-informativo{
         background: #E0DCDC;
         margin: 15px 0px;

    }
  /*  .container{width:920px !important;}*/
    .centrada{
        justify-content: space-between;
    }
    label[for="btn8"],
    label[for="btn7"],
    label[for="btn6"],
    label[for="btn5"],
    label[for="btn4"],
    label[for="btn3"],
    label[for="btn2"],
    label[for="btn1"]{
        grid-column: 2;
        grid-row: 2;
        position: relative;
        width: 135px;
    }

    .face-8,
    .face-7,
    .face-6,
    .face-5,
    .face-4,
    .face-3,
    .face-2,   
    .face-1{
        width: 100%;
        height: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .face-8 .face-draw,
    .face-7 .face-draw,
    .face-6 .face-draw,
    .face-5 .face-draw,
    .face-4 .face-draw,
    .face-3 .face-draw,
    .face-2 .face-draw,
    .face-1 .face-draw{
        width: 40%;
        height: 70%;
        text-align: center;
    }
    .label-8,
    .label-7,
    .label-6,
    .label-5,
    .label-4,
    .label-3,
    .label-2,
    .label-1{
        width: 100%;
        height: 20%;
        font-size: 18px;
        text-align: center;
    }
    .face-draw img{
        width: 35px;
    }
    

#btn8:checked img{
    width: 96%;
    transition-duration: 1s;
}
#btn7:checked ~ div .likert-bar{
    width: 83%;
    transition-duration: 1s;
}
 #btn6:checked ~ div .likert-bar {
    width: 71%;
    transition-duration: 1s;
}
#btn5:checked ~ div .likert-bar{
    width: 58%;
    transition-duration: 1s;
}
#btn4:checked ~ div .likert-bar{
    width: 46%;
    transition-duration: 1s;
}
#btn3:checked ~ div .likert-bar{
    width: 33%;
    transition-duration: 1s;
}
#btn2:checked ~ div .likert-bar{
    width: 20%;
    transition-duration: 1s;
}
#btn1:checked ~ div .likert-bar{
    width: 7%;
    transition-duration: 1s;
}
#btn8:checked ~ label .face-8 .face-draw img,
#btn7:checked ~ label .face-7 .face-draw img,
#btn6:checked ~ label .face-6 .face-draw img,
#btn5:checked ~ label .face-5 .face-draw img,
#btn4:checked ~ label .face-4 .face-draw img,
#btn3:checked ~ label .face-3 .face-draw img,
#btn2:checked ~ label .face-2 .face-draw img,
#btn1:checked ~ label .face-1 .face-draw img{
    color:red;
    transition-duration: 1s;
    width:45px;
}
input[type="radio"]{display:none}
</style>