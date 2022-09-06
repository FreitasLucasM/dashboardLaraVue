<template>
    <div>
        <DashboardComponent>
            <div slot="slot-pages" class="content-page">
                <h2>produtos</h2>
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