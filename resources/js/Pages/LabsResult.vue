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
                <v-icon>mdi-phone</v-icon>
            </v-tab>

            <v-tab href="#tab-2">
                Imaging
                <v-icon>mdi-heart</v-icon>
            </v-tab>

            <v-tab href="#tab-3">
                Studies
                <v-icon>mdi-account-box</v-icon>
            </v-tab>
        </v-tabs>

        <v-tabs-items v-model="tab">
            <v-tab-item v-for="i in 3" :key="i" :value="'tab-' + i">
                <v-card v-if="i === 1" flat>
                    <v-card-text>
                        <lab-results-table />
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
import LabResultsTable from "../component/LabResultsTable"
import Imaging from "../component/Imaging"
import Studies from "../component/Studies"

export default {
    name: "LabsResult",
    components: {
        LabResultsTable,
        Imaging,
        Studies
    },
    data: () => ({
        tab: null
    })
};
</script>

<style lang="scss" scoped></style>
