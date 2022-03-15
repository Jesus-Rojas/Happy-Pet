import Vue from 'vue'
import VueRouter from 'vue-router'
import Header from '../components/Header.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: Header,
    children:[
      {
        path: 'about',
        name: 'about',
        component: () => import('../views/AboutView.vue')
      },
      {
        path: 'mascota',
        name: 'mascota',
        component: () => import('../views/MascotaView.vue')
      },
      {
        path: 'home',
        name: 'home',
        component: () => import('../views/HomeView.vue')
      },
      {
        path: '*',
        redirect: { name: 'home' },
      },
    ]
  },
  {
    path: '*',
    redirect: { name: 'home' },
  },
  
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
