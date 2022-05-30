<template>
  <ul class="menu-list">
    <li 
      v-for="(subMenu, menu) in list"
      :key="menu"
      class="menu-list__item"
    >
      <a v-if="!checkSubMenu(subMenu)" href="/">{{ menu }}</a>
      <div v-else class="menu-list__sublist">
        <div class="menu-list__sublist-title" @click="openSublist">
          <span>{{ menu }}</span>
          <svg 
            class="menu-list__sublist-icon"
            width="10px"
            height="10px"
          >
            <use :href="`${svgSpriteSrc}/sprite.svg#list-icon`" />
          </svg>
        </div>
        <div class="menu-list__sublist-item">
          <div class="menu-list__sublist-item-header">
            <p class="menu-list__sublist-item-title">
              {{ menu }}
            </p>
            <svg
              class="menu-list__sublist-item-icon"
              width="20px"
              height="20px"
              @click="closeSublist"
            >
              <use :href="`${svgSpriteSrc}/sprite.svg#back`" />
            </svg>
          </div>
          <MenuList :list="subMenu" :svgSpriteSrc="svgSpriteSrc" />
        </div>
      </div>  
    </li>
  </ul>
</template>

<script>
export default {
  name: 'MenuList',
  props: {
    list: {},
    svgSpriteSrc: String,
  },
  data() {
    return {
      sublistSelector: '.menu-list__sublist',
      sublistItemSelector: '.menu-list__sublist-item',
      openClass: 'open',
    }
  },
  methods: {
    checkSubMenu(subMenu) {
      return !!Object.keys(subMenu).length;
    },
    openSublist({ target }) {
      const item = target.closest(this.sublistSelector).querySelector(this.sublistItemSelector);
      
      if (!item) return;

      item.classList.add(this.openClass);
    },
    closeSublist({ target }) {
      const item = target.closest(this.sublistItemSelector);

      if (!item) return;

      item.classList.remove(this.openClass);
    }
  }
}
</script>
