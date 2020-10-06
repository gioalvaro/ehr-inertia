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
import PhysicianNoteItem from '../component/PhysicianNote/Item'
import PhysicianNoteTable from '../component/PhysicianNote/Table'

export default {
    name: "PhysicianNote",
    components: {
        PhysicianNoteItem,
        PhysicianNoteTable
    },
    created() {
        
    },
    methods: {
        viewComponent(evt) {            
            if (this.view === "PhysicianNoteItem") {
                this.view = "PhysicianNoteTable";
                this.titulo = "Physician Note";
            } else {                
                this.view = "PhysicianNoteItem";
                this.titulo = "Physician Note Table";
                if (evt !== 0) {                    
                    this.id = evt;
                    this.type = 2
                } else {
                    this.id = 0;
                }
            }
        },
        createComponent(evt){
            this.view = "PhysicianNoteItem";
            this.titulo = "Physician Note";
            this.id = 0;
            this.type = 0
        },
        editComponent(evt){
            this.view = "PhysicianNoteItem";
            this.titulo = "Physician Note";
            this.id = evt;
            this.type = 1
        }
    },
    data() {
        return {
            titulo:"",
            view: "PhysicianNoteTable",
            id: 0,
            type: ''
        };
    }
};
</script>

<style lang="scss" scoped></style>
