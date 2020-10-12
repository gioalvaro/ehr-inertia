<template>
    <div>
        <v-card>
            <v-tabs vertical>
                <v-tab>
                    Hematologic
                </v-tab>
                <v-tab>
                    Blood Plasma Serum
                </v-tab>
                <v-tab>
                    Lipids
                </v-tab>
                <v-tab>
                    Genetics
                </v-tab>
                <v-tab>
                    Endo
                </v-tab>
                <v-tab>
                    Urine
                </v-tab>
                <v-tab>
                    Cerebrospinal Fluid
                </v-tab>
                <v-tab>
                    Infectious Disease
                </v-tab>
                <v-tab>
                    Others
                </v-tab>
                
                    <v-btn color="primary" @click="guardarLabs">
                        Save & Send
                    </v-btn>
                

                <v-tab-item>
                    <labs-type-item
                        :items="hematologic"
                        @returnSelection="returnHematologic"
                    />
                </v-tab-item>
                <v-tab-item>
                    <labs-type-item
                        :items="blood_plasma_serum"
                        @returnSelection="returnBlood"
                    />
                </v-tab-item>
                <v-tab-item>
                    <labs-type-item
                        :items="lipids"
                        @returnSelection="returnLipids"
                    />
                </v-tab-item>
                <v-tab-item>
                    <labs-type-item
                        :items="genetics"
                        @returnSelection="returnGenetics"
                    />
                </v-tab-item>
                <v-tab-item>
                    <labs-type-item
                        :items="endo"
                        @returnSelection="returnEndo"
                    />
                </v-tab-item>
                <v-tab-item>
                    <labs-type-item
                        :items="urine"
                        @returnSelection="returnUrine"
                    />
                </v-tab-item>
                <v-tab-item>
                    <labs-type-item
                        :items="cerebrospinal_fluid"
                        @returnSelection="returnCere"
                    />
                </v-tab-item>
                <v-tab-item>
                    <labs-type-item
                        :items="infectious_disease"
                        @returnSelection="returnInfe"
                    />
                </v-tab-item>
                <v-tab-item>
                    <labs-type-item
                        :items="others"
                        @returnSelection="returnOthers"
                    />
                </v-tab-item>
            </v-tabs>
        </v-card>
    </div>
</template>

<script>
import LabsTypeItem from "../Laboratories/LabsTypeItems";
export default {
    name: "LaboratoriesOrder",
    components: {
        LabsTypeItem
    },
    created() {
        this.fetchLabTypes();
    },
    data() {
        return {   
            selectedOthers:[],
            selectedEndo:[],
            selectedLipids:[],
            selectedGenetics:[],
            selectedUrine:[],
            selectedInfe:[],
            selectedCere:[],
            selectedBloods:[],
            selectedHematologic:[],         
            selected: []
        };
    },
    computed: {
        encounter() {
            return this.$store.getters["encounter/encounter"];
        },
        hematologic() {
            return this.$store.getters["laboratoryType/hematologic"];
        },
        blood_plasma_serum() {
            return this.$store.getters["laboratoryType/blood_plasma_serum"];
        },
        lipids() {
            return this.$store.getters["laboratoryType/lipids"];
        },
        genetics() {
            return this.$store.getters["laboratoryType/genetics"];
        },
        endo() {
            return this.$store.getters["laboratoryType/endo"];
        },
        urine() {
            return this.$store.getters["laboratoryType/urine"];
        },
        cerebrospinal_fluid() {
            return this.$store.getters["laboratoryType/cerebrospinal_fluid"];
        },
        infectious_disease() {
            return this.$store.getters["laboratoryType/infectious_disease"];
        },
        others() {
            return this.$store.getters["laboratoryType/others"];
        }
    },
    methods: {
        guardarLabs(){
            this.selected.push(...this.selectedOthers);
            this.selected.push(...this.selectedCere);
            this.selected.push(...this.selectedUrine);
            this.selected.push(...this.selectedInfe);
            this.selected.push(...this.selectedEndo);
            this.selected.push(...this.selectedGenetics);
            this.selected.push(...this.selectedLipids);
            this.selected.push(...this.selectedBloods);
            this.selected.push(...this.selectedHematologic);
            console.log(this.selected);
            var set = new Set(this.selected);       
            var send = {encounter_id: this.encounter.id, labsType: [...set] }     
            this.$store.dispatch('laboratory/post', send);
            this.selected = [];
        },
        returnSelected(evt) {
            this.selected.push(...evt);
        },
        returnOthers(evt){
            this.selectedOthers = evt;
        },
        returnInfe(evt){
            this.selectedInfe = evt;
        },
        returnCere(evt){
            this.selectedCere = evt;
        },
        returnUrine(evt){
            this.selectedUrine = evt;
        },
        returnEndo(evt){
            this.selectedEndo = evt;
        },
        returnGenetics(evt){
            this.selectedGenetics = evt;
        },
        returnLipids(evt){
            this.selectedLipids = evt;
        },
        returnBlood(evt){
            this.selectedBloods = evt;
        },
        returnHematologic(evt){
            this.selectedHematologic = evt;
        },
        async fetchLabTypes() {
            await this.$store
                .dispatch("laboratoryType/all")
                .then(res => {
                    console.log(res);
                })
                .catch(err => {
                    console.error(`Error to retrieve ${err}`);
                });
        }
    }
};
</script>

<style lang="scss" scoped></style>
