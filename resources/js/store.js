import Vue from "vue";
import Vuex from "vuex";
import PatientModule from './modules/PatientModule';
import LaboratoryModule from './modules/LaboratoryModule';
import NursingNoteModule from './modules/NursingNoteModule';
import PhysicianNoteModule from './modules/PhysicianNoteModule';
import MedicationModule from './modules/MedicationModule';
import MedicationTypeModule from './modules/MedicationTypeModule';
import MedicalRecordModule from './modules/MedicalRecordModule';
import EncounterModule from './modules/EncounterModule';
import ProviderModule from "./modules/ProviderModule";
import LaboratoryTypeModule from "./modules/LaboratoryTypeModule";
import StudyModule from "./modules/StudyModule";
import ProblemModule from "./modules/ProblemModule";
import ProblemTypeModule from "./modules/ProblemTypeModule";
import ImagingModule from "./modules/ImagingModule";
import ConsultModule from "./modules/ConsultModule";

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        patient: PatientModule,
        medicalRecord: MedicalRecordModule,
        medication: MedicationModule,
        nursingNote: NursingNoteModule,
        physicianNote: PhysicianNoteModule,
        laboratory: LaboratoryModule,
        encounter: EncounterModule,
        provider: ProviderModule,
        medicationType: MedicationTypeModule,
        laboratoryType: LaboratoryTypeModule,
        consult: ConsultModule,
        imaging: ImagingModule,
        problem: ProblemModule,
        problemType: ProblemTypeModule,
        study: StudyModule
    }
});
