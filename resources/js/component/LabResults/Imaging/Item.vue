<template>
    <div>
        <v-row>
            <v-col>
                <v-card v-if="length === 0" flat tile>
                    <v-alert dense outlined type="error">
                        The image has not been taken                  
                    </v-alert>
                </v-card>
                <v-card v-if="length > 0" flat tile>
                    <v-window v-model="onboarding" reverse>
                        <v-window-item v-for="n in length" :key="n">
                            <v-container>
                                <v-row class="fill-height">
                                    <v-col align="center" justify="center">
                                        <v-img
                                            :src="
                                                imaging_items[n - 1].image_url
                                            "
                                            width="80%"
                                            hidth="80%"
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
                                                imaging_items[n - 1].observation
                                            "
                                            disabled
                                        >
                                        </v-textarea>
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-window-item>
                    </v-window>
                    <v-card-actions class="justify-space-between">
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
        <v-row>
            <v-col>
                <v-btn block color="primary" elevation="9" large @click="back"
                    >Back</v-btn
                >
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "ImagingItem",
    props: {
        id: {
            type: Number,
            default: 0
        }
    },
    data() {
        return {
            summary: "",
            length: 0,
            onboarding: 0,
            imaging_items: []
        };
    },
    computed: {
        imagings() {
            return this.$store.getters["imaging/imagings"];
        }
    },
    created() {
        console.info(this.id);
        this.look();
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
        look() {
            let index = this.imagings.findIndex(item => item.id === this.id);
            let imaging = this.imagings[index];
            this.summary = imaging.summary;
            this.imaging_items = imaging.imaging_items;
            this.length = this.imaging_items.length;
        },
        back() {
            this.$emit("viewNote");
        }
    }
};
</script>

<style lang="scss" scoped></style>
