<template>
    <div>
        <v-data-table
            :headers="headers"
            :items="medications"
            sort-by="calories"
            class="elevation-1"
        >
            <template v-slot:top>
                <v-toolbar flat>
                    <v-toolbar-title>Medications</v-toolbar-title>
                    <v-divider class="mx-4" inset vertical></v-divider>
                    <v-spacer></v-spacer>
                    <v-checkbox
                        class="mt-5"
                        v-model="verified"
                        color="success"
                        :false-value="0"
                        :true-value="1"
                        :label="`Medication Consolidation`"
                    ></v-checkbox>
                    <v-divider class="mx-4" inset vertical></v-divider>
                    <v-spacer></v-spacer>
                    <v-dialog v-model="dialog" max-width="500px">
                        <template v-slot:activator="{ on, attrs }">
                            <v-btn
                                color="primary"
                                dark
                                class="mb-2"
                                v-bind="attrs"
                                v-on="on"
                            >
                                New Medication
                            </v-btn>
                        </template>
                        <v-card>
                            <v-card-title>
                                <v-toolbar flat color="primary" dark>
                                    <v-toolbar-title
                                        ><span class="headline">{{
                                            formTitle
                                        }}</span></v-toolbar-title
                                    >
                                </v-toolbar>
                            </v-card-title>

                            <v-card-text>
                                <v-container>
                                    <v-row>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-select
                                                :items="medication_types"
                                                v-model="
                                                    editedItem.medication_type
                                                "
                                                item-text="description"
                                                item-value="id"
                                                return-object
                                                single-line
                                                label="Name"
                                            ></v-select>
                                        </v-col>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field
                                                v-model="editedItem.dose"
                                                label="Dose"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field
                                                v-model="editedItem.frequency"
                                                label="Frequency"
                                            ></v-text-field>
                                        </v-col>

                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field
                                                v-model="editedItem.route"
                                                label="Route"
                                            ></v-text-field>
                                        </v-col>

                                        <v-col cols="12" sm="6" md="4">
                                            <v-menu
                                                v-model="menu2"
                                                :close-on-content-click="false"
                                                :nudge-right="40"
                                                transition="scale-transition"
                                                offset-y
                                                min-width="290px"
                                            >
                                                <template
                                                    v-slot:activator="{
                                                        on,
                                                        attrs
                                                    }"
                                                >
                                                    <v-text-field
                                                        v-model="
                                                            editedItem.start_date
                                                        "
                                                        label="Start Date"
                                                        prepend-icon="mdi-calendar"
                                                        readonly
                                                        v-bind="attrs"
                                                        v-on="on"
                                                    ></v-text-field>
                                                </template>
                                                <v-date-picker
                                                    v-model="editedItem.date"
                                                    @input="menu2 = false"
                                                ></v-date-picker>
                                            </v-menu>
                                        </v-col>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-menu
                                                v-model="menu2"
                                                :close-on-content-click="false"
                                                :nudge-right="40"
                                                transition="scale-transition"
                                                offset-y
                                                min-width="290px"
                                            >
                                                <template
                                                    v-slot:activator="{
                                                        on,
                                                        attrs
                                                    }"
                                                >
                                                    <v-text-field
                                                        v-model="
                                                            editedItem.end_date
                                                        "
                                                        label="End Date"
                                                        prepend-icon="mdi-calendar"
                                                        readonly
                                                        v-bind="attrs"
                                                        v-on="on"
                                                    ></v-text-field>
                                                </template>
                                                <v-date-picker
                                                    v-model="editedItem.date2"
                                                    @input="menu2 = false"
                                                ></v-date-picker>
                                            </v-menu>
                                        </v-col>
                                        <v-col>
                                            <v-checkbox
                                                v-model="
                                                    editedItem.discontinued
                                                "
                                                false-value="0"
                                                true-value="1"
                                                label="Discontinued"
                                                color="success"
                                            ></v-checkbox>
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
                    <v-dialog v-model="dialogDelete" max-width="500px">
                        <v-card>
                            <v-card-title class="headline"
                                >Are you sure you want to delete this
                                medication?</v-card-title
                            >
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn
                                    color="blue darken-1"
                                    text
                                    @click="closeDelete"
                                    >Cancel</v-btn
                                >
                                <v-btn
                                    color="blue darken-1"
                                    text
                                    @click="deleteItemConfirm"
                                    >OK</v-btn
                                >
                                <v-spacer></v-spacer>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>
                </v-toolbar>
            </template>
            <template v-slot:item.actions="{ item }">
                <div v-if="item.encounter.provider_id === provider.id">
                    <v-icon class="mr-2" @click="editItem(item)">
                        mdi-pencil
                    </v-icon>
                    <v-icon @click="deleteItem(item)">
                        mdi-delete
                    </v-icon>
                </div>
                <div v-else>
                    <v-icon class="mr-2" @click="dis(item)">
                        mdi-archive-arrow-down
                    </v-icon>
                </div>
            </template>
            <template v-slot:no-data>
                <v-btn color="primary" @click="fetchMedication">
                    Refresh
                </v-btn>
            </template>
        </v-data-table>
        <v-row>
            <v-col>
                <v-data-table
                    :headers="headers"
                    :items="medications_discontinued"
                    sort-by="calories"
                    class="elevation-1"
                >
                    <template v-slot:top>
                        <v-toolbar flat>
                            <v-toolbar-title
                                >Discontinued Medications</v-toolbar-title
                            >
                            <v-divider class="mx-4" inset vertical></v-divider>
                            <v-spacer></v-spacer>
                        </v-toolbar>
                    </template>
                    <template v-slot:item.actions="{ item }">
                        <div>
                            <v-icon class="mr-2" @click="undo(item)">
                                mdi-restart
                            </v-icon>
                        </div>
                    </template>
                    <template v-slot:no-data>
                        <v-btn color="primary" @click="fetchMedication">
                            Refresh
                        </v-btn>
                    </template>
                </v-data-table>
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "Medications",
    data: () => ({
        verified: false,
        dialog: false,
        menu2: false,
        dialogDelete: false,
        headers: [
            {
                text: "Medication Name",
                align: "start",
                sortable: false,
                value: "medication_type.description"
            },
            { text: "Dose", value: "dose" },
            { text: "Frequency", value: "frequency" },
            { text: "Route", value: "route" },
            { text: "Provider", value: "encounter.provider.name" },
            { text: "Department", value: "encounter.department.description" },
            { text: "Start Date", value: "start_date" },
            { text: "End Date", value: "end_date" },
            { text: "Actions", value: "actions", sortable: false }
        ],
        desserts: [],
        editedIndex: -1,
        editedItem: {
            name: "",
            medication_type: {},
            dose: "",
            units: "",
            frequency: "",
            route: "",
            start_date: new Date().toISOString().substr(0, 10),
            end_date: new Date().toISOString().substr(0, 10),
            date2: new Date().toISOString().substr(0, 10),
            date1: new Date().toISOString().substr(0, 10),
            discontinued: false,
            encounter_id: 0
        },
        defaultItem: {
            name: "",
            medication_type: {},
            dose: "",
            units: "",
            frequency: "",
            route: "",
            start_date: new Date().toISOString().substr(0, 10),
            end_date: new Date().toISOString().substr(0, 10),
            date2: new Date().toISOString().substr(0, 10),
            date1: new Date().toISOString().substr(0, 10),
            discontinued: false,
            encounter_id: 0
        }
    }),

    computed: {
        provider() {
            return this.$store.getters["provider/provider"];
        },
        encounter() {
            return this.$store.getters["encounter/encounter"];
        },
        medication_types() {
            return this.$store.getters["medicationType/medication_types"];
        },
        medications_discontinued() {
            return _.filter(
                this.$store.getters["medication/medications"],
                row => {
                    if (row.medication_verifications.length > 0) {
                        return (
                            row.medication_verifications[0].discontinued ===
                                1 ||
                            row.medication_verifications[0].discontinued === "1"
                        );
                    } else {
                        return false;
                    }
                }
            );
        },
        medications() {
            return _.filter(
                this.$store.getters["medication/medications"],
                row => {
                    if (row.medication_verifications.length > 0) {
                        return (
                            row.medication_verifications[0].discontinued ===
                                0 ||
                            row.medication_verifications[0].discontinued === "0"
                        );
                    } else {
                        return false;
                    }
                }
            );
        },
        provider() {
            return this.$store.getters["provider/provider"];
        },
        formTitle() {
            return this.editedIndex === -1
                ? "New Medication"
                : "Edit Medication";
        }
    },

    watch: {
        dialog(val) {
            val || this.close();
        },
        dialogDelete(val) {
            val || this.closeDelete();
        },
        verified(val, old) {
            this.editedItem = { verified: val };
            this.save();
        }
    },

    created() {
        this.fetchMedication();
        this.fetchMedType();
    },

    methods: {
        undo(item) {
            this.editedIndex = this.medications_discontinued.indexOf(item);
            console.info('undo')
            console.info(this.medications_discontinued.indexOf(item))
            console.info(item)
            this.editedItem = Object.assign({}, item);
            this.editedItem.discontinued = 0;
            this.save();
        },
        dis(item){
            this.editedIndex = this.medications.indexOf(item);
            console.info('dis')
            console.info(this.medications.indexOf(item))
            console.info(item)
            this.editedItem = Object.assign({}, item);
            this.editedItem.discontinued = 1;
            this.save();
        },
        async fetchMedType() {
            await this.$store.dispatch("medicationType/all");
        },
        async fetchMedication() {
            await this.$store.dispatch("medication/all",this.encounter.id);
        },
        editItem(item) {
            this.editedIndex = this.medications.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.editedItem.discontinued = 0;
            this.dialog = true;
        },
        deleteItem(item) {
            const index = this.medications.indexOf(item);
            if (
                window.confirm(
                    "Are you sure you want to delete this medication?"
                )
            ) {
                this.$store.dispatch("medication/delete", item.id);
            }
            this.fetchMedication();
        },
        deleteItemConfirm() {
            this.medications.splice(this.editedIndex, 1);
            this.closeDelete();
        },
        close() {
            this.dialog = false;
            this.$nextTick(() => {
                this.editedItem = Object.assign({}, this.defaultItem);
                this.editedIndex = -1;
            });
        },
        closeDelete() {
            this.dialogDelete = false;
            this.$nextTick(() => {
                this.editedItem = Object.assign({}, this.defaultItem);
                this.editedIndex = -1;
            });
        },
        async save() {
            console.info('entra al save')
            console.info(this.editedIndex)
            this.editedItem.encounter_id = this.encounter.id;
            if (this.editedIndex > -1) {
                //Object.assign(this.medications[this.editedIndex], this.editedItem);
                await this.$store.dispatch(
                    "medication/update",
                    this.editedItem
                ).then((res) => {this.fetchMedication();});
            } else {
                //this.medications.push(this.editedItem);
                await this.$store.dispatch("medication/post", this.editedItem).then((res) => {this.fetchMedication();});
            }
            this.fetchMedication();
            this.close();
        }
    }
};
</script>

<style lang="scss" scoped></style>
