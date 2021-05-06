import Vue from 'vue';
import Router from 'vue-router';
import beerPage from './js/components/beerPage'

Vue.use(Router);

const BeerRoutes = {
    path: '/beers/:id/',
    name: 'BeerPage',
    components: {
        default: beerPage
    }
}

export default new Router({
    routes: [
        BeerRoutes
    ],
    mode: 'history',
});