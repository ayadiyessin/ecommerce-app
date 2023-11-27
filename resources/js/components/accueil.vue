<!-- <template lang="">
    <div>
        <h1>Hello World aa </h1>
        <h2>aaa</h2>
    </div>
</template>
<script setup() {

}>
export default {
    mounted() {
console.log('Component mounted.')
}

}
</script>
<style lang="">

</style> -->
<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Bienvenue dans notre site</div>
                    <div class="card-body">
                        Vous êtes à la page d'accueil
                        le valeur de x = {{ x }}
                        <h2>{{article}}</h2>

                        <h2>prix : {{article.prix}}</h2>
                        <h2>code : {{article.code}}</h2>
                        <h2>qte : {{article.qte}}</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
    const x=5;
    const article={
        code:100,
        designation:"pc portable",
        prix:200,
        qte:10

    }
</script>
