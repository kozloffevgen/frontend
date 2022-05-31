<template>
  <header class="header">
    <div class="header-top container">
      <svg class="header__logo logo">
        <use :href="`${data.svgSpriteSrc}/sprite.svg#logo`" />
      </svg>
      <MobileMenu v-if="!isDesktop" :data="data" />
      <DesktopMenu v-else :data="data" />
    </div>
  </header>
</template>

<script>
import getDeviceType from 'ComponentsJs/getDeviceType';
import MobileMenu from './HeaderTopMenu/MobileMenu.vue';
import DesktopMenu from './HeaderTopMenu/DesktopMenu.vue';

export default {
  name: 'PageHeader',
  components: {
    MobileMenu,
    DesktopMenu,
  },
  props: {
    data: [],
  },
  data() {
    return {
      isDesktop: getDeviceType() === 'DESKTOP',
    }
  },
}
</script>
