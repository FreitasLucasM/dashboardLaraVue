<template>
    <div>      
      <b-sidebar id="sidebar-1" shadow>
        <div class="px-3 py-2">
            <div class="top">
                <div class="avatar">
                    <span>
                        <img src="https://avatars.githubusercontent.com/u/88175607?v=4" alt="avatar" id="img" class="img-resposive rounded-circle">
                    </span>
                </div>
                <div class="info">
                    <p>Lucas Freitas</p>
                    <span>Online</span>
                </div>

            </div>
            <div class="menu">
                <ul>
                    <li><router-link :to="{name: 'home'}"><b-icon icon="house-fill" font-scale="1"></b-icon>Inicio</router-link></li>
                    <li><router-link :to="{name: 'products'}"><b-icon icon="cart4" font-scale="1"></b-icon>Produtos</router-link></li>
                    <li><router-link :to="{name: 'sales'}"><b-icon icon="cart-check-fill" font-scale="1"></b-icon>Vendas</router-link></li>
                    <li><router-link :to="{name: 'reports'}"><b-icon icon="bar-chart-fill" font-scale="1"></b-icon>Relatorios</router-link></li>
                </ul>
            </div>
        </div>
      </b-sidebar>
    </div>
  </template>

<script>
export default {
    name:'SidebarComponent'
    
}
</script>


<style lang="scss" scoped>
    .top{
        margin-top: 35px;
        display: flex;
        justify-content: center;
        .avatar{
            display: block;
            justify-content: center;
            align-items: center;
            width: 50%;
        }
        .info{
            margin: auto;
            color: #fff;
            p{
                font-size: 22px;
                font-weight: bold;
            }
            span{
                text-align: center;
                justify-content: center;
                color: #fff;
                margin-left: 35px;

            }
        }
    }
    .menu{
        padding-top: 100px;
        font-size: 18px;
        font-weight: 300;
        
        ul{
            list-style-type: none;
        }

        ul li{
            margin: auto auto 20px 15px;
            padding: auto auto;
            display:list-item;
           
        }
        a{
            color:#fff;
            text-decoration: none;
        }
    }
#img{
    width: 90%;
}

</style>