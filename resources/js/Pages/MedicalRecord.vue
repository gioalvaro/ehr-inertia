<template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <v-row>
                        <v-col cols="2">
                            <img :src="form.patient.photo_url" width="250" />
                        </v-col>
                        <v-col cols="10">
                            <v-card>
                                <v-card-title
                                    class="font-weight-regular siprosa white--text headline"
                                >
                                    <v-icon large color="white"
                                        >mdi-account-circle-outline
                                    </v-icon>
                                    <span class="white--text ml-4"
                                        >Patient's Information</span
                                    >
                                </v-card-title>
                                <v-card-text>
                                    <v-form>
                                        <v-container>
                                            <v-row>
                                                <v-col cols="12" md="4">
                                                    <v-text-field
                                                        v-model="
                                                            form.patient
                                                                .firstname
                                                        "
                                                        label="First name"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>

                                                <v-col cols="12" md="4">
                                                    <v-text-field
                                                        v-model="
                                                            form.patient
                                                                .lastname
                                                        "
                                                        label="Last name"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>

                                                <v-col cols="12" md="4">
                                                    <v-text-field
                                                        v-model="
                                                            form.patient.age
                                                        "
                                                        label="Age"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>
                                            </v-row>
                                            <v-row>
                                                <v-col cols="12" md="4">
                                                    <v-text-field
                                                        v-model="
                                                            form.patient.sex
                                                        "
                                                        label="Sex"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>

                                                <v-col cols="12" md="4">
                                                    <v-text-field
                                                        v-model="
                                                            form.patient
                                                                .day_of_birth
                                                        "
                                                        label="DOB"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>
                                            </v-row>
                                        </v-container>
                                    </v-form>
                                </v-card-text>
                            </v-card>
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col>
                            <v-card>
                                <v-card-title
                                    class="font-weight-regular siprosa white--text headline"
                                >
                                    <v-icon large color="white"
                                        >mdi-account-details-outline
                                    </v-icon>
                                    <span class="white--text ml-4"
                                        >Encounter's Information</span
                                    >
                                </v-card-title>
                                <v-card-text>
                                    <v-form>
                                        <v-container>
                                            <v-row>
                                                <v-col cols="12" md="3">
                                                    <v-text-field
                                                        v-model="form.allergies"
                                                        label="Allergies"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>
                                                <v-col cols="12" md="3">
                                                    <v-checkbox
                                                        v-model="
                                                            form.allergies_check
                                                        "
                                                        label="Allergies Check"
                                                        @change="
                                                            updateAllergies
                                                        "
                                                    ></v-checkbox>
                                                </v-col>
                                                <v-col cols="6" md="6">
                                                    <v-text-field
                                                        v-model="form.bp"
                                                        label="BP"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>
                                            </v-row>
                                            <v-row>
                                                <v-col cols="6" md="2">
                                                    <v-text-field
                                                        v-model="form.hr"
                                                        label="HR"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>
                                                <v-col cols="6" md="2">
                                                    <v-text-field
                                                        v-model="form.rr"
                                                        label="RR"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>
                                                <v-col cols="6" md="2">
                                                    <v-text-field
                                                        v-model="form.osat"
                                                        label="O2 Sat"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>

                                                <v-col cols="3" md="2">
                                                    <v-text-field
                                                        v-model="form.bmi"
                                                        label="BMI"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>

                                                <v-col cols="3" md="2">
                                                    <v-text-field
                                                        v-model="
                                                            form.temperature
                                                        "
                                                        label="Temperature"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>
                                                <v-col cols="3" md="2">
                                                    <v-text-field
                                                        v-model="
                                                            form.temperature_type
                                                        "
                                                        label="Temperature Type"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>
                                            </v-row>
                                            <v-row
                                                v-if="
                                                    form.patient.sex ===
                                                        'female'
                                                "
                                            >
                                                <v-col cols="3" md="3">
                                                    <v-text-field
                                                        v-model="form.ga"
                                                        label="GA"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>
                                                <v-col cols="3" md="3">
                                                    <v-text-field
                                                        v-model="form.edd"
                                                        label="EDD"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>
                                                <v-col cols="3" md="3">
                                                    <v-text-field
                                                        v-model="form.lmp"
                                                        label="LMP"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>
                                                <v-col cols="3" md="3">
                                                    <v-text-field
                                                        v-model="form.gptal"
                                                        label="GPTAL"
                                                        disabled
                                                    ></v-text-field>
                                                </v-col>
                                            </v-row>
                                        </v-container>
                                    </v-form>
                                </v-card-text>
                            </v-card>
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col>
                            <v-btn
                                block
                                color="primary"
                                elevation="9"
                                large
                                @click="volver"
                                >Back</v-btn
                            >
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col>
                            <v-btn
                                v-show="userData"
                                block
                                color="success"
                                elevation="9"
                                large
                                @click="print"
                                >Print Report</v-btn
                            >
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col>
                            <v-card>
                                <v-tabs
                                    v-model="tab"
                                    background-color="blue accent-4"
                                    centered
                                    dark
                                    icons-and-text
                                >
                                    <v-tabs-slider></v-tabs-slider>

                                    <v-tab href="#tab-1">
                                        Physician Notes
                                        <v-icon>mdi-clipboard-edit</v-icon>
                                    </v-tab>

                                    <v-tab href="#tab-2">
                                        Nursing Notes
                                        <v-icon
                                            >mdi-file-document-multiple</v-icon
                                        >
                                    </v-tab>

                                    <v-tab href="#tab-3">
                                        Medications
                                        <v-icon>mdi-pill</v-icon>
                                    </v-tab>
                                    <v-tab href="#tab-4">
                                        Labs Results
                                        <v-icon>mdi-flask-outline</v-icon>
                                    </v-tab>
                                    <v-tab href="#tab-5">
                                        Orders
                                        <v-icon
                                            >mdi-flask-empty-plus-outline</v-icon
                                        >
                                    </v-tab>
                                    <v-tab href="#tab-6">
                                        Problems
                                        <v-icon>mdi-medical-bag</v-icon>
                                    </v-tab>
                                    <v-tab href="#tab-7">
                                        Consult
                                        <v-icon>mdi-account-voice</v-icon>
                                    </v-tab>
                                    <v-tab href="#tab-8">
                                        Studies
                                        <v-icon
                                            >mdi-clipboard-pulse-outline</v-icon
                                        >
                                    </v-tab>
                                </v-tabs>

                                <v-tabs-items v-model="tab">
                                    <v-tab-item
                                        v-for="i in 8"
                                        :key="i"
                                        :value="'tab-' + i"
                                    >
                                        <v-card v-if="i === 1" flat>
                                            <v-card-text>
                                                <physician-note />
                                            </v-card-text>
                                        </v-card>
                                        <v-card v-if="i === 2" flat>
                                            <v-card-text>
                                                <nursing-note />
                                            </v-card-text>
                                        </v-card>
                                        <v-card v-if="i === 3" flat>
                                            <v-card-text>
                                                <medication />
                                            </v-card-text>
                                        </v-card>
                                        <v-card v-if="i === 4" flat>
                                            <v-card-text>
                                                <labs-result />
                                            </v-card-text>
                                        </v-card>
                                        <v-card v-if="i === 5" flat>
                                            <v-card-text>
                                                <orders />
                                            </v-card-text>
                                        </v-card>
                                        <v-card v-if="i === 6" flat>
                                            <v-card-text>
                                                <problems />
                                            </v-card-text>
                                        </v-card>
                                        <v-card v-if="i === 7" flat>
                                            <v-card-text>
                                                <consult />
                                            </v-card-text>
                                        </v-card>
                                        <v-card v-if="i === 8" flat>
                                            <v-card-text>
                                                <studies />
                                            </v-card-text>
                                        </v-card>
                                    </v-tab-item>
                                </v-tabs-items>
                            </v-card>
                        </v-col>
                    </v-row>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AppLayout from "./../Layouts/AppLayout";
