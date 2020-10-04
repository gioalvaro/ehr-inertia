<template>
    <div>        
        <v-row>
            <v-col>
                <v-btn block color="primary" elevation="9" large @click="volver"
                    >Save & Back</v-btn
                >
            </v-col>
        </v-row>
        <v-row>
            <v-col>
                <v-btn block color="primary" elevation="9" large @click="volver"
                    >Back without Saving</v-btn
                >
            </v-col>
        </v-row>
        <v-row>
            <v-col>
                <v-textarea
                    outlined
                    name="input-7-4"
                    label="Subjective - Objective - A - P"
                    value="S: 
O: 
A: 
P:"
                    height="900"
                    :disabled="type === 2"                
                ></v-textarea>
            </v-col>
        </v-row>        
        <v-row>
            <v-col>
                <v-btn block color="primary" elevation="9" large @click="volver"
                    >Back & Save</v-btn
                >
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "NursingNoteItem",
    props: {
        id: {
            type: Number,
            default: 0
        },
        type: {
            type: Number,
            default: 0
        }
    },
    methods: {
        volver() {
            this.$emit("viewNote");
        }
    }
};
</script>

<style lang="scss" scoped></style>
