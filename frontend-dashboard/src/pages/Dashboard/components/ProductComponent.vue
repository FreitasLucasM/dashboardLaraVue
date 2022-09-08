<template>
    <div class="col-12 col-md-4">
        <div class=container>           
        <b-card border-variant="dark" header="Produtos" align="center">
        <b-card-text><b-table-lite striped hover :items="products" :fields="fields"></b-table-lite></b-card-text>
      </b-card>
    </div>
    </div>
  </template>
  
  <script>
    export default {
        name:'ProdutosContainer',
        props:{
            products: Array
        },
      data() {
        return {
          fields: [
            {
              key: 'id',
              label: 'ID'
            },
            {
            key:'nome',
            label: 'Nome Produto'
            },
            {
            key:'descricao',
            label: 'Descrição'
            },
            {
            key:'quantidade',
            label: 'Quantidade'
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