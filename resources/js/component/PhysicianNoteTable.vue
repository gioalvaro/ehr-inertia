<template>
    <div>
        <v-data-table
            :headers="headers"
            :items="physician_notes"
            sort-by="id"
            class="elevation-1"
        >
            <template v-slot:top>
                <v-toolbar flat>
                    <v-toolbar-title>Physician Notes</v-toolbar-title>
                    <v-divider class="mx-4" inset vertical></v-divider>
                    <v-spacer></v-spacer>                    
                    <v-icon @click="createItem(item)" large>mdi-plus</v-icon>
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
    name:'PhysicianNoteTable',
    created() {
        this.initialize();
    },
    methods: {
        viewItem(item) {
            this.$emit("viewPhysicianNote", item.id);
        },
        createItem(item) {
            this.$emit("viewPhysicianNote", 0);
        },
        initialize() {
            this.physician_notes = [
                {
                    id: 1,
                    created_at: "2020-08-08 12:00",
                    type: "Primary Care",
                    provider: 'Dr. Fraga',
                    department: "ER"
                },
                {
                    id: 2,
                    created_at: "2020-08-07 12:00",
                    type: "Primary Care",
                    provider: 'Dr. Fraga',
                    department: "Internal Medicine"
                },
                {
                    id: 3,
                    created_at: "2020-08-06 12:00",
                    type: "Physician Notes",
                    provider: 'Dr. Fraga',
                    department: "Internal Medicine"
                },
                {
                    id: 4,
                    created_at: "2020-08-05 12:00",
                    type: "Physician Notes",
                    provider: 'Dr. Fraga',
                    department: "Primary Care"
                },
            ];
        },

        editItem(item) {
            this.editedIndex = this.physician_notes.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.dialog = true;
        },

        deleteItem(item) {
            const index = this.physician_notes.indexOf(item);
            confirm("Are you sure you want to delete this physician note?") &&
                this.physician_notes.splice(index, 1);
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
                Object.assign(this.physician_notes[this.editedIndex], this.editedItem);
            } else {
                this.physician_notes.push(this.editedItem);
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
        formTitle() {
            return this.editedIndex === -1 ? "New Physician Note" : "Edit Physician Note";
        }
    },
    data() {
        return {
            dialog: false,
            headers: [
                {
                    text: "Date and Time Created",
                    align: "start",
                    sortable: false,
                    value: "created_at"
                },
                { text: "Type", value: "type" },
                { text: "Provider", value: "provider" },
                { text: "Department", value: "department" },
                { text: "Actions", value: "actions", sortable: false }
            ],
            physician_notes: [],
            editedIndex: -1,
            editedItem: {
                created_at: "",
                type: "",
                provider: "",
                department: ""
            },
            defaultItem: {
                created_at: "",
                type: "",
                provider: "",
                department: ""
            }
        };
    }
};
</script>

<style lang="scss" scoped></style>
