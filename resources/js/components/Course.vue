<script>
export default {
    name: "Course",

    data() {
        return {
            courses: null
        }
    },

    methods: {
        getCourses() {
            axios.get('api/courses')
                .then(res => {
                    this.courses = res.data.data;
                })
        },
    },

    mounted() {
        this.getCourses();
    }
}
</script>

<template>
    <div v-for="course in courses" class="row border border-3 border-primary rounded-4 p-2 align-items-center mb-4">
        <div class="col p-4">
            <h2><strong>{{course.title}}</strong></h2>
            <button type="button" class="btn btn-primary mt-4"><h3>Записаться</h3></button>
        </div>
        <div class="col">
            <h4>{{course.content}}</h4>
        </div>
    </div>
</template>

<style scoped>

</style>
