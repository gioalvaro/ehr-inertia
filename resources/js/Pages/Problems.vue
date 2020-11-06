<template>
    <div>
        <v-data-table
            :headers="headers"
            :items="problems"
            sort-by="id"
            class="elevation-1"
        >
            <template v-slot:top>
                <v-toolbar flat>
                    <v-toolbar-title>Problems List</v-toolbar-title>
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
                                Add New Problem
                            </v-btn>
                        </template>
                        <v-card>
                            <v-card-title>
                                <span class="headline">{{ formTitle }}</span>
                            </v-card-title>

                            <v-card-text>
                                <v-container>
                                    <v-row>
                                        <v-col cols="12">
                                                        ´
                                            <v-select
                                                v-model="editedItem.problem_type"
                                                :items="problem_types"                                                
                                                label="Problem List"
                                                item-text="description"
                                                item-value="id"
                                                return-object    
                                                outlined
                                            ></v-select>
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
                                Problem?</v-card-title
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
                <v-icon v-if="item.encounter.provider_id === provider.id" class="transition duration-500 ease-in-out text-black hover:text-purple-500 transform hover:-translate-y-1 hover:scale-110" @click="editItem(item)" large>mdi-pencil</v-icon>
                <v-icon v-if="item.encounter.provider_id === provider.id" class="transition duration-500 ease-in-out text-black hover:text-purple-500 transform hover:-translate-y-1 hover:scale-110" @click="deleteItem(item)" large>mdi-delete</v-icon>
            </template>         
            <template v-slot:no-data>
                <v-btn color="primary" @click="fetchOrCreateProblem">
                    Reset
                </v-btn>
            </template>
        </v-data-table>
    </div>
</template>

<script>
export default {
    name: "Problems",
    data: () => ({
        dialog: false,
        dialogDelete: false,
        headers: [
            {
                text: "Date and Time",
                align: "start",
                sortable: false,
                value: "encounter.created_at"
            },
            {
                text: "Code",
                align: "start",
                sortable: false,
                value: "problem_type.code"
            },
            { text: "Description", value: "problem_type.description" },
            { text: "Provider", value: "encounter.provider.name" },
            { text: "Department", value: "encounter.department.description" },
            { text: "Actions", value: "actions" }
        ],
        editedIndex: -1,
        editedItem: {
            id:0,
            problem_type:{},
            encounter_id: 0,
            problem_type_id: 0
        },
        defaultItem: {
            id:0,
            problem_type:{},
            encounter_id: 0,
            problem_type_id: 0
            
        }
    }),

    computed: {
        provider() {
            return this.$store.getters['provider/provider']
        },
        encounter(){
            return this.$store.getters['encounter/encounter']
        },
        problems(){
            return this.$store.getters['problem/problems']
        },
        problem_types() {
            return this.$store.getters['problemType/problem_types']
        },
        formTitle() {
            return this.editedIndex === -1 ? "New Problem" : "Edit Problem";
        }
    },

    watch: {
        dialog(val) {
            val || this.close();
        },
        dialogDelete(val) {
            val || this.closeDelete();
        }
    },

    created() {
        this.fetchProblemTypes();
        this.fetchOrCreateProblem();
    },

    methods: {        
        async fetchOrCreateProblem(){
            await this.$store.dispatch("problem/all")
        },
        async fetchProblemTypes(){
            await this.$store.dispatch("problemType/all")
        },
        editItem(item) {
            this.editedIndex = this.problems.indexOf(item);
            this.editedItem = Object.assign({}, item);            
            this.dialog = true;
        },

        deleteItem(item) {
            this.editedIndex = this.problems.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.dialogDelete = true;
        },

        async deleteItemConfirm() {            
            //this.problems.splice(this.editedIndex, 1);
            await this.$store.dispatch('problem/delete',this.editedItem.id)
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
            this.editedItem.problem_type_id = this.editedItem.problem_type.id;
            if (this.editedIndex > -1) {
                //Object.assign(this.problems[this.editedIndex], this.editedItem)
                await this.$store.dispatch('problem/update',this.editedItem)
            } else {                
                this.editedItem.encounter_id = this.encounter.id;
                //this.problems.push(this.editedItem)                
                await this.$store.dispatch('problem/post',this.editedItem)
            }
            this.close();
        }
    }
};
</script>

<style lang="scss" scoped></style>
