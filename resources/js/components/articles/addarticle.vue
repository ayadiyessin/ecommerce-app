<template>
    <div class="col-md-6 offset-md-3 border rounded p-4 mt-2 shadow"> <!-- ijini 5arej shadow-->
        <h4 align="center">Ajout Article</h4>
        <form @submit.prevent="addArticle"> <!-- prevent bech ki fama erreur w ena nzelt al btn ma yfsa5ch el contenue mta formulaire-->
            <div class="row"> <!--kol rows bech na9samha ala 2-->
                <div class="col-md-6">
                    <label for="reference" class="form-label">Référence</label>

                    <input type="text" class="form-control" id="reference" v-model="article.reference">

                </div>
                <div class="col-md-6 ms-auto">

                    <label for="designation" class="form-label">Désignation</label>

                    <input type="texte" class="form-control" id="designation" v-model="article.designation">

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="marque" class="form-label">Marque</label>

                    <input type="text" class="form-control" id="marque" v-model="article.marque">

                </div>
                <div class="col-md-6 ms-auto">
                    <label for="Quantité" class="form-label">Qtock</label>

                    <input type="texte" class="form-control" id="qtestock" v-model="article.qtestock">

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="prix" class="form-label">Prix</label>

                    <input type="text" class="form-control" id="prix" v-model="article.prix">

                </div>
                <div class="col-md-6 ms-auto">
                    <label for="categorie" class="form-label">Catégorie</label>
                    <!-- hetha bech raja3na liste relon el input w sabina fiha les nom de sous categorie -->
                    <select class="form-control" v-model="article.scategorieID"> <!-- rbatna el chaps  bel scategorieID ll methode add "state article "  -->
                    <option v-for="sc in Scategories" :key="sc.id" :value=sc.id>{{sc.nomscategorie}}</option><!-- na3mel parcours al state scategorie bad ma 3abitou  wn7eb nafichii ken el nom  -->
                    </select>
                    <!-- <input type="texte" class="form-control" id="categorieID" v-model="article.scategorieID"> -->

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">.
                    <label for="prix" class="form-label">Image</label>

                    <!-- <input type="text" class="form-control" id="imageart" v-model="article.imageart"> -->
                    <!-- hetha el filepond-->
                    <file-pond
                        name="test"
                        ref="pond"
                        class-name="my-pond"
                        label-idle="Drop files here..."
                        allow-multiple="false"
                        accepted-file-types="image/jpeg, image/png"
                        v-bind:files="myFiles"

                        v-on:init="handleFilePondInit"
                        :server="serverOptions()"
                    /><!-- allow-multiple="false" ki n7eb nsob barcha tsawer lezem n7otou true -->
                    <!--
                        :server="serverOptions()"  methode eli bech ta3el saive fi cloudiary
                    -->

                </div>
            </div>
            <br />
            <button type="submit" className="btn btn-outline-primary">
                <i class="fa-solid fa-floppy-disk"></i>Enregister

            </button>
            <router-link to="/listart" class="btn btn-outline-danger mx-2"> <!-- router link bech bad irja3ni ll lien /listart-->

                <i class="fa-solid fa-xmark"></i>Cancel
            </router-link>
        </form>
    </div>
</template>
<script setup>

import { ref,onMounted } from "vue" // zdna el onMounted bech el methode eli bech n3aytoulha fi wostha ttcharja fi chargemenet mta page
import { useRouter } from 'vue-router'; // bech ya3mel rederection b bouton iheznii men composent el composent
//hethpm teb3in ll filepond
import vueFilePond from 'vue-filepond';
import 'filepond/dist/filepond.min.css';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css';


const FilePond = vueFilePond(FilePondPluginImagePreview);// Create FilePond component
const myFiles = ref([]); // hetha 5ater nejem nda5al akthar men photo

// fin filepond

const router = useRouter()
import axios from 'axios';
const article = ref({ // objet state fera8
    reference: "",
    designation: "",
    marque: "",
    qtestock: 0,
    prix: 0,
    imageart: "",
    scategorieID: ""
}) // bech norbot hethom bel formulaire bel v-model
//=> bech nbath state ll base mouch formualire  => donc lezem norbot el formulaire bel state
// angulaire y5dem bel ng-model
const addArticle = async () => { // toujour asyn 5ater bech ttorbot bel backend
    await
        axios.post("http://localhost:8000/api/articles/", article.value) // nbath state 5atrou m3ebi
            .then(() => (

                router.push({ name: 'Viewarticles' }) // bech ta3meli rederectioon yani bad ma nkamel hezni ll Viewarticle
            ))

            .catch(err => console.log(err))

}
const Scategories = ref([]); // creation mta tableau de sous categorie fera8
const getscategories = () => {

    axios.get('http://localhost:8000/api/scategories').then(res => { // bech n3abiou tableau sous categorie
        Scategories.value = res.data;
    }).catch(error => {
        console.log(error)
    });
}
onMounted(() => { // bech icharjia el methode fi chargelmebt mta vue
    getscategories();
});

// seve image

const serverOptions = () => {
    console.log('server pond');
    return {
        process: (fieldName, file, metadata, load, error, progress, abort) => {
            const data = new FormData();
            data.append('file', file);
            data.append('upload_preset', 'Ecomerce_cloudinary');
            data.append('cloud_name', 'dr8g1jmly'); // cloud name mte3ek fi dashbord
            data.append('public_id', file.name); // file name
            axios.post('https://api.cloudinary.com/v1_1/dr8g1jmly/upload',
                data) // ne5thouha men API Environment variable o5er ka3ba API Provisioning URL
                .then((response) => response.data)
                .then((data) => {
                    console.log(data);

                    article.value.imageart = data.url;
                    load(data);
                })
                .catch((error) => {
                    console.error('Error uploading file:', error);
                    error('Upload failed');
                    abort();
                });
        },
    };
};
</script>
<style scoped></style>
