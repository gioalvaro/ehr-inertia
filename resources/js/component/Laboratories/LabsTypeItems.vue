<template>
    <div>
        <div v-if="name === 'hematologic'">
            <v-btn elevation="2" @click="CBC" outlined>
                CBC
            </v-btn>
            <v-btn elevation="2" @click="WBC" outlined>
                White Blood Count Diferential
            </v-btn>
        </div>
        <v-card flat>
            <v-card-text>
                <v-list shaped>
                    <v-list-item-group v-model="selected" multiple>
                        <template v-for="(item, i) in items">
                            <v-divider
                                v-if="!item"
                                :key="`divider-${i}`"
                            ></v-divider>

                            <v-list-item
                                v-else
                                :key="`item-${i}`"
                                :value="item.id"
                                active-class="deep-purple--text text--accent-4"
                            >
                                <template v-slot:default="{ active }">

                                    <v-list-item-content>
                                        <v-list-item-title
                                            v-text="item.description"
                                        ></v-list-item-title>
                                    </v-list-item-content>

                                    <v-list-item-action>
                                        <v-checkbox
                                            :input-value="active"
                                            color="deep-purple accent-4"
                                        ></v-checkbox>
                                    </v-list-item-action>
                                </template>
                            </v-list-item>
                        </template>
                    </v-list-item-group>
                </v-list>
            </v-card-text>
        </v-card>
    </div>
</template>

<script>
export default {
    name: "LabsTypeItem",
    props: {
        items: {
            type: Array            
        },
        name: {
            type: String,
            default: ""
        },
    },
    data() {
        return {
            selected: []
        }
    },
    watch: {
        selected:{
            deep: true,
            // We have to move our method to a handler field
            handler() {
                this.$emit('returnSelection',this.selected);
            }
        }
    },
    methods: {
        CBC() {
            this.selected.push(118);
            this.selected.push(128);
            this.selected.push(129);
            this.selected.push(125);
            this.selected.push(130);
            this.selected.push(131);
            this.selected.push(132);
            this.selected.push(121);
        },
        WBC() {
            this.selected.push(133);
            this.selected.push(134);
            this.selected.push(122);
            this.selected.push(135);
            this.selected.push(136);
            this.selected.push(137);
            this.selected.push(138);
        }
    },
};
</script>

<style lang="scss" scoped></style>
