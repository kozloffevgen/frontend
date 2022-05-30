<template>
  <PageHeader :data="dataHeader" />
</template>

<script>
import PageHeader from './components/header/PageHeader.vue';

export default {
  name: 'InitPageApp',
  components: {
    PageHeader,
  },
  props: {
    dataHeader: [],
  },
}
</script>

<style>

</style>