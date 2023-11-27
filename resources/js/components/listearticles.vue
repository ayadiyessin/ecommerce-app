<template lang="">
    <div>
         <h1>liste des article </h1><!-- lezem n3melou route fi route.js -->
         <table class="table table-striped">
            <thead>
                <th>image</th>
                <th>designation</th>
                <th>prix</th>
                <th>qte</th>
                <th>action</th>
            </thead>
            <tbody>
                <tr v-for="pr in article" :key='pr.id'> <!--  boucle for avec conteur pr -->
                    <td><img :src="pr.image" width="50" height="50" >  </td>
                    <td>{{ pr.designation }}</td>
                    <td>{{ pr.prix }}</td>
                    <td>{{ pr.quantite }}</td>
                    <td>

                        <button type="button" class="btn btn-danger">supprimer</button>

                        <button type="button" class="btn btn-warning">editer</button>
                    </td>
                </tr>
            </tbody>

         </table>
    </div>
</template>
<script setup>

    const article=[
       { 'id':100 ,
        'designation':"clavier" ,
        'prix':25,
        'quantite': 10,
        'image':"https://res.cloudinary.com/dr8g1jmly/image/upload/v1697464185/image/image_cv_pro_pbodgw.jpg"
        },

        { 'id':101 ,
        'designation':"tell" ,
        'prix':30,
        'quantite': 12,
        'image':"https://res.cloudinary.com/dr8g1jmly/image/upload/v1697463934/cld-sample-5.jpg"

        },

        { 'id':102 ,
        'designation':"pc " ,
        'prix':40,
        'quantite': 6,
        'image':"https://res.cloudinary.com/dr8g1jmly/image/upload/v1697463931/samples/woman-on-a-football-field.jpg"
        },

        { 'id':103 ,
        'designation':"imprimante" ,
        'prix':50,
        'quantite': 100,
        'image':"https://res.cloudinary.com/dr8g1jmly/image/upload/v1697463928/samples/man-on-a-escalator.jpg"
        },
    ]

</script>
<style lang="">

</style>
