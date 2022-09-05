<template>
    <div class="main">
        <div class="login">
            <div class="content-login">
                <div>
                    <header>
                        <h1>Login</h1>
                    </header>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      <b-form-group
        id="input-group-1"
        label="Email address:"
        label-for="input-1"
      >
        <b-form-input
          id="input-1"
          v-model="form.email"
          type="email"
          placeholder="Enter email"
          required
        ></b-form-input>
      </b-form-group>
      <div>
  <b-form @submit.stop.prevent>
    <label for="text-password">Password</label>
    <b-form-input type="password" id="text-password" aria-describedby="password-help-block"></b-form-input>
    <b-form-text id="password-help-block">
    </b-form-text>
   </b-form>
</div>

      <b-form-group id="input-group-4" v-slot="{ ariaDescribedby }">
        <b-form-checkbox-group
          v-model="form.checked"
          id="checkboxes-4"
          :aria-describedby="ariaDescribedby"
        >
          <b-form-checkbox value="me">mantenha-me conectado</b-form-checkbox>
        </b-form-checkbox-group>
      </b-form-group>

      <b-button variant="primary">Logar</b-button>
      <b-button variant="info">Esqueci minha senha</b-button>
    </b-form>
  </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      data() {
        return {
          form: {
            email: '',
            name: '',
            checked: []
          },
          show: true
        }
      },
      methods: {
        onSubmit(event) {
          event.preventDefault()
          alert(JSON.stringify(this.form))
        },
        onReset(event) {
          event.preventDefault()
          // Reset our form values
          this.form.email = ''
          this.form.name = ''
          this.form.checked = []
          // Trick to reset/clear native browser form validation state
          this.show = false
          this.$nextTick(() => {
            this.show = true
          })
        }
      }
    }
  </script>


<style lang="scss" src="./style.scss" scoped/>