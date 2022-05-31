<template>
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="footer-top__adress">
          <svg class="footer-top__logo">
            <use :href="`${data.footerTop.svg}`" />
          </svg>
          <div class="footer-top__adress-content">
            <p class="footer-top__adress-subtitle">
              {{ data.footerTop.subtitle }}
            </p>
            <p class="footer-top__adress-text" v-html="data.footerTop.adress" />
          </div>
        </div>
        <div class="footer-top__contacts">
          <p class="footer-top__contacts-title">
            {{ data.footerTop.title }}
          </p>
          <p class="footer-top__contacts-text" v-html="data.footerTop.contacts" />
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <p class="footer-bottom__text">
          {{ data.footerBottomText }}
        </p>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'FooterPage',
  props: {
    data: [],
  },
}
</script>
