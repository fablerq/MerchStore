<template>
  <v-footer
    dark
    height="auto"
   class="footer"
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
      <v-card-title class="orange accent-2">
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


      <v-card-actions class="orange darken-1  justify-center">
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
  .footer {
    margin-top: 30px;
  }

</style>