// import { createApp } from "vue";
// import { createRouter, createWebHistory } from "vue-router";
// import { routes } from "./routes";
// import "bootstrap/dist/css/bootstrap.min.css";
// import App from "./app.vue";
// let app = createApp(App); // ficher app
// const router = createRouter({
//     //history: createWebHashHistory(), //# eli fi lien
//     //bech n7yha
//     history: createWebHistory,
//     routes: routes,
// });
// app.use(router);
// app.mount("#app"); // balise ili 3andha id app

// //hetha el micanisem eli fi vuejs
// //=>awel fichier ymchyloun web.php w bad y9olou emchy ll app.blade w app.blade yb3thou ll app.js  donc app.js y9olou bara ll routes w route yhez  eli fi wost el app.vue fi app.balde fi id=app


// erreur houni *

import { createApp } from "vue";
import {
    createRouter,
    createWebHashHistory,
    createWebHistory,
} from "vue-router";
import { routes } from "./routes";
import "bootstrap/dist/css/bootstrap.min.css";
import "@fortawesome/fontawesome-free/css/all.css"; // appele ll fortawesome mta3 les icone 
import App from "./App.vue";
let app = createApp(App);
const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});
app.use(router);
app.mount("#app");
