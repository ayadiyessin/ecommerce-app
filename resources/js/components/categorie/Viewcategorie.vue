<template>
    <div>
        <router-link :to="{name: 'Addcategorie'}" class="btn btn-success"> Ajouter </router-link> <!-- fi route tejem t3ayat bel path w tejem t33ayat bel name -->
        <table class="table table-striped">
            <thead>

                <tr>
                    <th>Image</th>
                    <th>Nom Categorie</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="cat in categ" :key="cat.id">

                    <td><img :src="cat.imagecategorie" width="70" height="80"/></td>
                    <td>{{ cat.nomcategorie }}</td>
                    <td><button class="btn btn-warning">Modifier</button></td>
                    <td><button class="btn btn-danger" @click="deleteCategory(cat.id)">Supprimer</button></td>



                </tr>
            </tbody>

        </table>

    </div>
</template>

<script setup>
    import axios from "axios";
    import {ref,onMounted} from 'vue';

    const categ=ref([]) // cree tableau fera8
    const getcategorie=async()=>{
        await axios.get("http://127.0.0.1:8000/api/categories")
        .then(res => {
            categ.value = res.data
        }) //3abina tableau
        .catch((err) => {
            console.log(err)
        });
    }
    // lancer aux chargement de page
    onMounted(() => {
        getcategorie()
    })
    //bouton supprimer methode deleteCategory(cat.id)
    const deleteCategory=async(id)=>{
        await axios.delete(`http://127.0.0.1:8000/api/categories/${id}`)
        .then(res=>{
            categ.value=categ.value.filter((cat)=> cat.id !== id);// tableau eli n5dem alih nwali nfsa5 menou star eli bech nfs5ou mel bd zedaa
            // n9olou hezli stour eli id mte3hom defirent ll id eli bech nfs5ou w nsobhom fi tab jdid w bad nsob tab jdid fi categ

            alert('suppression reussie avec succées')

        }).catch((err)=>{
            console.log(err)
        })
    }


</script>


<style scoped>

</style>
