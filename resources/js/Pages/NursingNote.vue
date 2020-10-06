<template>
    <div>
        <transition name="component-fade" mode="out-in">
            <component
                v-bind:is="view"
                :id="id"
                :type="type"
                :titulo="titulo"
                @viewNote="viewComponent"
                @createNote="createComponent"
                @editNote="editComponent"                
            ></component>
        </transition>        
    </div>
</template>

<script>
import NursingNoteItem from '../component/NursingNote/Item'
import NursingNoteTable from '../component/NursingNote/Table'

export default {
    name: "NursingNote",
    components: {
        NursingNoteItem,
        NursingNoteTable
    },
    created() {        
    },
    methods: {
        viewComponent(evt) {            
            if (this.view === "NursingNoteItem") {
                this.view = "NursingNoteTable";
                this.titulo = "Nursing Note";
            } else {                
                this.view = "NursingNoteItem";
                this.titulo = "Nursing Note Table";
                if (evt !== 0) {                    
                    this.id = evt;
                    this.type = 2
                } else {
                    this.id = 0;
                }
            }
        },
        createComponent(evt){
            this.view = "NursingNoteItem";
            this.titulo = "Nursing Note";
            this.id = 0;
            this.type = 0
        },
        editComponent(evt){
            this.view = "NursingNoteItem";
            this.titulo = "Nursing Note";
            this.id = evt;
            this.type = 1
        }
    },
    data() {
        return {
            titulo:"",
            view: "NursingNoteTable",
            id: 0,
            type: ''
        };
    }
};
</script>

<style lang="scss" scoped></style>
