<template>
    <div>
        <v-row v-if="type !== 2">
            <v-col>
                <v-btn block color="primary" elevation="9" large @click="save"
                    >Save & Back</v-btn
                >
            </v-col>
        </v-row>
        <v-row >
            <v-col>
                <v-btn block color="primary" elevation="9" large @click="back"
                    >Back Without Saving</v-btn
                >
            </v-col>
        </v-row>
        
        <v-row>
            <v-col>
                <v-textarea
                    outlined
                    name="input-7-4"
                    label="Subjective - Objective - A - P"
                    v-model="texto"
                    :value="texto"
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
        if(this.id > 0){
            this.look();
        }
        
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
            texto: "S: \n\nO: \n\nA: \n\nP:"
        }
    },
    computed: {
        encounter() {
            return this.$store.getters['encounter/encounter'];
        },
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
            let obj = {
                note: this.texto,
                encounter_id: this.encounter.id
            }
            if (this.type === 0){
                this.$store.dispatch('physicianNote/post', obj)
            }
            if (this.type === 1){
                obj.id = this.id;
                this.$store.dispatch('physicianNote/update', obj)
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
