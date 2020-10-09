<template>
    <div>
        <v-card>
            <v-tabs vertical>
                <v-tab>
                    Hematologic
                </v-tab>
                <v-tab>
                    Blood Plasma Serum
                </v-tab>
                <v-tab>
                    Lipids
                </v-tab>
                <v-tab>
                    Genetics
                </v-tab>
                <v-tab>
                    Endo
                </v-tab>
                <v-tab>
                    Urine
                </v-tab>
                <v-tab>
                    Cerebrospinal Fluid
                </v-tab>
                <v-tab>
                    Infectious Disease
                </v-tab>
                <v-tab>
                    Others
                </v-tab>

                <v-tab-item>
                    <v-card flat>
                        <v-card-text> </v-card-text>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card flat>
                        <v-card-text> </v-card-text>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card flat>
                        <v-card-text>
                            <v-list shaped>
                                <v-list-item-group v-model="model" multiple>
                                    <template v-for="(item, i) in items">
                                        <v-divider
                                            v-if="!item"
                                            :key="`divider-${i}`"
                                        ></v-divider>

                                        <v-list-item
                                            v-else
                                            :key="`item-${i}`"
                                            :value="item"
                                            active-class="deep-purple--text text--accent-4"
                                        >
                                            <template
                                                v-slot:default="{ active }"
                                            >
                                                <v-list-item-content>
                                                    <v-list-item-title
                                                        v-text="item"
                                                    ></v-list-item-title>
                                                </v-list-item-content>

                                                <v-list-item-action>
                                                    <v-checkbox
                                                        :input-value="active"
                                                        color="deep-purple accent-4"
                                                    ></v-checkbox>
                                                </v-list-item-action>
                                            </template>
                                        </v-list-item>
                                    </template>
                                </v-list-item-group>
                            </v-list>
                        </v-card-text>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card flat>
                        <v-card-text> </v-card-text>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card flat>
                        <v-card-text> </v-card-text>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card flat>
                        <v-card-text> </v-card-text>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card flat>
                        <v-card-text> </v-card-text>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card flat>
                        <v-card-text> </v-card-text>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card flat>
                        <v-card-text> </v-card-text>
                    </v-card>
                </v-tab-item>
            </v-tabs>
        </v-card>
    </div>
</template>

<script>
export default {
    name:"LaboratoriesOrder",
    data() {
        return {
            hematologic: [
                'CBC',
                'White Blood Cell Differential',
                'INR',
                'Partial thromboplastin time (activated)',
                'Prothrombin time',
                'Thrombin time',
                'D-dimer',
                'Fibrin Degradation Products',
                'Fibrinogen',
                'Hemoglobin, A1c',
                'ABORH',
                'Type & Screen',
                'Reticulocyte count',
                'Erythrocyte sedimentation rate',
                'Ferritin',
                'Iron Levels',
                ],
            blood_plasma_serum: [
                'Chen-7',
                'Sodium (Na+)',
                'Potassiun (K)',
                'Chloride (Cl-)',
                'Bicarbonate (HCO3-)',
                'Urea nitrogen, serum',
                'Creatinine, serum',
                'Glucose, random',
                'Liver Function Test',
                'AST',
                'ALT',
                'Alkanine Phosphatase',
                'Lipase',
                'Amylase',
                'Billirubin Direct',
                'Billirubin Total',
                'GGT',
                'Calcium',
                'Magnesium (Mg2+)',
                'Phosphorus',
                'Albumin',
                'Albumin',

            ],
            model: ['Carrots'],
        }
    },
}
</script>

<style lang="scss" scoped></style>
