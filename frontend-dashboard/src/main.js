import Vue from 'vue'
import './plugins/bootstrap-vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import App from './App.vue'
import VueRouter from 'vue-router'
import LoginComponent from './pages/Login/LoginComponent'
import HomeComponent from './pages/Home/HomeComponent'
import ProducsComponent from './pages/Products/ProducsComponent'
Vue.config.productionTip = false
Vue.use(VueRouter)
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

const routes = [
  { path: '/', name:'login', component: LoginComponent },
  { path: '/home', name:'home', component: HomeComponent },
  { path: '/products', name:'products', component: ProducsComponent},
  { path: '/sales', name:'sales', component: HomeComponent },
  { path: '/reports', name:'reports', component: HomeComponent }
]

const router = new VueRouter({
  routes
})


new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
