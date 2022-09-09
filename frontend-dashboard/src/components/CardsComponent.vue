<template>
    <div class="card">
        <b-card border-variant="dark" header="Produtos" align="center">
            <template #header>
                <h3 class="mb-0">{{qtd}}{{date}}<b-icon :icon="icon" font-scale="1"></b-icon></h3>
         </template>
        <b-card no-body class="overflow-hidden" style="max-width: 440px;">
    <b-row no-gutters>
      <b-col md="6">
        <b-card-img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="rounded-0"></b-card-img>
      </b-col>
      <b-col md="6">
    <b-card-body>
        <b-card-text><b-icon icon="arrow-up" font-scale="1"></b-icon>{{percentage}}%</b-card-text>
        <b-card-title><h3 class="mb-0">{{type}}</h3></b-card-title>
        <b-card-text>{{subtitle}}</b-card-text>
    </b-card-body>
    </b-col>
    </b-row>
  </b-card>
</b-card>
</div>
</template>

<script>
export default {
    name:'CardsComponent',
    props:{
        type: String,
        percentage: String,
        qtd: Number,
        subtitle: String,
        icon: String,
        date: String

    }
    
}
</script>

<style lang="scss" scoped>
    .card{
        @media (max-width: 900px){
            min-width: 50%;
}
    }

</style>