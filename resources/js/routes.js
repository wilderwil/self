import Vue from "vue";
import VueRouter from "vue-router";
import Chat from './views/Chat';
import YoutubeComponent from './components/YoutubeComponent';
// Vue.use(VueRouter)



const routes = [
  { path: '/',
  name:'chats', 
  component: Chat ,
 
   
},
  { path: '/home',
  name:'youtube', 
  component:  YoutubeComponent},

     
  ];
console.log("routes");
const router = new VueRouter({
   
  routes :routes// short for `routes: routes`
  ,mode:'history',

});



export default router;



