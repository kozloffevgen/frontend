<template>
  <div class="header-top__menu">
    <MenuList 
      :list="data.menuItems" 
      :svgSpriteSrc="data.svgSpriteSrc"
    />
  </div>
</template>

<script>
import MenuList from './MenuList/MenuList.vue';

export default {
  name: 'DesktopMenu',
  components: {
    MenuList,
  },
  props: {
    data: [],
  },
}
</script>

<style lang="less" scoped>
.header-top {
  &__list {
    display: flex;
    justify-content: center;
    gap: 50px;
  }
}
</style>
