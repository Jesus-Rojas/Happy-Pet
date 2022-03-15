<template>
  <div>
    <nav>
      <div class="logo">
        <h2>Happy Pet</h2>
      </div>
      <div class="navegacion text-left">
        <router-link :to="value.route" v-for="(value, index) in navegacion" :key="'navegacion-'+index">{{ value.name }}</router-link>
      </div>
      <div class="sesion">
        <span>Cerra Sesion</span> <i class="fa-solid fa-user"></i>
      </div>
    </nav>
    <router-view></router-view>
  </div>
</template>

<script>

export default {
  data(){
    const navegacion = [
      {
        route: '/home',
        name: 'Home'
      },
      {
        route: '/mascota',
        name: 'Mascota'
      },
      {
        route: '/',
        name: 'Citas'
      },
      {
        route: '/',
        name: 'Tienda'
      },
    ];
    return {
      navegacion
    }
  }
}
</script>

<style scoped lang="scss">
.navegacion {
  flex-grow: 1;
  padding-left: 4rem;
  padding-right: 4rem;

  a {
    padding-left: 2rem;
    padding-right: 2rem;
    font-weight: bold;
    color: black;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}

.sesion {
  color: black;
  font-weight: bold;
  cursor: pointer;

  span {
    padding-right: 1rem;
  }
}

.logo {
  color: black;
}

nav {
  padding-left: 8rem;
  padding-right: 8rem;
  justify-content: space-between;
  align-items: center;
  display: flex;
  height: 4rem;
  background-color: rgba(160, 160, 160, 0.568);
}
</style>
