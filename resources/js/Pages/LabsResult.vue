<template>
    <v-card>
        <v-tabs
            v-model="tab"
            background-color="black accent-4"
            centered
            dark
            icons-and-text
        >
            <v-tabs-slider></v-tabs-slider>

            <v-tab href="#tab-1">
                Laboratories
                <v-icon>mdi-account-heart-outline</v-icon>
            </v-tab>

            <v-tab href="#tab-2">
                Imaging
                <v-icon>mdi-account-box-multiple-outline</v-icon>
            </v-tab>

            <v-tab href="#tab-3">
                Studies
                <v-icon>mdi-clipboard-pulse-outline</v-icon>
            </v-tab>
        </v-tabs>

        <v-tabs-items v-model="tab">
            <v-tab-item v-for="i in 3" :key="i" :value="'tab-' + i">
                <v-card v-if="i === 1" flat>
                    <v-card-text>
                        <laboratories />
                    </v-card-text>
                </v-card>
                <v-card v-if="i === 2" flat>
                    <v-card-text>
                        <imaging />
                    </v-card-text>
                </v-card> 
                <v-card v-if="i === 3" flat>
                    <v-card-text>
                        <studies />
                    </v-card-text>
                </v-card>                
            </v-tab-item>
        </v-tabs-items>
    </v-card>
</template>

<script>
import Laboratories from "../component/LabResults/Laboratories"
import Imaging from "../component/LabResults/Imaging"
import Studies from "../component/LabResults/Studies"

export default {
    name: "LabsResult",
    components: {
        Laboratories,
        Imaging,
        Studies
    },
    data: () => ({
        tab: null
    })
};
</script>

<style lang="scss" scoped></style>
