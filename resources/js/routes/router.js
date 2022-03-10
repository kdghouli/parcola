import Vue from 'vue';
import VueRouter from 'vue-router';
// import IndexVue from '../components/IndexVue.vue';
import GlobalRouter from '../components/App.vue';
import AddAgence from '../components/AddAgence.vue';

// import AddVhl from '../components/AddVhl.vue';
// import ShowVhl from '../components/ShowVhl.vue';
// import UpdateVhl from '../components/UpdateVhl.vue';





Vue.use(VueRouter);

const routes = [
     
    // {path:'/pageVue',component:IndexVue,name:'index-vue'},
    { path: '/pageVue', component: GlobalRouter, name: 'global-router' },
    { path: '/pageVue', component: AddAgence, name: 'add-agence' }


    // {path:'/api/add',component:AddVhl,name:'add-vhl'},
    // {path:'/vhls/show',component:ShowVhl,name:'show-vhl'},
    // {path:'/vhls/update',component:UpdateVhl,name:'update-vhl'}
];


const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
});

export default router;

