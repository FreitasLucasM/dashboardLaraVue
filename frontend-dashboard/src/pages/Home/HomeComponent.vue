<template>
    <div>
        <DashboardComponent>
            <div slot="slot-pages" class="content-page">
                <header class="title-pages">
                    <h3>Inicio</h3>
                </header>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <CardsComponent :type="'Clientes'" :percentage="'10'" :qtd="users.length" :subtitle="'A alma do seu negocio'" :icon="'people-fill'"/>
                    </div>
                    <div class="col-12 col-md-3">
                        <CardsComponent :type="'Produtos'" :percentage="'25'" :qtd="products.length" :subtitle="'Sua vitrine digital'" :icon="'cart4'"/>
                    </div>
                    <div class="col-12 col-md-3">
                        <CardsComponent :type="'Vendas'" :percentage="'10'" :qtd="1100" :subtitle="'Suas Vendas fechadas'" :icon="'cart-check-fill'"/>
                    </div>
                    <div class="col-12 col-md-3">
                        <CardsComponent :type="'Relatorios'" :percentage="'18'" :date="'08/09/2022'" :subtitle="'Acompanhe seus resultados'" :icon="'bar-chart-fill'"/>
                    </div>
                </div>
                    <div class="row">
                        <ClientesComponent :users="users"></ClientesComponent>
                        <ProductComponent :products="products"></ProductComponent>
                     </div>

            </div>
        </DashboardComponent>
    </div>
</template>

<script>
import DashboardComponent from '../Dashboard/DashboardComponent.vue';
import CardsComponent from '@/components/CardsComponent.vue';
import ClientesComponent from '../Dashboard/components/ClientesComponent.vue';
import ProductComponent from '../Dashboard/components/ProductComponent.vue';
const axios = require('axios').default;

export default {
    name:'HomeComponent',
    data(){
        return{
            users: [],
            products: []
        }
    },
    methods:{
       async getUsers(){
        try{
            const response = await axios.get('https://jsonplaceholder.typicode.com/users')
            .then(response=>response.data)
            this.users = response
        }catch(e){
            console.log(e)
        }
        },
        async getProducts(){
            try{
            const response = await axios.get('http://127.0.0.1:8000/api/produtos')
            .then(response=>response.data)
            this.products = response.data
            }
            catch(e){
                console.log(e)
            }
        }
    },
    mounted(){
        this.getUsers()
        this.getProducts()
    },
    components: { DashboardComponent, CardsComponent, ClientesComponent, ProductComponent }
}
</script>



<style lang="scss" src="./style.scss" scoped/>