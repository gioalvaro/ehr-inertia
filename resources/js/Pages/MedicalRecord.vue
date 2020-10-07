<template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>                    
                        <v-row>                            
                            <v-col cols="2">                                
                                <img :src="form.patient.photo_url" width="250"/>
                            </v-col>
                            <v-col cols="10">
                                <v-card>
                                    <v-card-title
                                        class="font-weight-regular siprosa white--text headline"
                                    >
                                        <v-icon large color="white"
                                            >mdi-account-circle-outline
                                        </v-icon>
                                        <span class="white--text ml-4"
                                            >Patient's Information</span
                                        >
                                    </v-card-title>
                                    <v-card-text>
                                        <v-form>
                                            <v-container>
                                                <v-row>
                                                    <v-col cols="12" md="4">
                                                        <v-text-field
                                                            v-model="
                                                                form.patient.firstname
                                                            "
                                                            label="First name" disabled
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" md="4">
                                                        <v-text-field
                                                            v-model="
                                                                form.patient.lastname
                                                            "
                                                            label="Last name" disabled
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" md="4">
                                                        <v-text-field
                                                            v-model="form.patient.age"
                                                            label="Age" disabled
                                                        ></v-text-field>
                                                    </v-col>
                                                </v-row>
                                                <v-row>
                                                    <v-col cols="12" md="4">
                                                        <v-text-field
                                                            v-model="form.patient.sex"
                                                            label="Sex" disabled
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" md="4">
                                                        <v-text-field
                                                            v-model="
                                                                form.patient.day_of_birth
                                                            "
                                                            label="DOB" disabled
                                                        ></v-text-field>
                                                    </v-col>                                                    
                                                </v-row>                                                
                                            </v-container>
                                        </v-form>
                                    </v-card-text>
                                </v-card>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-col>
                                <v-card>
                                    <v-card-title class="font-weight-regular siprosa white--text headline">
                                        <v-icon large color="white"
                                            >mdi-account-details-outline
                                        </v-icon>
                                        <span class="white--text ml-4"
                                            >Encounter's Information</span
                                        >
                                    </v-card-title>
                                    <v-card-text>
                                        <v-form>
                                            <v-container>                                                
                                                <v-row>
                                                    <v-col cols="12" md="3">
                                                        <v-text-field
                                                            v-model="
                                                                form.allergies
                                                            "
                                                            label="Allergies" disabled
                                                        ></v-text-field>
                                                    </v-col>
                                                    <v-col cols="12" md="3">
                                                        <v-checkbox
                                                            v-model="form.allergies_check"
                                                            label="Allergies Check"                                                            
                                                            @change="updateAllergies"
                                                        ></v-checkbox>                                                        
                                                    </v-col>
                                                    <v-col cols="6" md="6">
                                                        <v-text-field
                                                            v-model="
                                                                form.bp
                                                            "
                                                            label="BP" disabled
                                                        ></v-text-field>
                                                    </v-col>
                                                </v-row>
                                                <v-row>
                                                    <v-col cols="6" md="2">
                                                        <v-text-field
                                                            v-model="
                                                                form.hr
                                                            "
                                                            label="HR" disabled
                                                        ></v-text-field>
                                                    </v-col>
                                                    <v-col cols="6" md="2">
                                                        <v-text-field
                                                            v-model="
                                                                form.rr
                                                            "
                                                            label="RR" disabled
                                                        ></v-text-field>
                                                    </v-col>
                                                    <v-col cols="6" md="2">
                                                        <v-text-field
                                                            v-model="
                                                                form.osat
                                                            "
                                                            label="O2 Sat" disabled
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="3" md="2">
                                                        <v-text-field
                                                            v-model="form.bmi"
                                                            label="BMI" disabled
                                                        ></v-text-field>
                                                    </v-col>

                                                    <v-col cols="3" md="2">
                                                        <v-text-field
                                                            v-model="form.temperature"
                                                            label="Temperature" disabled
                                                        ></v-text-field>
                                                    </v-col>
                                                    <v-col cols="3" md="2">
                                                        <v-text-field
                                                            v-model="form.temperature_type"
                                                            label="Temperature Type" disabled
                                                        ></v-text-field>
                                                    </v-col>
                                                </v-row>
                                                <v-row v-if="form.patient.sex === 'female'">
                                                    <v-col cols="3" md="3">
                                                        <v-text-field
                                                            v-model="form.ga"
                                                            label="GA" disabled
                                                        ></v-text-field>
                                                    </v-col>
                                                    <v-col cols="3" md="3">
                                                        <v-text-field
                                                            v-model="form.edd"
                                                            label="EDD" disabled
                                                        ></v-text-field>
                                                    </v-col>
                                                    <v-col cols="3" md="3">
                                                        <v-text-field
                                                            v-model="form.lmp"
                                                            label="LMP" disabled
                                                        ></v-text-field>
                                                    </v-col>
                                                    <v-col cols="3" md="3">
                                                        <v-text-field
                                                            v-model="form.gptal"
                                                            label="GPTAL" disabled
                                                        ></v-text-field>
                                                    </v-col>
                                                </v-row>
                                            </v-container>
                                        </v-form>
                                    </v-card-text>
                                </v-card>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-col>
                                <v-btn
                                    block
                                    color="primary"
                                    elevation="9"
                                    large @click="volver"
                                    >Back</v-btn>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-col>
                                <v-card>
                                    <v-tabs
                                        v-model="tab"
                                        background-color="blue accent-4"
                                        centered
                                        dark
                                        icons-and-text
                                    >
                                        <v-tabs-slider></v-tabs-slider>

                                        <v-tab href="#tab-1">
                                            Physician Notes
                                            <v-icon>mdi-clipboard-edit</v-icon>
                                        </v-tab>

                                        <v-tab href="#tab-2">
                                            Nursing Notes
                                            <v-icon
                                                >mdi-file-document-multiple</v-icon
                                            >
                                        </v-tab>

                                        <v-tab href="#tab-3">
                                            Medications
                                            <v-icon>mdi-pill</v-icon>
                                        </v-tab>
                                        <v-tab href="#tab-4">
                                            Labs Results
                                            <v-icon>mdi-flask-outline</v-icon>
                                        </v-tab>
                                        <v-tab href="#tab-5">
                                            Orders
                                            <v-icon>mdi-account-box</v-icon>
                                        </v-tab>
                                    </v-tabs>

                                    <v-tabs-items v-model="tab">
                                        <v-tab-item
                                            v-for="i in 5"
                                            :key="i"
                                            :value="'tab-' + i"
                                        >
                                            <v-card v-if="i === 1" flat>
                                                <v-card-text>
                                                    <physician-note />
                                                </v-card-text>
                                            </v-card>
                                            <v-card v-if="i === 2" flat>
                                                <v-card-text>
                                                    <nursing-note />
                                                </v-card-text>
                                            </v-card>
                                            <v-card v-if="i === 3" flat>
                                                <v-card-text>
                                                    <medication />
                                                </v-card-text>
                                            </v-card>
                                            <v-card v-if="i === 4" flat>
                                                <v-card-text>
                                                    <labs-result />
                                                </v-card-text>
                                            </v-card>
                                            <v-card v-if="i === 5" flat>
                                                <v-card-text>
                                                    <orders />
                                                </v-card-text>
                                            </v-card>
                                        </v-tab-item>
                                    </v-tabs-items>
                                </v-card>
                            </v-col>
                        </v-row>                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AppLayout from "./../Layouts/AppLayout";
