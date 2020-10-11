<template>
    <div>
        <v-row>
            <v-col>
                <v-checkbox
                    v-model="ct"
                    label="CT"
                ></v-checkbox>
                <v-checkbox
                    v-model="visual"
                    label="Visual Acuity"
                ></v-checkbox>
                <v-checkbox
                    v-model="orthostatic"
                    label="Orthostatic Test"
                ></v-checkbox>
            </v-col>
            <v-col>
                <v-textarea v-model="texto">

                </v-textarea>
            </v-col>
        </v-row>
        <v-row>
            <v-col>
                <v-btn @click="save">
                    Save
                </v-btn>
            </v-col>
        </v-row>
    </div>
</template>

<script>
    export default {
        name:'ImagingOrder',
        data() {
            return {
                ct:false,
                visual:false,
                orthostatic:false,
                texto:"CLINICAL INFORMATION: RIGHT UPPER QUADRANT PAIN. \nEXAMINATION: ABDOMEN ULTRASOUND, LIMITED\nFINDINGS: LIVER IS NORMAL IN APPEARANCE WITHOUT BILIARY DUCTAL DILITATION OR FOCAL MASS.\nGALLBLADDER IS DISTENDED WITH WALL THICKENING, A GALLSTONE AND BILIARY SLUDGE ARE PRESENT,\nAND PERICHOLECYSTIC FLUID IS PRESENT. PANCREAS APPEARS NORMAL. THE COMMON DUCT MEASURES 3 MM IN DIAMETER.",
                select: { state: 'Radiology', value: 1 },
                items: [
                    { state: 'Radiology', value: 1 },
                    { state: 'MRI', value: 2 },
                    { state: 'CT', value: 3 },
                    { state: 'Ultrasound', value: 4 },
                    { state: 'Endoscopy', value: 5 },
                ],
            }
        },
        methods: {
            save() {
                
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>