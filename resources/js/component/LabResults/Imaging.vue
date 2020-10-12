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
                <v-row>
                    <v-col>
                        <v-row>
                            <v-col>
                                <v-textarea
                                    :value="selectedImaging.summary"
                                    disabled
                                    filled
                                    auto-grow
                                    label="Comments"
                                    rows="4"
                                    row-height="30"
                                    shaped
                                ></v-textarea>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-col>
                                <v-card v-if="length > 0" flat tile>
                                    <v-window v-model="onboarding" reverse>
                                        <v-window-item
                                            v-for="n in length"
                                            :key="n"
                                        >
                                            <v-card>
                                                <v-row
                                                    align="center"
                                                    justify="center"
                                                >
                                                    <v-col>
                                                        <v-img
                                                            :src="
                                                                selectedImaging
                                                                    .imaging_items[
                                                                    n - 1
                                                                ].image_url
                                                            "
                                                            width="60%"
                                                            hidth="60%"
                                                        >
                                                        </v-img>
                                                    </v-col>
                                                </v-row>
                                                <v-row
                                                    class="fill-height"
                                                    align="start"
                                                    justify="start"
                                                >
                                                    <v-col>
                                                        <v-textarea
                                                            label="Observation"
                                                            auto-grow
                                                            :value="
                                                                selectedImaging
                                                                    .imaging_items[
                                                                    n - 1
                                                                ].observation
                                                            "
                                                            disabled
                                                        >
                                                        </v-textarea>
                                                    </v-col>
                                                </v-row>
                                            </v-card>
                                        </v-window-item>
                                    </v-window>

                                    <v-card-actions
                                        class="justify-space-between"
                                    >
                                        <v-btn text @click="prev">
                                            <v-icon>mdi-chevron-left</v-icon>
                                        </v-btn>
                                        <v-item-group
                                            v-model="onboarding"
                                            class="text-center"
                                            mandatory
                                        >
                                            <v-item
                                                v-for="n in length"
                                                :key="`btn-${n}`"
                                                v-slot:default="{
                                                    active,
                                                    toggle
                                                }"
                                            >
                                                <v-btn
                                                    :input-value="active"
                                                    icon
                                                    @click="toggle"
                                                >
                                                    <v-icon>mdi-record</v-icon>
                                                </v-btn>
                                            </v-item>
                                        </v-item-group>
                                        <v-btn text @click="next">
                                            <v-icon>mdi-chevron-right</v-icon>
                                        </v-btn>
                                    </v-card-actions>
                                </v-card>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>
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
            selectedImaging: {}
        };
    },
    watch: {
        select() {
            this.selectedImaging = _.find(this.imagings, row => {
                return row.type === this.select;
            });
            if (this.imagings.length > 1 && this.selectedImaging){
                this.selectedImaging.imaging_items[1] = this.imagings[1].imaging_items[0];
            }
            if (this.selectedImaging) {
                this.length = this.selectedImaging.imaging_items.length;
            } else {
                this.selectedImaging = {
                    summary: "",
                    type: this.select,
                    imaging_items: []
                };
                this.length = 0;
            }
        }
    },
    methods: {
        next() {
            this.onboarding =
                this.onboarding + 1 === this.length ? 0 : this.onboarding + 1;
        },
        prev() {
            this.onboarding =
                this.onboarding - 1 < 0 ? this.length - 1 : this.onboarding - 1;
        },
        async fetchImaging() {
            await this.$store.dispatch("imaging/all").then(res => {
                if (this.imagings.length > 0) {
                    this.select = this.imagings[0].type;
                    console.log(this.select);
                }
            });
        }
    },
    computed: {
        imagings() {
            return this.$store.getters["imaging/imagings"];
        }
    }
};
</script>

<style lang="scss" scoped></style>
