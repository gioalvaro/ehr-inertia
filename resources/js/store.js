import Vue from "vue";
import Vuex from "vuex";
import PatientModule from './modules/PatientModule';
import LaboratoryModule from './modules/LaboratoryModule';
import NursingNoteModule from './modules/NursingNoteModule';
import PhysicianNoteModule from './modules/PhysicianNoteModule';
import MedicationModule from './modules/MedicationModule';
import MedicalRecordModule from './modules/MedicalRecordModule';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        patient: PatientModule,
        medicalRecord: MedicalRecordModule,
        medication: MedicationModule,
        nursingNote: NursingNoteModule,
        physicianNote: PhysicianNoteModule,
        laboratory: LaboratoryModule        
    }
});
