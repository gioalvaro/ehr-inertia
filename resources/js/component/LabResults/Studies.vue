<template>
    <div>
        
    </div>
</template>

<script>
    export default {
        name:'Studies',
        created () {
            this.fetchStudies();
        },
        data() {
            return {
                ecg: false,
                visual: false,
                orthostatic: false,
                texto: ""
            }
        },
        methods: {
            async fetchStudies(){
                await this.$store.dispatch('study/all');
            }            
        },
        computed: {
            studies() {
                return this.$store.getters['study/studies'];
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>