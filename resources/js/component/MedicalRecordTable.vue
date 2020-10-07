<template>
    <div>
        <v-data-table
            :headers="headers"
            :items="encounters"
            sort-by="id"
            class="elevation-1"
        >
            <template v-slot:top>
                <v-toolbar flat>
                    <v-toolbar-title>Schedule</v-toolbar-title>
                    <v-divider class="mx-4" inset vertical></v-divider>
                    <v-spacer></v-spacer>                    
                </v-toolbar>
            </template>
            <template v-slot:item.actions="{ item }">
                <v-icon v-if="item.patient.lastname === 'Coronel'" @click="viewItem(item)" large>mdi-eye</v-icon>
            </template>
            <template v-slot:item.check="{ item }">
                <v-checkbox
              v-model="item.check"              
              color="success"              
              disabled
            ></v-checkbox>
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
        this.fetchEncounter();
        //this.initialize();
    },
    methods: {
         async fetchEncounter() {
            await this.$store
                .dispatch('encounter/all');
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
            this.editedIndex = this.encounters.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.dialog = true;
        },

        deleteItem(item) {
            const index = this.encounters.indexOf(item);
            confirm("Are you sure you want to delete this encounter?") &&
                this.encounters.splice(index, 1);
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
                Object.assign(this.encounters[this.editedIndex], this.editedItem);
            } else {
                this.encounters.push(this.editedItem);
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
        encounters() {
            return this.$store.getters['encounter/encounters']
        },
        formTitle() {
            return this.editedIndex === -1 ? "New Encounter" : "Edit Encounter";
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
                    value: "patient.mrn"
                },
                { text: "LN", value: "patient.lastname" },
                { text: "FN", value: "patient.firstname" },
                { text: "Age", value: "patient.age" },
                { text: "Sex", value: "patient.sex" },
                { text: "Reason for Visit", value: "reason", sortable: false },
                {
                    text: "Scheduled Time",
                    value: "scheduled_time",
                    sortable: true
                },
                {
                    text: "Arrival Time",
                    value: "arrival_time",
                    sortable: true
                },
                { text: "Check", value: "check", sortable: false },
                { text: "Actions", value: "actions", sortable: false }
            ],
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
