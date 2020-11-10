<template>
    <div>
        <v-row>
            <v-col>
                <v-checkbox
                    v-model="ecg"
                    :label="`12 leads ECG`"
                ></v-checkbox>
                <v-checkbox
                    v-model="visual"
                    :label="`Visual Acuity`"
                ></v-checkbox>
                <v-checkbox
                    v-model="orthostatic"
                    :label="`Orthostatic Test`"
                ></v-checkbox>
            </v-col>
            <v-col>
                <v-textarea v-model="texto">

                </v-textarea>
            </v-col>
        </v-row>
        <v-row>
            <v-col>
                <v-btn @click="save">
                    Save
                </v-btn>
            </v-col>
        </v-row>
    </div>
</template>

<script>
    export default {
        name:"StudiesOrder",
        data() {
            return {
                ecg: false,
                visual: false,
                orthostatic: false,
                texto: ""
            }
        },
        computed: {
            encounter() {
                return this.$store.getters["encounter/encounter"];
            },
        },
        methods: {
            async fetchStudies(){
                await this.$store.dispatch('study/all', this.encounter.id);
            },
            async save() {
                let obj = {ecg: this.ecg, visual:this.visual, orthostatic: this.orthostatic, texto: this.texto}
                await this.$store.dispatch("study/post", obj).then(res => {this.fetchStudies();});
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>