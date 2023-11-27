<template>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E-commerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <!-- ma n5demch bel balise a n5dmou bel balise router link-->
            <router-link class="nav-link active" to="/Viewcategorie">Categorie</router-link> <!-- /categorie kima 3amelha fi routes.js -->
        </li>
        <li class="nav-item">
            <router-link class="nav-link active" to="/Viewcategorie">S/Categorie</router-link>

        </li>
        <li class="nav-item">
            <router-link class="nav-link active" to="/listart">Article</router-link>
        </li>
        <li class="nav-item">
            <router-link class="nav-link active" to="/Viewcategorie">Article Card</router-link>
        </li>
        <li class="nav-item">
            <router-link class="nav-link active" to="/Viewcategorie">Panier</router-link>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>