import LabsResult from "./LabsResult";
import Orders from "./Orders";
import PhysicianNote from "./PhysicianNote";
import NursingNote from "./NursingNote";
import Medication from "./Medication";

export default {
    name:"MedicalRecord",
    created () {
        console.log(this.id)
        this.form = this.lookPatient();
        this.setEncounter();
    },
    props: {
        id: {
            type: Number,
            default: 0
        },
    },
    components: {
        AppLayout,
        LabsResult,
        PhysicianNote,
        NursingNote,
        Medication,
        Orders
    },
    data: () => ({
        baseURL: window.location.hostname,
        tab: null,
        form: {
            id: 1,
            mrn: 1,
            lastname: "Coronel",
            firstname: "Jose",
            age: 51,
            sex: "Male",
            day_of_birth: new Date('1950-05-05').toISOString().substr(0, 10),
            current_vitals: "BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)",
            bmi: 29,
            temp: 100.8,
            allergies: "None",
            allergies_check: false
        },
    }),
    methods: {
        setEncounter(){
            this.$store.dispatch('encounter/select', this.form)
        },
        lookPatient(){
            let index = this.encounters.findIndex(
                item => item.id === this.id
            );
            let encounter = this.encounters[index];
            encounter.osat = encounter.osat+'%';
            encounter.temperature = encounter.temperature+'ºC';
            return encounter;
        },
        async updateMedicalRecord(encounter){
            await this.$store.dispatch('encounter/update', encounter);
        },
        async updateAllergies(){
            await this.$store.dispatch('encounter/update', this.form);
        },
        volver() {
            this.$emit("viewMedicalRecord");
        }
    },
    computed: {
        encounter() {
            return this.$store.getters['encounter/encounter'];
        },
        encounters() {
            return this.$store.getters['encounter/encounters'];
        },
    },
};
</script>

<style lang="scss" scoped></style>
