import Vue from "vue";
import Vuex from "vuex";
import PatientModule from './modules/PatientModule';
Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        patient: PatientModule        
    }
});
