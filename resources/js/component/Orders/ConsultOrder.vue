<template>
    <div>
        <v-row>
            <v-col>
                <v-textarea v-model="texto">
                </v-textarea>
            </v-col>
        </v-row>
        <v-row>
            <v-col>
                <v-btn>
                </v-btn>
            </v-col>
        </v-row>
    </div>
</template>

<script>
    export default {
        name:'ConsultOrder',
        created () {
            this.fetchConsult();
        },
        data() {
            return {
                texto: ""
            }
        },
        computed: {
            consult() {
                return this.$store.getters['consult/consults']; 
            }
        },
        methods: {
            async fetchConsult() {
                await this.$store.dispatch('consult/all');
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>