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

            <v-tab href="#tab-4">
                Consult
                <v-icon>mdi-account-box</v-icon>
            </v-tab>
        </v-tabs>

        <v-tabs-items v-model="tab">
            <v-tab-item v-for="i in 4" :key="i" :value="'tab-' + i">
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
                <v-card v-if="i === 4" flat>
                    <v-card-text>
                        <consult />
                    </v-card-text>
                </v-card>                
            </v-tab-item>
        </v-tabs-items>
    </v-card>
</template>

<script>
import Laboratories from "../component/Orders/LaboratoriesOrder"
import Imaging from "../component/Orders/ImagingOrder"
import Studies from "../component/Orders/StudiesOrder"
import ConsultOrder from "../component/Orders/ConsultOrder"

export default {
    name: "LabsResult",
    components: {
        Laboratories,
        Imaging,
        Studies,
        ConsultOrder
    },
    data: () => ({
        tab: null
    })
};
</script>

<style lang="scss" scoped></style>