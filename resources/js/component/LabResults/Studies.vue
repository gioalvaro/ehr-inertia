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
                await this.$store.dispatch('study/all',this.encounter.id);
            }            
        },
        computed: {
            studies() {
                return this.$store.getters['study/studies'];
            },
            encounter() {
                return this.$store.getters['encounter/encounter'];
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>