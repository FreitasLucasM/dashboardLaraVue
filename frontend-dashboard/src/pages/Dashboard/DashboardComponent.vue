<template>
    <div>
        <div class="main">
            <div class="sidebar">
                <SidebarComponent/>
            </div>
            <div class="content-right">
                <div class="dashboard-navbar">
                    <NavbarComponent/>
                </div>
                <div class="content-pages">
                    <slot name="slot-pages"></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SidebarComponent from '../Dashboard/components/SidebarComponent.vue';
import NavbarComponent from './components/NavbarComponent.vue';

export default {
    name: "DashboardComponent",
    components: { SidebarComponent, NavbarComponent }
}
</script>

<style lang="scss" src="./style.scss" scoped/>