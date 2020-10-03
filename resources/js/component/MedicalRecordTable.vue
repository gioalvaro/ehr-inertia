<template>
    <div>
        <v-data-table
            :headers="headers"
            :items="patients"
            sort-by="id"
            class="elevation-1"
        >
            <template v-slot:top>
                <v-toolbar flat>
                    <v-toolbar-title>Schedule</v-toolbar-title>
                    <v-divider class="mx-4" inset vertical></v-divider>
                    <v-spacer></v-spacer>
                    <v-dialog v-model="dialog" max-width="500px">
                        <template
                            v-slot:activator="{
                                on,
                                attrs
                            }"
                        >
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
export default {
    name: "MedicalRecordTable",
    created() {
        this.fetchPatient();
        this.initialize();
    },
    methods: {
         async fetchPatient() {
            await this.$store
                .dispatch('patient/all');
         },
        viewItem(item) {
            this.$emit("viewMedicalRecord", item.id);
        },
        initialize() {
            this.patients = [
                {
                    id: 1,
                    mrn: 1,
                    lastname: "Jose",
                    firstname: "Coronel",
                    age: 31,
                    sex: "Male",
                    reason: "Abdominal Pain",
                    scheduled_time: "09:00 AM",
                    arrival_time: "08:55 AM",
                    checkout: false
                },
                {
                    id: 2,
                    mrn: 2,
                    lastname: "Jose",
                    firstname: "Coronel",
                    age: 31,
                    sex: "Male",
                    reason: "Abdominal Pain",
                    scheduled_time: "09:00 AM",
                    arrival_time: "08:55 AM",
                    checkout: false
                },
                {
                    id: 3,
                    mrn: 3,
                    lastname: "Jose",
                    firstname: "Coronel",
                    age: 31,
                    sex: "Male",
                    reason: "Abdominal Pain",
                    scheduled_time: "09:00 AM",
                    arrival_time: "08:55 AM",
                    checkout: false
                },
                {
                    id: 4,
                    mrn: 4,
                    lastname: "Jose",
                    firstname: "Coronel",
                    age: 31,
                    sex: "Male",
                    reason: "Abdominal Pain",
                    scheduled_time: "09:00 AM",
                    arrival_time: "08:55 AM",
                    checkout: false
                }
            ];
        },

        editItem(item) {
            this.editedIndex = this.patients.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.dialog = true;
        },

        deleteItem(item) {
            const index = this.patients.indexOf(item);
            confirm("Are you sure you want to delete this patient?") &&
                this.patients.splice(index, 1);
        },

        close() {
            this.dialog = false;
            this.$nextTick(() => {
                this.editedItem = Object.assign({}, this.defaultItem);
                this.editedIndex = -1;
            });
        },

        save() {
            if (this.editedIndex > -1) {
                Object.assign(this.patients[this.editedIndex], this.editedItem);
            } else {
                this.patients.push(this.editedItem);
            }
            this.close();
        }
    },
    watch: {
        dialog(val) {
            val || this.close();
        }
    },
    computed: {
        patientss() {
            return this.$store.getters['patient/patients']
        },
        formTitle() {
            return this.editedIndex === -1 ? "New Patient" : "Edit Patient";
        }
    },
    data() {
        return {
            dialog: false,
            headers: [
                {
                    text: "MRN",
                    align: "start",
                    sortable: false,
                    value: "mrn"
                },
                { text: "LN", value: "lastname" },
                { text: "FN", value: "firstname" },
                { text: "Age", value: "age" },
                { text: "Sex", value: "sex" },
                { text: "Reason for Visit", value: "reason", sortable: false },
                {
                    text: "Scheduled Time",
                    value: "scheduled_time",
                    sortable: false
                },
                {
                    text: "Arrival Time",
                    value: "arrival_time",
                    sortable: false
                },
                { text: "Checkout", value: "checkout", sortable: false },
                { text: "Actions", value: "actions", sortable: false }
            ],
            patients: [],
            editedIndex: -1,
            editedItem: {
                lastname: "",
                firstname: "",
                age: 0,
                sex: 0,
                reason: "",
                scheduled_time: "",
                arrival_time: "",
                checkout: false
            },
            defaultItem: {
                lastname: "",
                firstname: "",
                age: 0,
                sex: 0,
                reason: "",
                scheduled_time: "",
                arrival_time: "",
                checkout: false
            }
        };
    }
};
</script>

<style lang="scss" scoped></style>
