<template>
  <div v-if="showForm" class="auth">
    <AdminAuthForm :showForm="showForm"></AdminAuthForm>
  </div>
  <div v-else class="admin-page"></div>
</template>
<script>
import AdminAuthForm from './components/AdminAuthForm.vue';

export default {
  name: 'App',
  components: {
    AdminAuthForm,
  },
  data() {
    return {
      showForm: true,
    }
  },
  created() {
    window.removeCookie('user-auth');
    if (window.getCookie('user-auth')) this.showForm = false;
  },
};
</script>
