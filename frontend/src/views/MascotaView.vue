<template>
  <div class="position-relative">
    <div class="image" />
    <div class="spacer d-inline-block" />
    <div class="d-inline-block">
      <div class="content d-inline-block">
        <h2>Mascota</h2>
        <div class="information">
          <div class="d-inline-block w-50">
            <p class="p-0 m-0">Nombre mascota*</p>
            <input type="text" name="" id="">
          </div>
          <div class="d-inline-block w-50 pl-2">
            <p class="p-0 m-0">Raza*</p>
            <input type="text" name="" id="">
          </div>
          <div class="d-inline-block w-50">
            <p class="p-0 m-0">Fecha de nacimiento*</p>
            <input type="text" name="" id="">
          </div>
          <div class="d-inline-block w-50 pl-2">
            <p class="p-0 m-0">Nombre humano*</p>
            <input type="text" name="" id="">
          </div>
          <div class="d-inline-block w-100">
            <p class="p-0 m-0">Descripcion*</p>
            <!-- <textarea name="" id="" rows="4"></textarea> -->
          </div>

        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {

    }
  },
}
</script>

<style scoped lang="scss">
.information{
  padding-top: 4rem;

  div {
    padding-top: .6rem;
    padding-bottom: .6rem;
  }
}
.image {
  position: absolute;
  width: 35%;
  height: 90vh;
  background-color: rgba(207, 205, 205, 0.568);;
}
.spacer{
  width: 35%;
}
.content {
  padding-top: 2rem;
  padding-left: 4rem;
  // padding-right: 2rem;
}
</style>