<template>
    <div>
        <v-data-table
            :headers="headers"
            :items="laboratories"
            sort-by="id"
            class="elevation-1"
        >
            <template v-slot:top>
                <v-toolbar flat>
                    <v-toolbar-title>Lab Results</v-toolbar-title>
                    <v-divider class="mx-4" inset vertical></v-divider>
                </v-toolbar>
            </template>
            <template v-slot:no-data>
                <v-btn color="primary" @click="fetchLabs">
                    Reset
                </v-btn>
            </template>
        </v-data-table>
    </div>
</template>

<script>
export default {
    name: "Laboratories",
    created() {
        this.fetchLabs();
    },
    methods: {
        async fetchLabs() {
            await this.$store.dispatch("laboratory/all");
        }
    },
    watch: {},
    computed: {
        laboratories() {
            this.$store.getters["laboratory/laboratories"];
        }
    },
    data() {
        return {
            dialog: false,
            headers: [
                {
                    text: "Date and Time Created",
                    align: "start",
                    sortable: false,
                    value: "created_at"
                },
                { text: "Type", value: "laboratory_type.description" },
                { text: "Ordered by", value: "encounter.provider.name" },
                { text: "Current Value", value: "current_value" },
                { text: "Minimum", value: "min", sortable: false },
                { text: "Maximun", value: "max", sortable: false }
            ]
        };
    }
};
</script>

<style lang="scss" scoped></style>
