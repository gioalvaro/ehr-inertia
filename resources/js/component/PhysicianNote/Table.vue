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
                    <v-toolbar-title>Physician Note</v-toolbar-title>
                    <v-divider class="mx-4" inset vertical></v-divider>
                    <v-spacer></v-spacer>                    
                    <v-icon class="transition duration-500 ease-in-out text-black hover:text-blue-500 transform hover:-translate-y-1 hover:scale-110" @click="createItem()" large>mdi-plus</v-icon>
                </v-toolbar>
            </template>
            <template v-slot:item.actions="{ item }">
                <v-icon class="transition duration-500 ease-in-out text-black hover:text-purple-500 transform hover:-translate-y-1 hover:scale-110" @click="viewItem(item)" large>mdi-eye</v-icon>
                <v-icon v-if="item.encounter.provider_id === provider.id" class="transition duration-500 ease-in-out text-black hover:text-purple-500 transform hover:-translate-y-1 hover:scale-110" @click="editItem(item)" large>mdi-pencil</v-icon>
                <v-icon v-if="item.encounter.provider_id === provider.id" class="transition duration-500 ease-in-out text-black hover:text-purple-500 transform hover:-translate-y-1 hover:scale-110" @click="deleteItem(item)" large>mdi-delete</v-icon>
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
    props: {
        titulo: {
            type: String,
            default: 'Physician Note Table'
        },
    },
    name:'Table',
    created() {
        this.fetchNote();        
        this.initialize();
        //this.items = this.physician_notes
    },
    methods: {
        async fetchNote() {
            await this.$store
                .dispatch('physicianNote/all',this.encounter.id);
         },
        viewItem(item) {
            this.$emit("viewNote", item.id);
        },
        createItem() {
            this.$emit("createNote",  0);
        },        
        initialize() {
            this.items = [
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
            this.$emit("editNote", item.id);
        },

        deleteItem(item) {
            const index = this.items.indexOf(item);
            confirm("Are you sure you want to delete this physician note?") &&
                this.$store.dispatch('physicianNote/delete',item.id);

            this.fetchNote();
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
                Object.assign(this.items[this.editedIndex], this.editedItem);
            } else {
                this.items.push(this.editedItem);
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
        physician_notes() {
            return this.$store.getters['physicianNote/physician_notes']
        },
        formTitle() {
            return this.editedIndex === -1 ? "New Physician Note" : "Edit Physician Note";
        },
        provider() {
            return this.$store.getters['provider/provider']
        },
        encounter() {
            return this.$store.getters['encounter/encounter']
        },
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
                { text: "Type", value: "physician_type.description" },
                { text: "Provider", value: "encounter.provider.name" },
                { text: "Department", value: "encounter.department.description" },
                { text: "Actions", value: "actions", sortable: false }
            ],
            items: [],
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
