import Vue from "vue";
import VueRouter from "vue-router";
import Chat from './views/Chat';
import ChatsComponent from './components/ChatsComponent';
// Vue.use(VueRouter)



const routes = [
  { path: '/',
  name:'chats', 
  component: Chat ,
 
   
},
  { path: '/test',
  name:'test', 
  component:  ChatsComponent},

     
  ];
console.log("routes");
const router = new VueRouter({
   
  routes // short for `routes: routes`
  ,mode:'history',

});



export default router;



