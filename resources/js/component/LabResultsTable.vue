<template>
    <div>
        <v-data-table
            :headers="headers"
            :items="lab_results"
            sort-by="id"
            class="elevation-1"
        >
            <template v-slot:top>
                <v-toolbar flat>
                    <v-toolbar-title>Lab Results</v-toolbar-title>
                    <v-divider class="mx-4" inset vertical></v-divider>
                    <v-spacer></v-spacer>
                    <v-icon @click="createItem(item)" large>mdi-plus</v-icon>
                </v-toolbar>
            </template>
            <template v-slot:item.actions="{ item }">
                <v-icon @click="viewItem(item)" large>mdi-eye</v-icon>
            </template>
            <template v-slot:no-data>
                <v-btn color="primary" @click="initialize">
                    Reset
                </v-btn>
            </template>
        </v-data-table>
    </div>
</template>

<script>
export default {
    name:'LabResultsTable',
    created() {
    this.initialize();
},
methods: {
    viewItem(item) {
        this.$emit("viewLabResults", item.id);
    },
    createItem(item) {
        this.$emit("viewLabResults", 0);
    },
    initialize() {
        this.lab_results = [
            {
                id: 1,
                created_at: "2020-08-08 12:00",
                type: "Hgb",
                provider: 'Dr. Fraga',
                current_value: "100",
                min: 10,
                max: 200
            },
            {
                id: 2,
                created_at: "2020-08-07 12:00",
                type: "Hematocrit",
                provider: 'Dr. Fraga',
                current_value: "100",
                min: 10,
                max: 200
            },
            {
                id: 3,
                created_at: "2020-08-06 12:00",
                type: "WBC",
                provider: 'Dr. Fraga',
                current_value: "100",
                min: 10,
                max: 200
            },
            {
                id: 4,
                created_at: "2020-08-05 12:00",
                type: "CKMB",
                provider: 'Dr. Fraga',
                current_value: "100",
                min: 10,
                max: 200
            },
        ];
    },

    editItem(item) {
        this.editedIndex = this.lab_results.indexOf(item);
        this.editedItem = Object.assign({}, item);
        this.dialog = true;
    },

    deleteItem(item) {
        const index = this.lab_results.indexOf(item);
        confirm("Are you sure you want to delete this lab results?") &&
            this.lab_results.splice(index, 1);
    },

    close() {
        this.dialog = false;
        this.$nextTick(() => {
            this.editedItem = Object.assign({}, this.defaultItem);
            this.editedIndex = -1;
        });
    },

    save() {
        if (this.editedIndex > -1) {
            Object.assign(this.lab_results[this.editedIndex], this.editedItem);
        } else {
            this.lab_results.push(this.editedItem);
        }
        this.close();
    }
},
watch: {
    dialog(val) {
        val || this.close();
    }
},
computed: {
    formTitle() {
        return this.editedIndex === -1 ? "New Lab Result" : "Edit Lab Result";
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
            { text: "Type", value: "type" },
            { text: "Ordered by", value: "provider" },
            { text: "Current Value", value: "current_value" },
            { text: "Minimum", value: "min", sortable: false },
            { text: "Maximun", value: "max", sortable: false }
        ],
        lab_results: [],
        editedIndex: -1,
        editedItem: {
            created_at: "",
            type: "",
            provider: "",
            current_value: 0,
            min: 0, 
            max: 0
        },
        defaultItem: {
            created_at: "",
            type: "",
            provider: "",
            current_value: 0,
            min: 0, 
            max: 0
        }
    };
}
}
</script>

<style lang="scss" scoped></style>
