<template>
    <div>
        <v-row>
            <v-col>
                <v-select v-model="select"
            hint="Select the study"
            :items="items"
            item-text="state"
            item-value="value"
            label="Imaging type"
            persistent-hint
            return-object
            single-line>
                </v-select>
            </v-col>
        </v-row>
        <v-row>
            <v-col>
                <v-img v-show="select.value === 1" src="/storage/imaging-dx/Imaging.jpg"></v-img>
            </v-col>
            <v-col>
                <v-textarea 
                v-show="select.value === 1" 
                :value="texto" 
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
    </div>
</template>

<script>
    export default {
        name:"Imaging",
        created () {
            this.fetchImaging();
        },
        data() {
            return {
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
            async fetchImaging() {
                await this.$store.dispatch("imaging/all");
            }
        },
        computed: {
            imagings() {
                return this.$store.getters['imaging/imagings'];
            }
        },     
    }
</script>

<style lang="scss" scoped>

</style>