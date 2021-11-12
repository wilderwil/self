<template>
    <div class="row">
        <div class="col-sm-8">
        <!-- 16:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-16by9">
            <iframe 
                class="embed-responsive-item"
                :src=" videoSelected.url_name"
                frameborder="0"
                allowfullscreen></iframe>
        </div>
        <hr>
        <p class="text-justify">{{ videoSelected.description }}</p>
        </div>
        <div class="col-sm-4">
        <ul class="list-group">

            <li class="list-group-item youtube-item" v-for="video, index in getVideoList()" :key=index>
                #{{index + 1}} 
                <a href="#" @click="selectVideo(video)">
                    {{ video.title }}
                </a><br>
                <small>{{ video.description }}</small>
            </li>
        </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'youtube',
        props: {url:String,program_id:Number},
        data() {
            return {
                videoList: [],
                categorySelected: 'all',
                videoSelected: {
                    url_name: 'https://www.youtube.com/embed/I4uNDXlKFLU',
                    description: 'SocioEmocional'
                }
            }
        },
        mounted() {
            //this.getVideos();
            this.fechVideos()
        },
        methods: {
            fechVideos() { console.log("program",this.program_id)
                axios.get('/videos/'+this.program_id).then(response => { console.log(response.data)
                this.videoList = response.data;
            })
            },

            getVideoList() {
                let self = this;
                return this.videoList.filter(x => {
                    if(self.categorySelected === 'all') {
                        return x;
                    } else {
                        return x.category === self.categorySelected;
                    }
                });
            },
            selectVideo(video) {
                this.videoSelected.url_name = video.url_name;
                this.videoSelected.description = video.description;
            }
        }
    }
</script>
<style scoped>
.youtube-item{
    background:#D9EEFD
}
</style>