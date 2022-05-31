<template>
  <main class="main">
    <div class="main-usage block">
      <div class="container">
        <svg class="main-usage__image image">
          <use :href="data.firstBlock.svgPana" />
        </svg>
        <div class="main-usage__content">
          <h1 class="main-usage__title" v-html="data.firstBlock.title" />
          <p class="main-usage__text text">
            {{ data.firstBlock.text }}
          </p>
          <VBtn 
            class="main-usage__btn button" 
            :btnText="data.btnText" 
          />
        </div>
      </div>
    </div>
    <div class="main-welcome block">
      <div class="container">
        <svg class="main-welcome__image image">
          <use :href="data.secondBlock.svgWelcome" />
        </svg>
        <div class="main-welcome__content">
          <p class="main-welcome__title subtitle" v-html="data.secondBlock.title" />
          <p class="main-welcome__text text" v-html="data.secondBlock.text" />
          <VBtn 
            class="main-welcome__btn button" 
            type="submit" 
            :btnText="data.btnText" 
          />
        </div>
      </div>
    </div>
    <div class="main-product block">
      <div class="container">
        <p class="main-product__title subtitle">
          {{ data.thirdBlock.title }}
        </p>
        <div class="main-product__content">
          <div 
            v-for="(item, key) in data.thirdBlock.items" 
            :key="key"
            class="main-product__item"
          >
            <svg class="main-product__item-icon">
              <use :href="`${item.svg}`" />
            </svg>
            <p class="main-product__item-title chosen-text">
              {{ item.title }}
            </p>
            <p class="main-product__item-text">
              {{ item.text }}
            </p>
            <VBtn
              class="main-product__btn button" 
              :btnText="data.btnText"
            />
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import VBtn from 'ComponentsVue/VBtn/VBtn.vue';

export default {
  name: 'MainPage',
  components: {
    VBtn,
  },
  props: {
    data: [],
  }
}
</script>

<style>

</style>