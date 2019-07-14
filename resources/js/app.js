
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bulma-extensions');
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('button-counter', {
    data: function () {
        return {
            count: 0
        }
    },
    template: '<a class="button is-primary" v-on:click="count++">You clicked me {{ count }} times.</a>'
})

/**
* Vue Router
*
* @link http://router.vuejs.org/en/installation.html
*/
import VueRouter from 'vue-router';
Vue.use(VueRouter);

const Home = {
    template: `
      <div class="home">
        <h2>Home</h2>
        <p>hello</p>
      </div>
    `
  }
  
  const Parent = {
    data () {
      return {
        transitionName: 'slide-left'
      }
    },
    beforeRouteUpdate (to, from, next) {
      const toDepth = to.path.split('/').length
      const fromDepth = from.path.split('/').length
      this.transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left'
      next()
    },
    template: `
      <div class="parent">
        <h2>Parent</h2>
        <transition :name="transitionName">
          <router-view class="child-view"></router-view>
        </transition>
      </div>
    `
  }
  
  const Default = { template: '<div class="default">default</div>' }
  const Foo = { template: '<div class="foo">foo</div>' }
  const Bar = { template: '<div class="bar">bar</div>' }
  
  const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes: [
      { path: '/', component: Home },
      { path: '/parent', component: Parent,
        children: [
          { path: '', component: Default },
          { path: 'foo', component: Foo },
          { path: 'bar', component: Bar }
        ]
      }
    ]
  })

    const app = new Vue({
        el: '#app'
    });

const appRouterTransition = new Vue({
    router,
    template:
    `<div id="app">
      <h1>Transitions</h1>
      <ul>
        <li><router-link to="/">/</router-link></li>
        <li><router-link to="/parent">/parent</router-link></li>
        <li><router-link to="/parent/foo">/parent/foo</router-link></li>
        <li><router-link to="/parent/bar">/parent/bar</router-link></li>
      </ul>
      <transition name="fade" mode="out-in">
        <router-view class="view"></router-view>
      </transition>
    </div>`
}).$mount('#app-vue-transition');

// const app = new Vue({
//     el: '#app'
// });


// Bulma NavBar Burger Script
document.addEventListener('DOMContentLoaded', function () {
    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    
    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
        
        // Add a click event on each of them
        $navbarBurgers.forEach(function ($el) {
            $el.addEventListener('click', function () {
                
                // Get the target from the "data-target" attribute
                let target = $el.dataset.target;
                let $target = document.getElementById(target);
                
                // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                $el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
                
            });
        });
    }
    
});