<template>
    <div>
        <v-data-table
            :headers="headers"
            :items="studies"
            sort-by="id"
            class="elevation-1"
        >
            <template v-slot:top>
                <v-toolbar flat>
                    <v-toolbar-title>Studies Table</v-toolbar-title>
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
                                New Study
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
                                                v-model="editedItem.type"
                                                :items="study_type"                                                
                                                label="Study List"
                                                item-text="text"
                                                item-value="value"                                                    
                                                outlined
                                            ></v-select>
                                        </v-col>                                        
                                    </v-row>
                                    <v-row>
                                        <v-col cols="12">
                                                        ´
                                            <v-textarea v-model="editedItem.observation">
                                            </v-textarea>
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
                                Study?</v-card-title
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
                <v-icon class="mr-2" @click="editItem(item)">
                    mdi-pencil
                </v-icon>
                <v-icon @click="deleteItem(item)">
                    mdi-delete
                </v-icon>
            </template>
            <template v-slot:no-data>
                <v-btn color="primary" @click="fetchOrCreateStudy">
                    Reset
                </v-btn>
            </template>
        </v-data-table>
    </div>
</template>

<script>
export default {
    name: "Studies",
    data: () => ({
        dialog: false,
        dialogDelete: false,
        headers: [            
            { text: "Type", value: "type" },
            { text: "Observation", value: "observation" },
            { text: "Provider", value: "encounter.provider.name" },
            { text: "Department", value: "encounter.department.description" },
            { text: "Actions", value: "actions" }
        ],
        editedIndex: -1,
        editedItem: {
            id:0,
            type:"",
            encounter_id: 0,
            observation: ""
        },
        defaultItem: {
            id:0,
            type:"",
            encounter_id: 0,
            observation:""
        },
        study_type:[
            {text: "12 leads ECG", value:'ecg'}, 
            {text: "Visual Acuite", value: 'visual'},
            {text: "Orthostatic Test" , value: 'orthostatic'}
        ]
    }),

    computed: {
        encounter(){
            return this.$store.getters['encounter/encounter']
        },
        studies(){
            return this.$store.getters['study/studies']
        },       
        formTitle() {
            return this.editedIndex === -1 ? "New Study" : "Edit Study";
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
        this.fetchOrCreateStudy();
    },

    methods: {        
        async fetchOrCreateStudy(){
            await this.$store.dispatch("study/all", this.encounter.id)
        },        
        editItem(item) {
            this.editedIndex = this.studies.indexOf(item);
            this.editedItem = Object.assign({}, item);            
            this.dialog = true;
        },

        deleteItem(item) {
            this.editedIndex = this.studies.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.dialogDelete = true;
        },

        async deleteItemConfirm() {            
            //this.problems.splice(this.editedIndex, 1);
            await this.$store.dispatch('study/delete',this.editedItem.id)
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
            if (this.editedIndex > -1) {
                //Object.assign(this.problems[this.editedIndex], this.editedItem)
                await this.$store.dispatch('study/update',this.editedItem)
            } else {                
                this.editedItem.encounter_id = this.encounter.id;
                //this.problems.push(this.editedItem)                
                await this.$store.dispatch('study/post',this.editedItem)
            }
            this.close();
        }
    }
};
</script>

<style lang="scss" scoped></style>
