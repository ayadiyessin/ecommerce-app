<!-- page vue mta article -->
<template>
    <div>
        <div v-if="isLoading"> <!-- itha islouding = true  bech n9olou istana " Loading ...." hata lin iji -->
            <h2> Loading .... </h2>
        </div>
        <div v-else class="py-6"> <!--itha islouding = false ysirelna l affichage  w direct ytbadel el state y3awed yactialisi wahdou men8ir ma nchal9ou -->

            <!-- btn ajouter article -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <div class="container-fluid">

                    <router-link :to="{name: 'Addarticle'}" class="btn btn-outline-light"> <!--bech nbathou kk addarticle-->
                        <i class="fa-solid fa-plus"></i>  New Article
                    </router-link>

                </div>
            </nav>


            <!--fin ajouter article -->


            <table class="table table-striped shadow"> <!-- shadow ki modale -->
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Référence</th>
                        <th scope="col">Désignation</th>
                        <th scope="col">marques</th>
                        <th scope="col">Quantité Stock</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="art in articles" :key="art.id">


                        <td><img :src="art.imageart" width="70" height="80" /> </td>

                        <td>{{ art.reference }}</td>
                        <td>{{ art.designation }}</td>
                        <td>{{ art.marque }}</td>
                        <td>{{ art.qtestock }}</td>
                        <td>{{ art.prix }}</td>

                        <td><button class="btn btn-outline-primary mx-2">

                                <i class="fa-solid fa-pen-to-square"></i>
                                Edit</button>
                        </td>

                        <td><button class="btn btn-outline-danger mx-2" @click="deletearticle(art.id)"> <!-- 3ayat ll methode deletearticle w na3tiha l id ili n7eb nfs5ou -->

                                <i class="fa-solid fa-trash-can"></i> <!-- icone -->
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</template>
<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
const articles = ref([])
const isLoading = ref(true) // les donner mazelou ma jewech bech te5ou true
const getarticles = async () => { // bech tjib les article w t3abili tab article
    await axios.get("http://localhost:8000/api/articles") // axios tjib donner mel back // bech ymchy ll api w mel model article tmchy ll contoler article w tlawej al get eli hya index
        .then(res => { // c bon jew  w hathom fi res
            articles.value = res.data //
            isLoading.value = false // les donner jew
        })
        .catch(error => {
            console.log(error)
        })
}
// ki tt7al el page e5dem getarticles()
onMounted(() => { // laoude mta page ki tt7al el page yani
    getarticles();
});
const deletearticle = async (id) => {
    if (window.confirm("Etes-vous sûr de vouloir supprimer ?")) {// bech ichewerni 9bal
        try {

            await axios.delete(`http://localhost:8000/api/articles/${id}`) // b3atht id ll controler w 9otlou delate

            getarticles() // bech n3awed ncharji el tableau w ylawdih
        } catch (error) {
            console.log(error)
        }
    }
}
</script>
<style lang="scss" scoped></style>
