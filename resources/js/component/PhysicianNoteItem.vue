<template>
    <div>
        Number: {{id}}
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
                ></v-textarea>
            </v-col>
        </v-row>        
        <v-row>
            <v-col>
                <v-btn block color="primary" elevation="9" large @click="volver"
                    >Back</v-btn
                >
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "PhysicianNoteItem",
    props: {
        id: {
            type: Number,
            default: 0
        }
    },
    methods: {
        volver() {
            this.$emit("viewPhysicianNote");
        }
    }
};
</script>

<style lang="scss" scoped></style>
