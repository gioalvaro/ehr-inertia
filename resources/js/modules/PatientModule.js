
export default {
    namespaced: true,
    state: {
        patients: [],
        patient: {},
    },
    mutations: {
        RESET_PATIENTS(state){
            state.patients = [];
            state.patient = {};
        },
        FETCH_PATIENTS(state, patients) {
            return (state.patients = patients);
        },
        FETCH_PATIENT(state, patient) {
            state.patients.push(patient);
            return (state.patient = patient);
        },
        DELETE_PATIENT(state, id) {
            let index = state.patients.findIndex(
                item => item.id === id
            );
            state.patients.splice(index, 1);
        },
        EDIT_PATIENT(state, patient) {
            let index = state.patients.findIndex(
                item => item.id === patient.id
            );
            state.patients.splice(index, 1);
            state.patients.unshift(patient);
        },
    },
    actions: {
        async all({commit}) {
            await axios
                .get(`/patients`)
                .then(res => {
                    console.log("get patients ", res.data.data);
                    commit("FETCH_PATIENTS", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get patients: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/patients/${id}`)
                .then(res => {
                    console.log("get patient ", res.data.data);
                    commit("FETCH_PATIENT", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get patient: " + err);
                });
        },
        async post({commit}, patient) {
            console.log("inicio de post");
            axios
                .post(`/patients`, patient)
                .then((res) => {
                    if (res.data.success)
                        console.log("get patient ", res.data);
                        commit("FETCH_PATIENT", patient);
                })
                .catch(error =>
                    console.error(`Error con la insertada de patient: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/patients/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE_PATIENT", id);
                })
                .catch(err => {
                    console.error("Error al borrar la patient: " + err);
                });
        },
        async update({commit}, patient) {
            console.log("Comienza actualizacion");
            axios
                .put(`/patients/${patient.id}`, patient)
                .then(res => {
                    if (res.data.success) commit("EDIT_PATIENT", patient);
                })
                .catch(err => {
                    console.error("Error al modificar patient" + err);
                });
            console.log("Sale de la actualizacion de patient");
        },
    },
    getters: {
        patients(state) {
            return state.patients;
        },
        patient(state) {
            return state.patient;
        },
    }
};