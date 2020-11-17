<template>
    <div>
        <v-card>
            <v-card-title>
                <v-row class="justify-end">
                    
                    <v-badge class="" bordered overlap color="green" :content="amount">
                        <v-btn color="primary" @click="guardarLabs">
                            Send Labs Request
                        </v-btn>
                    </v-badge>
                    
                </v-row>
            </v-card-title>
            <v-snackbar v-model="snackbar" :multi-line="multiLine">
                {{ text }}

                <template v-slot:action="{ attrs }">
                    <v-btn
                        color="red"
                        text
                        v-bind="attrs"
                        @click="snackbar = false"
                    >
                        Close
                    </v-btn>
                </template>
            </v-snackbar>
            <v-card-text>
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

                    <v-tab-item>
                        <labs-type-item
                            :items="hematologic"
                            name="hematologic"
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
            </v-card-text>
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
        this.fetchLabs();
    },
    data() {
        return {
            multiLine: true,
            snackbar: false,
            text: `The Labs Order has been sent.`,
            amount: 0,
            selectedOthers: [],
            selectedEndo: [],
            selectedLipids: [],
            selectedGenetics: [],
            selectedUrine: [],
            selectedInfe: [],
            selectedCere: [],
            selectedBloods: [],
            selectedHematologic: [],
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
    watch: {
        selectedLipids() {
            this.calculateAmount();
        },
        selectedGenetics() {
            this.calculateAmount();
        },
        selectedUrine() {
            this.calculateAmount();
        },
        selectedInfe() {
            this.calculateAmount();
        },
        selectedCere() {
            this.calculateAmount();
        },
        selectedBloods() {
            this.calculateAmount();
        },
        selectedHematologic() {
            this.calculateAmount();
        },
        selectedOthers() {
            this.calculateAmount();
        },
        selectedEndo() {
            this.calculateAmount();
        }
    },
    methods: {
        calculateAmount() {
            this.amount =
                this.selectedEndo.length +
                this.selectedOthers.length +
                this.selectedLipids.length +
                this.selectedGenetics.length +
                this.selectedUrine.length +
                this.selectedInfe.length +
                this.selectedCere.length +
                this.selectedBloods.length +
                this.selectedHematologic.length;
        },
        async fetchLabs() {
            await this.$store.dispatch("laboratory/all", this.encounter.id);
        },
        async guardarLabs() {
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
            var send = { encounter_id: this.encounter.id, labsType: [...set] };
            await this.$store.dispatch("laboratory/post", send)
            this.snackbar = true;
            this.selected = [];
        },
        returnSelected(evt) {
            this.selected.push(...evt);
        },
        returnOthers(evt) {
            this.selectedOthers = evt;
        },
        returnInfe(evt) {
            this.selectedInfe = evt;
        },
        returnCere(evt) {
            this.selectedCere = evt;
        },
        returnUrine(evt) {
            this.selectedUrine = evt;
        },
        returnEndo(evt) {
            this.selectedEndo = evt;
        },
        returnGenetics(evt) {
            this.selectedGenetics = evt;
        },
        returnLipids(evt) {
            this.selectedLipids = evt;
        },
        returnBlood(evt) {
            this.selectedBloods = evt;
        },
        returnHematologic(evt) {
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

<style lang="scss" scoped>
.v-tab {
    border-color: grey;
    border-style: solid;
    border-width: 1px;
}
</style>
