<script>
export default {
    name: "App",

    data() {
        return {
            isAuth: false,
        }
    },

    methods: {
        checkIsAuth() {
            axios.get('/is_auth')
                .then(res => {
                    this.isAuth = res.data;
                })
        },
    },

    mounted() {
        this.checkIsAuth();
    }

}
</script>

<template>
    <div class="container mt-4">
        <div class="row mb-4 nav">
            <h4 class="col nav-item"><router-link class="nav-link" :to="{ name: 'course.index' }">Курсы</router-link></h4>
            <h4 class="col nav-item"><router-link class="nav-link" :to="{ name: 'about.index' }">О компании</router-link></h4>
            <h4 v-if="!isAuth" class="col nav-item"><a href="/register" class="nav-link">Регистрация</a></h4>
            <h4 v-if="!isAuth" class="col nav-item"><a href="/login" class="nav-link">Вход</a></h4>
            <h4 v-if="isAuth" class="col nav-item"><a href="/settings" class="nav-link">Личный кабинет</a></h4>
        </div>
        <router-view></router-view>
    </div>


</template>

<style scoped>

</style>
