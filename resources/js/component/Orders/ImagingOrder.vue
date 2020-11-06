<template>
    <div>
        <v-row>
            <v-col>
                <v-select
                    v-model="select"
                    :items="items"
                    item-text="text"
                    item-value="value"
                    label="Analysis"
                    outlined
                >
                </v-select>
            </v-col>
            <v-col>
                <v-textarea
                    placeholder="Please specify the details"
                    label="Order"
                    v-model="summary"
                >
                </v-textarea>
            </v-col>
        </v-row>
        <v-row>
            <v-col>
                <v-btn block color="primary" @click="save">
                    Send Imaging Request
                </v-btn>
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "ImagingOrder",
    data() {
        return {
            summary: "",
            select: "1",
            items: [
                { text: "Radiology", value: "Radiology" },
                { text: "MRI", value: "MRI" },
                { text: "CT Scan", value: "CT Scan" },
                { text: "Endoscopy", value: "Endoscopy" },
                { text: "Ultrasound", value: "Ultrasound" }
            ]
        };
    },
    computed: {
        provider() {
            return this.$store.getters["provider/provider"];
        },
        encounter() {
            return this.$store.getters["encounter/encounter"];
        }
    },
    methods: {
        async fetchImaging() {
            await this.$store.dispatch("imaging/all").then(res => {
                if (this.imagings.length > 0) {
                    this.select = this.imagings[0].type;
                    console.log(this.select);
                }
            });
        },
        async save() {
            var obj = {
                summary: this.summary,
                type: this.select,
                encounter_id: this.encounter.id
            };
            this.summary = "";
            await this.$store.dispatch("imaging/post", obj).then(res => {this.fetchImaging();});
        }
    }
};
</script>

<style lang="scss" scoped></style>
