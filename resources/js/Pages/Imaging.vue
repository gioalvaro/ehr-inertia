<template>
    <div>
        <transition name="component-fade" mode="out-in">
            <component
                v-bind:is="view"
                :id="id"
                :type="type"
                :titulo="titulo"
                @viewNote="viewComponent"                               
            ></component>
        </transition>        
    </div>
</template>

<script>
import ImagingItem from '../component/LabResults/Imaging/Item'
import ImagingTable from '../component/LabResults/Imaging/Table'

export default {
    name: "Imaging",
    components: {
        ImagingItem,
        ImagingTable
    },
    created() {        
    },
    methods: {
        viewComponent(evt) {            
            if (this.view === "ImagingItem") {
                this.view = "ImagingTable";
                this.titulo = "Imaging";
            } else {                
                this.view = "ImagingItem";
                this.titulo = "Imaging Table";
                if (evt !== 0) {                    
                    this.id = evt;
                    this.type = 2
                } else {
                    this.id = 0;
                }
            }
        },       
    },
    data() {
        return {
            titulo:"",
            view: "ImagingTable",
            id: 0,
            type: ''
        };
    }
};
</script>

<style lang="scss" scoped></style>
