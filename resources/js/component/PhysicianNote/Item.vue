<template>
    <div>        
        <v-row v-if="type !== 2">
            <v-col>
                <v-btn block color="primary" elevation="9" large @click="save"
                    >Save & Back</v-btn
                >
            </v-col>
        </v-row>
        <v-row>
            <v-col>
                <v-btn block color="primary" elevation="9" large @click="back"
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
                    :value=texto
                    height="1100"
                    :disabled="type === 2"                
                ></v-textarea>
            </v-col>
        </v-row>        
        <v-row v-if="type !== 2">
            <v-col>
                <v-btn block color="primary" elevation="9" large @click="save"
                    >Back & Save</v-btn
                >
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "PhysicianNoteItem",
    created(){
        this.look();
    },
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
    data() {
        return {
            texto: "S: \n\nD: \n\nA: \n\nP:"
        }
    },
    computed: {
        physician_notes() {
            return this.$store.getters['physicianNote/physician_notes']
        }
    },
    methods: {
         look(){
            let index = this.physician_notes.findIndex(
                item => item.id === this.id
            );
            let physician_note = this.physician_notes[index];
            this.texto = physician_note.note;
        },
        save(){
            let obj = {}
            if (this.type === 0){
                this.$store.dispatch('physicianNote/post', )
            }
            if (this.type === 1){

            }
            this.$emit("viewNote");
        },
        back() {
            this.$emit("viewNote");
        }
    }
};
</script>

<style lang="scss" scoped></style>
