<template>
    <div>
        <v-row>
            <v-col>
                <v-textarea label="Observation:" v-model="texto"> </v-textarea>
            </v-col>
        </v-row>
        <v-row>
            <v-col>
                <v-btn color="primary" block @click="save">
                    Send Consult Request
                </v-btn>
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "ConsultOrder",
    created() {        
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
            await this.$store.dispatch("consult/all", this.encounter.id).then(res => {
                if (this.consult.length > 0){
                    this.texto = this.consult[0].observation;
                }
                
            });
        }
    }
};
</script>

<style lang="scss" scoped></style>
