require('./bootstrap');

window.Vue = require('vue');

import VueSweetalert2 from 'vue-sweetalert2';
import VueToastr2 from 'vue-toastr-2'
import 'vue-toastr-2/dist/vue-toastr-2.min.css'
import MainRoutes from './routes/main-routes';

window.toastr = require('toastr');
Vue.use(VueToastr2);
Vue.use(VueSweetalert2);



const app = new Vue({
    el: '#app',
    components:{},
    router: MainRoutes
});
