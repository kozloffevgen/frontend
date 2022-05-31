<template>
  <div>
    <PageHeader :data="dataHeader" />
    <MainHeader :data="dataMain" />
  </div>
</template>

<script>
import PageHeader from './components/header/HeaderPage.vue';
import MainHeader from './components/main/MainPage.vue';

export default {
  name: 'InitPageApp',
  components: {
    PageHeader,
    MainHeader,
  },
  props: {
    dataHeader: [],
    dataMain: [],
  },
}
</script>

<style>

</style>