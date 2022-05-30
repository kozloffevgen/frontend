<template>
  <div class="menu">
    <svg 
      class="menu__icon" 
      width="36px" 
      height="36px"
      @click="openModal"
    >
      <use :href="`${data.svgSpriteSrc}/sprite.svg#menu`" />
    </svg>
    <VModal 
      :sidebar="true" 
      :open="open"
      @updateOpen="openModal"
    >
      <template #title>
        <p class="menu__title">
          {{ data.menuTitle }}
        </p>
      </template>
      <template #content>
        <MenuList 
          :list="data.menuItems" 
          :svgSpriteSrc="data.svgSpriteSrc"
        />
      </template>
    </VModal>
  </div>
</template>

<script>
import VModal from 'ComponentsVue/VModal/VModal.vue';
import MenuList from './MenuList/MenuList.vue';

export default {
  name: 'MobileMenu',
  components: {
    VModal,
    MenuList,
  },
  props: {
    data: [],
  },
  data() {
    return {
      open: false,
      sublistTitle: String,
    }
  },
  methods: {
    openModal() {
      this.open = !this.open;
    },
  }
}
</script>
