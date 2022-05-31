<template>
  <div>
    <PageHeader :data="dataHeader" />
    <MainHeader :data="dataMain" />
    <FooterPage :data="dataFooter" />
  </div>
</template>

<script>
import PageHeader from './components/header/HeaderPage.vue';
import MainHeader from './components/main/MainPage.vue';
import FooterPage from './components/footer/FooterPage.vue';

export default {
  name: 'InitPageApp',
  components: {
    PageHeader,
    MainHeader,
    FooterPage,
  },
  props: {
    dataHeader: [],
    dataMain: [],
    dataFooter: [],
  },
}
</script>

<style>

</style>