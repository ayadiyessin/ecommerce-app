// //sna3na routes.js bech n7otou les routes mta les composent
// import accueil from './components/accueil.vue';
// export const routes = [ // tableau
// {
// name: 'accueil',
// path: '/',
// component: accueil // nom de composent
// }
// ];
import listearticles from "./components/listearticles.vue";
import Accueil from "./components/accueil.vue";
import Viewcategorie from "./components/categorie/Viewcategorie.vue";
import Addcategorie from "./components/categorie/Addcategorie.vue";
import Viewarticles from "./components/articles/Viewarticles.vue"
import Addarticle from "./components/articles/addarticle.vue"

export const routes = [
    {
        name: "accueil",
        path: "/",
        component: Accueil,
    },
    {
        name: "listearticles",
        path: "/listearticles",
        component: listearticles,
    },
    { // appele compoinet vuecategorie
        name: "Viewcategorie",
        path: "/Viewcategorie",
        component: Viewcategorie,
    },
    { // route pour compoinet addcategorie
        name: "Addcategorie",
        path: "/Addcategorie",
        component: Addcategorie,
    },
    { // appele compoinet Viewarticles ********* kol composent .vue nsn3ou direct na3melou routes
        name:"Viewarticles",
        path:"/listart",
        component:Viewarticles
    },
    { // appele compoinet Addarticle
        name:"Addarticle",// hetha nsamih eli nheb
        path:"/addarticle",// hetha nsamih eli nheb
        component:Addarticle // hetha lezem nsamih kima esem el page.vue
    },

];