import LabsResult from "./LabsResult";
import Orders from "./Orders";
import PhysicianNote from "./PhysicianNote";
import NursingNote from "./NursingNote";
import Medication from "./Medication";
import Consult from "./Consult";
import Problems from "./Problems";
import Studies from "./Studies";
import jsPDF from 'jspdf'
import 'jspdf-autotable'
export default {
    name: "MedicalRecord",
    created() {
        console.log(this.id);
        this.user()
        console.log(this.userData)
        this.form = this.lookPatient();
        this.setEncounter();
    },
    props: {
        id: {
            type: Number,
            default: 0
        }
    },
    components: {
        AppLayout,
        LabsResult,
        PhysicianNote,
        NursingNote,
        Medication,
        Orders,
        Consult,
        Problems,
        Studies
    },
    data: () => ({
        baseURL: window.location.hostname,
        tab: null,
        userData:{},
        form: {
            id: 1,
            mrn: 1,
            lastname: "Coronel",
            firstname: "Jose",
            age: 51,
            sex: "Male",
            day_of_birth: new Date("1950-05-05").toISOString().substr(0, 10),
            current_vitals: "BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)",
            bmi: 29,
            temp: 100.8,
            allergies: "None",
            allergies_check: false
        }
    }),
    methods: {
        print(){
            const addFooters = doc => {
                const pageCount = doc.internal.getNumberOfPages()

                doc.setFont('helvetica', 'italic')
                doc.setFontSize(8)
                for (var i = 1; i <= pageCount; i++) {
                    doc.setPage(i)
                    doc.text('EMR', 50, 811)
                    doc.text(this.user, 520, 811)
                    doc.text(
                        'Page ' + String(i) + ' of ' + String(pageCount),
                        doc.internal.pageSize.width / 2,
                        811,
                        {
                            align: 'center'
                        }
                    )
                }
            }
            const addHeaders = doc => {
                const pageCount = doc.internal.getNumberOfPages()
                doc.setFont('helvetica', 'italic')
                doc.setFontSize(8)
                for (var i = 1; i <= pageCount; i++) {
                    doc.setPage(i)
                    doc.text(moment().locale('en').format('MM/DD/YYYY, h:mm:ss a'), doc.internal.pageSize.width * 0.75, 20)
                }
            }
            var vm = this
            var doc = new jsPDF('p', 'pt')
            // Informacion del Agente
            var img = new Image()
            img.src = 'storage/logo/CNU_Logo_English.png'
            doc.addImage(img, 'JPEG', 50, 60, 130, 44)
            //img.src = 'images/logo_ministerio.jpg'
            //doc.addImage(img, 'JPEG', doc.internal.pageSize.width * 0.70, 60, 130, 24)
            doc.setFont('times')
            var texto = 'Report'
            var xOffset =
                doc.internal.pageSize.width / 2 -
                (doc.getStringUnitWidth(texto) * doc.internal.getFontSize()) / 2
            doc.text(texto, xOffset, 120)
            texto = 'Alumni Information'
            xOffset =
                doc.internal.pageSize.width / 2 -
                (doc.getStringUnitWidth(texto) * doc.internal.getFontSize()) / 2
            doc.text(texto, xOffset, 150)

            let users = []
            let user = _.cloneDeep(this.userData)
            console.log("usekldfj")
            console.log(user)

            users.push(user)

            let columnas = [
                {title: 'Username', dataKey: 'username'},
                {title: 'Full Name', dataKey: 'name'}
            ]
            doc.autoTable(columnas, users, {
                startY: 150 + 25
            })

            let physician_notes = _.cloneDeep(this.physician_notes)
            physician_notes = _.filter(physician_notes, row => {return row.encounter_id === this.encounter.id})
            var finalY = doc.previousAutoTable.finalY
            texto = 'Physician Notes'
            xOffset =
                doc.internal.pageSize.width / 2 -
                (doc.getStringUnitWidth(texto) * doc.internal.getFontSize()) / 2
            doc.text(texto, xOffset, finalY + 20)

            columnas = [
                {title: 'Date and Time Created', dataKey: 'created_at'},
                {title: 'Note', dataKey: 'note'}
            ]

            doc.autoTable(columnas, physician_notes, {
                styles: {overflow: 'linebreak', fontSize: 7},
                startY: finalY + 40
            })
            doc.addPage();



            let medications = _.cloneDeep(this.medications)            
            medications = _.filter(medications, row => {return row.created_at !== null})
            medications = _.map(medications, row => {row.description = row.medication_type.description;
            return row;})
            var finalY = 75
            texto = 'Medications'
            xOffset =
                doc.internal.pageSize.width / 2 -
                (doc.getStringUnitWidth(texto) * doc.internal.getFontSize()) / 2
            doc.text(texto, xOffset, finalY + 30)
            columnas = [
                {title: 'Date and Time Created', dataKey: 'created_at'},
                {title: 'Medication Name', dataKey: 'description'},
                {title: 'Dose', dataKey: 'dose'},
                {title: 'Frequency', dataKey: 'frequency'},
                {title: 'Route', dataKey: 'route'}
            ]
            
            doc.autoTable(columnas, medications, {
                styles: {overflow: 'linebreak', fontSize: 7},
                startY: finalY + 50
            })


            let laboratories = _.cloneDeep(this.laboratories)
            
            laboratories = _.map(laboratories, row => {row.description = row.laboratory_type.description;
                                                        return row;
            });
            var finalY = doc.previousAutoTable.finalY
            texto = 'Laboratories'
            xOffset =
                doc.internal.pageSize.width / 2 -
                (doc.getStringUnitWidth(texto) * doc.internal.getFontSize()) / 2
            doc.text(texto, xOffset, finalY + 30)

            columnas = [
                {title: 'Date and Time Created', dataKey: 'created_at'},
                {title: 'Name', dataKey: 'description',}
                {title: 'Current Value', dataKey: 'current_value',}
                {title: 'Min', dataKey: 'min',}
                {title: 'Max', dataKey: 'max',}
            ]

            doc.autoTable(columnas, laboratories, {
                styles: {overflow: 'linebreak', fontSize: 7},
                startY: finalY + 50
            })


            let studies = _.cloneDeep(this.studies)
            
            console.log("despues del foreach");
            console.log(studies);
            var finalY = doc.previousAutoTable.finalY
            texto = 'Studies'
            xOffset =
                doc.internal.pageSize.width / 2 -
                (doc.getStringUnitWidth(texto) * doc.internal.getFontSize()) / 2
            doc.text(texto, xOffset, finalY + 20)

            columnas = [
                {title: 'Date and Time Created', dataKey: 'created_at'},
                {title: 'Observation', dataKey: 'observation'},
                {title: 'Type', dataKey: 'type'},
            ]

            doc.autoTable(columnas, studies, {
                styles: {overflow: 'linebreak', fontSize: 7},
                startY: finalY + 40
            })

            let imagings = _.cloneDeep(this.imagings)
            imagings = _.filter(imagings, row => {return row.created_at !== null})
            imagings = _.forEach(imagings, row =>{
                switch(row.type){
                    case "1":
                        row.type = "Radx";
                        break;
                    case "2":
                        row.type = "MRI";
                        break;
                    case "3":
                        row.type = "CT Scanner";
                        break;
                    case "4":
                        row.type = "Endoscopy";
                        break;
                    case "5":
                        row.type = "Ultrasound";
                        break;
                }
            })
            console.log("despues del foreach");
            console.log(imagings);
            var finalY = doc.previousAutoTable.finalY
            texto = 'Imagings'
            xOffset =
                doc.internal.pageSize.width / 2 -
                (doc.getStringUnitWidth(texto) * doc.internal.getFontSize()) / 2
            doc.text(texto, xOffset, finalY + 20)

            columnas = [
                {title: 'Date and Time Created', dataKey: 'created_at'},
                {title: 'Summary', dataKey: 'summary'},
                {title: 'Type', dataKey: 'type'},
            ]

            doc.autoTable(columnas, imagings, {
                styles: {overflow: 'linebreak', fontSize: 7},
                startY: finalY + 40
            })


            /**
             * Consultas
             */
            let consults = _.cloneDeep(this.consults)
            
            console.log("despues del foreach");
            console.log(consults);
            
            var finalY = doc.previousAutoTable.finalY
            texto = 'Consults'
            xOffset =
                doc.internal.pageSize.width / 2 -
                (doc.getStringUnitWidth(texto) * doc.internal.getFontSize()) / 2
            doc.text(texto, xOffset, finalY + 20)

            columnas = [
                {title: 'Date and Time Created', dataKey: 'created_at'},
                {title: 'Observation', dataKey: 'observation'}
                
            ]

            doc.autoTable(columnas, consults, {
                styles: {overflow: 'linebreak', fontSize: 7},
                startY: finalY + 40
            })
            /**
             * Problemas
             */
            let problems = _.cloneDeep(this.problems)
            problems = _.filter(problems, row => {return row.created_at !== null;})
            problems = _.map(problems, row => {row.description = row.problem_type.description;
                                                        return row;
            });            
            var finalY = doc.previousAutoTable.finalY
            texto = 'Problems'
            xOffset =
                doc.internal.pageSize.width / 2 -
                (doc.getStringUnitWidth(texto) * doc.internal.getFontSize()) / 2
            doc.text(texto, xOffset, finalY + 20)

            columnas = [
                {title: 'Date and Time Created', dataKey: 'created_at'},
                {title: 'Description', dataKey: 'description'}
                
            ]

            doc.autoTable(columnas, problems, {
                styles: {overflow: 'linebreak', fontSize: 7},
                startY: finalY + 40
            })

            

            addHeaders(doc)
            addFooters(doc)
            doc.save('x0258414.pdf')            
        },
        setEncounter() {
            this.$store.dispatch("encounter/select", this.form);
            this.$store.dispatch("physicianNote/all");
            this.$store.dispatch("medication/all");
            this.$store.dispatch("consult/all");
            this.$store.dispatch("laboratory/all");
            this.$store.dispatch("imaging/all");
            this.$store.dispatch("problem/all");
            this.$store.dispatch("study/all");
        },
        lookPatient() {
            let index = this.encounters.findIndex(item => item.id === this.id);
            let encounter = this.encounters[index];
            encounter.osat = encounter.osat + "%";
            encounter.rr = encounter.rr + " breaths/minutes";
            encounter.hr = encounter.hr + " beats/minutes";
            encounter.bp = encounter.bp + " mmHg, R arm seated";
            encounter.bmi = encounter.bmi + " kg/m2";
            encounter.weight = encounter.weight + " lbs";
            encounter.height = encounter.height + " inches";
            encounter.temperature = encounter.temperature + "ºF";
            return encounter;
        },
        async updateMedicalRecord(encounter) {
            await this.$store.dispatch("encounter/update", encounter);
        },
        async updateAllergies() {
            await this.$store.dispatch("encounter/update", this.form);
        },
        volver() {
            this.$emit("viewMedicalRecord");
        },
        async user() {
            await axios.get('userPDF').then(res => {this.userData = res.data});
        }
    },
    computed: {
        encounter() {
            return this.$store.getters["encounter/encounter"];
        },
        encounters() {
            return this.$store.getters["encounter/encounters"];
        },
        physician_notes() {
            return this.$store.getters["physicianNote/physician_notes"];
        },
        medications() {
            return this.$store.getters["medication/medications"];
        },
        imagings() {
            return this.$store.getters["imaging/imagings"];
        },
        studies() {
            return this.$store.getters["study/studies"];
        },
        consults() {
            return this.$store.getters["consult/consults"];
        },
        laboratories() {
            return this.$store.getters["laboratory/laboratories"];
        },
        problems() {
            return this.$store.getters["problem/problems"];
        }
    }
};
</script>

<style lang="scss" scoped></style>
