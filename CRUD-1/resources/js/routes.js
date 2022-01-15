import AllProduct from './components/AllProduct.vue';
import CreateProduct from './components/CreateProduct.vue';
import EditProduct from './components/EditProduct.vue';
import Country from './components/Country.vue';
import CountryBootstrap from './components/CountryBootstrap.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllProduct
    },
    {
        name: 'create',
        path: '/create',
        component: CreateProduct
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditProduct
    },
    {
        name: 'country',
        path: '/country',
        component: Country
    } ,
    {
        name: 'country_bootstrap',
        path: '/country_bootstrap',
        component: CountryBootstrap
    }
];