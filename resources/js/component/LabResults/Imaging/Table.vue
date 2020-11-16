<template>
    <div>       
        <v-row>
            <v-col>
                <v-data-table
                    :headers="headers"
                    :items="imagings"
                    sort-by="id"
                    class="elevation-1"
                >
                    <template v-slot:top>
                        <v-toolbar flat>
                            <v-toolbar-title>Imagings</v-toolbar-title>
                            <v-divider class="mx-4" inset vertical></v-divider>
                            <v-spacer></v-spacer>
                            
                        </v-toolbar>
                    </template>
                    <template v-slot:item.actions="{ item }">
                        <v-icon class="transition duration-500 ease-in-out text-black hover:text-purple-500 transform hover:-translate-y-1 hover:scale-110" @click="viewItem(item)" large>mdi-eye</v-icon>
                    </template>
                    <template v-slot:no-data>
                        <v-btn color="primary" @click="fetchImaging">
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
    name: "Imaging",
    created() {
        this.fetchImaging();
    },
    data() {
        return {
            length: 0,
            onboarding: 0,
            texto:
                "CLINICAL INFORMATION: RIGHT UPPER QUADRANT PAIN. \nEXAMINATION: ABDOMEN ULTRASOUND, LIMITED\nFINDINGS: LIVER IS NORMAL IN APPEARANCE WITHOUT BILIARY DUCTAL DILITATION OR FOCAL MASS.\nGALLBLADDER IS DISTENDED WITH WALL THICKENING, A GALLSTONE AND BILIARY SLUDGE ARE PRESENT,\nAND PERICHOLECYSTIC FLUID IS PRESENT. PANCREAS APPEARS NORMAL. THE COMMON DUCT MEASURES 3 MM IN DIAMETER.",
            select: "1",
            items: [
                { text: "Radiology", value: "1" },
                { text: "MRI", value: "2" },
                { text: "CT", value: "3" },
                { text: "Endoscopy", value: "4" },
                { text: "Ultrasound", value: "5" }
            ],
            selectedImaging: {},
            dialog: false,
            headers: [
                {
                    text: "Date and Time Created",
                    align: "start",
                    sortable: false,
                    value: "created_at"
                },
                { text: "Type", value: "type" },
                { text: "Provider", value: "encounter.provider.name" },
                {
                    text: "Department",
                    value: "encounter.department.description"
                },
                { text: "Summary", value: "summary" },
                { text: "Actions", value: "actions", sortable: false }
            ],
            items: [],
            editedIndex: -1,
            editedItem: {
                created_at: "",
                summary: "",
                imaging_items:[],                
            },
            defaultItem: {
                created_at: "",
                summary: "",
                imaging_items:[],                
            }
        };
    },
    watch: {
        
    },
    methods: {
        viewItem(item) {
            this.$emit("viewNote", item.id);
        },
        next() {
            this.onboarding =
                this.onboarding + 1 === this.length ? 0 : this.onboarding + 1;
        },
        prev() {
            this.onboarding =
                this.onboarding - 1 < 0 ? this.length - 1 : this.onboarding - 1;
        },
        async fetchImaging() {
            await this.$store.dispatch("imaging/all", this.encounter.id).then(res => {
                if (this.imagings.length > 0) {
                    this.select = this.imagings[0].type;
                    console.log(this.select);
                }
            });
        },
        close() {
            this.dialog = false;
            this.$nextTick(() => {
                this.editedItem = Object.assign({}, this.defaultItem);
                this.editedIndex = -1;
            });
        },
    },
    computed: {
        imagings() {
            return this.$store.getters["imaging/imagings"];
        },
        encounter() {
                return this.$store.getters['encounter/encounter'];
        }
    }
};
</script>

<style lang="scss" scoped></style>
