<template>
    <div>
        <DashboardComponent>
            <div slot="slot-pages" class="content-page">
                <header class="title-pages">
                    <p>Clientes</p>
                </header>
            </div>
        </DashboardComponent>
    </div>
</template>

<script>
import DashboardComponent from '../Dashboard/DashboardComponent.vue';

export default {
    components: { DashboardComponent }
}
</script>



<style lang="scss" src="./style.scss" scoped/>