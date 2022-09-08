<template>
    <div class="myCards">
  <b-card
    overlay
    img-src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    img-alt="Card Image"
    text-variant="dark"
  >
  <template #header>
      <h4 class="mb-0"><b-icon icon="arrow-up" font-scale="1"></b-icon>{{percentage}}%</h4>
    </template>
    <b-card-body>
        <b-card-title><h1 class="mb-0">{{type}}</h1></b-card-title>
        <b-card-text>{{subtitle}}</b-card-text>
    </b-card-body>
    <b-card-footer> <h3 class="mb-0">{{qtd}}{{date}}<b-icon :icon="icon" font-scale="1"></b-icon></h3></b-card-footer>
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
    .myCards{

        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }
    h1, h2, h3, h4{
        font-weight: 900;
    }

</style>