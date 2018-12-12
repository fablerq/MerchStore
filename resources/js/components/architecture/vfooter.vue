<template>
  <v-footer
    dark
    height="auto"
    style="box-shadow: 0 0 10px #000000;"
  >
    <!-- <v-footer
    dark
    height="auto"
    inset=true
  > -->
    <v-card
      class="flex"
      flat
      tile
    >
      <v-card-title class="orange lighten-2">
        <strong class="subheading">Get connected with us on social networks!</strong>

        <v-spacer></v-spacer>

        <v-btn
          v-for="icon in icons"
          :key="icon"
          class="mx-3"
          dark
          icon
        >
          <font-awesome-icon :icon="['fab', icon]" size="lg" /> 
        </v-btn>
      </v-card-title>


      <v-card-actions class="grey darken-  justify-center">
        &copy;2018 — <strong> BonchDev</strong>
      </v-card-actions>
    </v-card>
  </v-footer>
</template>

<script>
  export default {
    data: () => ({
      icons: [
        'facebook',
        'twitter',
        'google-plus',
        'linkedin',
        'instagram'
      ]
    })
  }
</script>


<style lang="scss" scoped>
</style>