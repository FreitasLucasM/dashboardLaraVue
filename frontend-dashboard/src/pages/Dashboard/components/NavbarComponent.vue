<template>
    <div>

        <div class="navbar">
            <div class="left">
                <p class="icon">
                    <a href="#" v-b-toggle.sidebar-1>
                        <b-icon icon="list" font-scale="2"></b-icon>
                     </a>
                </p>
                
                <p class="icon">
                    <b-icon icon="people" font-scale="1"></b-icon>
                    Laravel + VueJs Dashboard</p>
            </div>
                 <p class="icon"><a href="#" @click="logout()"><b-icon icon="arrow-right-square" font-scale="1.5"></b-icon></a></p>
            </div>
        
    </div>
</template>

<script>
export default {
    name:'NavbarComponent',
    methods:{
        logout(){
            this.$router.push({name:'login'})
        }
    }
    
}
</script>


<style lang="scss" scoped>
.left{
    display: flex;
    justify-content: space-between;
}



.icon{
    a{
    color:#fff;
    text-decoration: none;
    }
    align-items: center;
    font-size: 22px;
    color: #fff;
    padding-top: 10px;
    padding-bottom: 10px;
    font-weight: bold;
    margin-right: 2.5px;
    margin-left: 2.5px;
    @media (max-width: 700px){

    font-size: 18px;       
    }
}
</style>