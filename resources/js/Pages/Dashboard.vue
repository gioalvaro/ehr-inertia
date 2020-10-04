<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Electronical Health Record Simulator v.01
            </h2>
        </template>
        <div class="py-12">
            <v-app>
                    <v-main class="bg-gris">
                        <!-- Provides the application the proper gutter -->
                        <v-container fluid>
                            <div
                                class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                            >
                                <v-row>
                                    <v-col>
                                        <transition
                                            name="component-fade"
                                            mode="out-in"
                                        >
                                            <component
                                                v-bind:is="view"
                                                :id="id"
                                                @viewMedicalRecord="
                                                    cambiarComponente
                                                "
                                            ></component>
                                        </transition>
                                    </v-col>
                                </v-row>
                            </div>
                        </v-container>
                    </v-main>

                <v-footer app>
                    Created by 
                </v-footer>
            </v-app>
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
        view: "MedicalRecordTable",
        id: 0
    }),
    methods: {
        cambiarComponente(id) {            
            if (this.view === "MedicalRecord") {
                this.view = "MedicalRecordTable";
                this.deshabilitado = false;
                this.titulo = "Medical Record";
            } else {
                this.view = "MedicalRecord";
                this.deshabilitado = true;
                this.titulo = "Medical Record Table";
                if (id !== 0) {
                    this.id = id;
                } else {
                    this.id = 0;
                }
            }
        }
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
