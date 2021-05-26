import Vue from 'vue';
import Router from 'vue-router';
import BeerPage from './js/components/beerpage'
import AddBeer from './js/components/addbeer'

Vue.use(Router);

const BeerRoutes = [
    {
    path: '/beers/:id',
    name: 'beerpage',
    component: { BeerPage }
    },
    {
    path: '/add',
    name: 'addbeer',
    component: { AddBeer }
    }
]

export default new Router({
    routes: BeerRoutes,
    mode: 'history',
});