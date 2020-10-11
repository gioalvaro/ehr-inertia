<template>
    <div>
        <v-row>
            <v-col>
                <v-textarea disabled label="Observation:" v-model="this.consult[0].observation">
                </v-textarea>
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "Consult",
    mounted() {
        this.fetchConsult();
    },
    data() {
        return {
            texto: ""
        };
    },
    computed: {
        consult() {
            return this.$store.getters["consult/consults"];
        },
        encounter() {
            return this.$store.getters["encounter/encounter"];
        }
    },
    methods: {
        async save() {
            await this.$store.dispatch("consult/post", {
                observation: this.texto,
                encounter_id: this.encounter.id
            });
        },
        async fetchConsult() {
            await this.$store.dispatch("consult/all").then(res => {
                if (this.consult.length > 0){
                    this.texto = this.consult[0].observation;
                }
                
            });
        }
    }
};
</script>

<style lang="scss" scoped></style>
