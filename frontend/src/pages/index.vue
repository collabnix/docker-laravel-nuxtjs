<template>
  <div>
    <ColorPicker />
    <button class="bg-green-50 mx-auto px-2 dark:bg-blue-600">
      {{ apiKey }}
    </button>
  </div>
</template>

<script>
import { Constants } from '@/config/constants';

export default {
  name: 'IndexPage',
  components: {},

  data () {
    return {
      apiKey: new Constants().API_URL
    };
  }
};
</script>
