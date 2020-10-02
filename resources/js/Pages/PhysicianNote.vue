<template>
    <div>
        <transition name="component-fade" mode="out-in">
            <component
                v-bind:is="view"
                :id="physician_note"
                @viewPhysicianNote="cambiarComponente"
            ></component>
        </transition>
        <v-data-table
            :headers="headers"
            :items="patients"
            sort-by="id"
            class="elevation-1"
        >
            <template v-slot:top>
                <v-toolbar flat>
                    <v-toolbar-title>Medical Records</v-toolbar-title>
                    <v-divider class="mx-4" inset vertical></v-divider>
                    <v-spacer></v-spacer>
                    <v-dialog v-model="dialog" max-width="500px">
                        <template
                            v-slot:activator="{
                                on,
                                attrs
                            }"
                        >
                            <v-btn
                                color="primary"
                                dark
                                class="mb-2"
                                v-bind="attrs"
                                v-on="on"
                            >
                                New Patient
                            </v-btn>
                        </template>
                        <v-card>
                            <v-card-title>
                                <span class="headline">{{ formTitle }}</span>
                            </v-card-title>

                            <v-card-text>
                                <v-container>
                                    <v-row>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field
                                                v-model="editedItem.lastname"
                                                label="Last Name"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field
                                                v-model="editedItem.firstname"
                                                label="First Name"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field
                                                v-model="editedItem.age"
                                                label="Age"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field
                                                v-model="editedItem.sex"
                                                label="Sex"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field
                                                v-model="
                                                    editedItem.scheduled_time
                                                "
                                                label="Scheduled Time"
                                            ></v-text-field>
                                        </v-col>
                                    </v-row>
                                </v-container>
                            </v-card-text>

                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn
                                    color="blue darken-1"
                                    text
                                    @click="close"
                                >
                                    Cancel
                                </v-btn>
                                <v-btn color="blue darken-1" text @click="save">
                                    Save
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>
                </v-toolbar>
            </template>
            <template v-slot:item.actions="{ item }">
                <v-icon @click="viewItem(item)" large>mdi-eye</v-icon>
            </template>
            <template v-slot:no-data>
                <v-btn color="primary" @click="initialize">
                    Reset
                </v-btn>
            </template>
        </v-data-table>
    </div>
</template>

<script>
import PhysicianNoteItem from '../component/PhysicianNoteItem'
import PhysicianNoteTable from '../component/PhysicianNoteTable'

export default {
    name: "PhysicianNote",
    components: {
        PhysicianNoteItem,
        PhysicianNoteTable
    },
    created() {
        this.initialize();
    },
    methods: {
        cambiarComponente(id) {
            if (this.view === "PhysicianNoteItem") {
                this.view = "PhysicianNoteTable";
                this.deshabilitado = false;
                this.titulo = "Physician Note";
            } else {
                this.view = "PhysicianNoteItem";
                this.deshabilitado = true;
                this.titulo = "Physician Note Table";
                if (id !== 0) {
                    this.physician_note = id;
                } else {
                    this.physician_note = 0;
                }
            }
        }
    },
    data() {
        return {
            view: "PhysicianNoteTable"
        };
    }
};
</script>

<style lang="scss" scoped></style>
