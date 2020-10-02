<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Electronical Health Record Simulator v.01
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div>
                        <v-app>                           
                            <v-row>
                                <v-col>
                                    <transition
                                        name="component-fade"
                                        mode="out-in"
                                    >
                                        <component
                                            v-bind:is="view"                                            
                                            :id="medical_record"                                            
                                            @viewMedicalRecord="cambiarComponente"
                                        ></component>
                                    </transition>                                    
                                </v-col>
                            </v-row>
                        </v-app>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "./../Layouts/AppLayout";
import Welcome from "./../Jetstream/Welcome";
import MedicalRecordTable from "../component/MedicalRecordTable";
import MedicalRecord from "./MedicalRecord";

export default {
    components: {
        AppLayout,
        Welcome,
        MedicalRecordTable,
        MedicalRecord

    },
    data: () => ({
        view: "MedicalRecordTable"
    }),
    methods: {
        cambiarComponente(id) {
            if (this.view === "MedicalRecord") {
                this.view = "MedicalRecordTable";
                this.deshabilitado = false;                
                this.titulo =
                    "Medical Record";
            } else {
                this.view = "MedicalRecord";
                this.deshabilitado = true;
                this.titulo = "Medical Record Table";
                if (id !== 0) {                    
                    this.medical_record = id;
                } else {                    
                    this.medical_record = 0;
                }
            }
        },
        
    }
};
</script>
<style scoped>
.component-fade-enter-active,
.component-fade-leave-active {
    transition: opacity 0.3s ease;
}

.component-fade-enter, .component-fade-leave-to
        /* .component-fade-leave-active below version 2.1.8 */
 {
    opacity: 0;
}
</style>
