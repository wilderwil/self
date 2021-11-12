<template>
<div class="container" style="margin-top: 50px;">
<div class="text-left">
<h4>Subir enlace de Youtube al Programa</h4><br>
<div style="max-width: 500px; margin: 0 auto;">
<div v-if="success !== ''" class="alert alert-success" role="alert">
{{success}}
</div>
<form @submit="submitForm" enctype="multipart/form-data">


<br>
            <div class="form-group row">

                <div class="col-md-8 text-left">
                    <label for="title" class=" col-form-label text-md-right">Titulo</label>

                    <input id="title" type="text" class="form-control input-sin-border" name="title" value="" autocomplete="title">


                </div>
            </div>
                        <div class="form-group row">

                <div class="col-md-8 text-left">
                    <label for="description" class=" col-form-label text-md-right">Descripción</label>

                    <input id="description" type="text" class="form-control input-sin-border" name="description" value="" autocomplete="description">


                </div>
            </div>
                        <div class="form-group row">

                <div class="col-md-8 text-left">
                    <label for="link" class=" col-form-label text-md-right">Enlace</label>

                    <input id="link" type="text" class="form-control input-sin-border" name="link" value="" autocomplete="link">


                </div>
            </div>
             <div class="form-group row">

                <div class="col-md-8 text-left">
                  <span class="input-group-append float-right">
                    <button type="submit" class="btn btn-info ">Subir!</button>
                  </span>
                   </div>
            </div>
</form>
</div>
</div>
</div>
</template>
<style scoped>
.input-sin-border{
    border-top:none;
    border-left:none;
    border-right:none;
    border-bottom:1px solid cadetblue;
}
</style>
<script>
export default {
         props: {user_id:Number,program_id:Number},
mounted() {
console.log('Component successfully mounted.')
},
data() {
return {
filename: '',
file: '',
success: ''
};
},
methods: {
onFileChange(e) {
//console.log(e.target.files[0]);
this.filename = "Enlace : " + e.target.value;

},
submitForm(e) {
e.preventDefault();
let currentObj = this;
const config = {
headers: {
'content-type': 'multipart/form-data',
'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
}
}
// form data
let formData = new FormData();
formData.append('url_name', document.getElementById('link').value);
formData.append('description', document.getElementById('description').value);
formData.append('title', document.getElementById('title').value);
formData.append('user_id', this.user_id);
formData.append('program_id', this.program_id);
// send upload request
axios.post('/store_link', formData, config)
.then(function (response) {
currentObj.success = response.data.success;
currentObj.filename = "";
window.document.getElementById('link').value='';
window.document.getElementById('description').value='';
window.document.getElementById('title').value='';


})
.catch(function (error) {
currentObj.output = error;
});
}
}
}
</script>