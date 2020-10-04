<template>
    <div>
        <transition name="component-fade" mode="out-in">
            <component
                v-bind:is="view"
                :id="physician_note"
                @viewPhysicianNote="cambiarComponente"
            ></component>
        </transition>
        
    </div>
</template>

<script>
import PhysicianNoteItem from '../component/PhysicianNoteItem'
import PhysicianNoteTable from '../component/PhysicianNoteTable'

export default {
    name: "PhysicianNote",
    components: {
        PhysicianNoteItem,
        PhysicianNoteTable
    },
    created() {
        
    },
    methods: {
        cambiarComponente(id) {
            if (this.view === "PhysicianNoteItem") {
                this.view = "PhysicianNoteTable";                
                this.titulo = "Physician Note";
            } else {
                this.view = "PhysicianNoteItem";
                this.titulo = "Physician Note Table";
                if (id !== 0) {
                    this.physician_note = id;
                } else {
                    this.physician_note = 0;
                }
            }
        }
    },
    data() {
        return {
            physician_note:0,
            view: "PhysicianNoteTable"
        };
    }
};
</script>

<style lang="scss" scoped></style>
