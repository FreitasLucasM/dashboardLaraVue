<template>
    <div class="col-12 col-md-4">
        <div class="container">           
        <b-card border-variant="dark" header="Clientes" align="center">
        <b-card-text><b-table-lite striped hover :items="users" :fields="fields"></b-table-lite></b-card-text>
      </b-card>
    </div>
    </div>
  </template>
  
  <script>
    export default {
        name:'ClientesContainer',
        props:{
            users: Array
        },
      data() {
        return {
          fields: [
            {
              key: 'nome',
              label: 'Nome'
            },
            {
            key:'contato',
            label: 'Contato'
            },
            {
            key:'email',
            label: 'E-mail'
            },
            {
            key:'idade',
            label: 'Idade'
            }
          ]
        }
      }
    }
  </script>

  <style lang="scss" scoped>
    .col-12{
        padding-top: 30px;
        margin-top: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
  </style>