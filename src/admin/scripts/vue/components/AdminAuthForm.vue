<template>
  <VSModal :showShadow="showForm">
    <h1 class='auth-title'>Авторизация пользователя</h1>
    <VSForm
      class='auth-user__form'
      :options='options'
      :inputsData='inputsData'
    >
      <input 
        class='input auth-user__form-input'
        name='login'
        type='text' 
        placeholder='Логин'
        v-model="inputsData.login.value"
      >
      <input 
        class='input auth-user__form-input'
        name='pass'
        type='password' 
        placeholder='Пароль'
        v-model='inputsData.pass.value'
      >
    </VSForm>
  </VSModal>
</template>

<script>
import VSModal from 'AcceptComponents/scripts/components/VSModal.vue';
import VSForm from 'AcceptComponents/scripts/components/VSForm.vue';

export default {
  name: 'AdminAuthForm',
  components: {
    VSModal,
    VSForm, 
  },
  data() {
    return {
      inputsData: {
        login: {
          value: '',
          required: true,
        },
        pass: {
          value: '',
          required: true,
        },
      },
      options: {
        actionLink: '../_api/modules/read.php',
        methodType: 'GET',
        btnValue: 'Войти',
      }
    }
  },
  props: {
    showForm: { Boolean, required: true },
  },
}
</script>