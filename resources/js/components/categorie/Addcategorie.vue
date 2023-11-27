<template>
    <div>
        <form @submit.prevent="ajouterCtegorie()"><!-- prevent bech ki nenzel ala submit w matt3adech ma tfsa5lich eli fi wost el les input  -->
  <div class="mb-3">
    <label for="examplename" class="form-label">Name</label>
    <input type="text" class="form-control" id="examplename" v-model="categorie.nomcategorie">
  </div>
  <div class="mb-3">
    <label for="exampleimage" class="form-label">Image</label>
    <input type="text" class="form-control" id="exampleimage" v-model="categorie.imagecategorie">
  </div>

  <button type="submit" class="btn btn-primary" >Submit</button>
</form>
    </div>

</template>

<script setup>
//bech ne5ou les donner mel input
// behch norbot state bel input bel v-model
import {ref} from "vue";
import  axios  from "axios";
import { useRouter } from "vue-router";
const router = useRouter();
const categorie=ref({
    nomcategorie:"",
    imagecategorie:""

})
const ajouterCtegorie=async()=>{
    await axios.post("http://127.0.0.1:8000/api/categories",categorie.value)
    .then(res => {
        console.log(categorie);
        console.log("cration avec success");
        router.push({name: "Viewcategorie"}) // nejem bel name ou bel path
      })
     .catch((err)=>{console.error(err)});
};

</script>

<style lang="scss" scoped>

</style>
