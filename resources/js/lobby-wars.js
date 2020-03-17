import './settings';
import Vue from 'vue';

//Vue js axios component
import axios from 'axios'
import VueAxios from 'vue-axios'
Vue.use(VueAxios, axios)
Vue.axios.defaults.baseURL = window.settings.api_url
Vue.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

//Lobby app
import LobbyWarsComponent from './Components/LobbyWarsComponent.vue';
Vue.component('lobby-wars-component', LobbyWarsComponent);

const app = new Vue({
    el: '#app',
});
