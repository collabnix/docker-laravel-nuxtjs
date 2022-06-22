<template>
  <div>
    <h1 class="text-red-600">
      {{ errorMessage }}
    </h1>
    <NuxtLink to="/">
      Volver al inicio
    </NuxtLink>
  </div>
</template>

<script>
export default {
  layout: 'error',
  props: {
    error: {
      type: [Object, null],
      default: null
    }
  },
  computed: {
    errorMessage () {
      const defaultErrorMessage = 'Ocurrió un error desconocido';
      if (this.error === null) {
        return defaultErrorMessage;
      }

      if (this.error.statusCode === 404) {
        return 'Página no encontrada';
      }
      return defaultErrorMessage;
    }
  }
};
</script>
