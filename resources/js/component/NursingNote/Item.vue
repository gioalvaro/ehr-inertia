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
                    label=""
                    :value=texto
                    height="900"
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
    data() {
        return {
            texto: "S: \n\nD: \n\nA: \n\nP:"
        }
    },
    computed: {
        nursing_notes() {
            return this.$store.getters['nursingNote/nursing_notes']
        }
    },
     created(){
        this.look();
    },
    methods: {
        look(){
            let index = this.nursing_notes.findIndex(
                item => item.id === this.id
            );
            let nursing_note = this.nursing_notes[index];
            this.texto = nursing_note.note;
        },
        save(){
            let obj = {}
            if (this.type === 0){
                this.$store.dispatch('nursingNote/post', )
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
