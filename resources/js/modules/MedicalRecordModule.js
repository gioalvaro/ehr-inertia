export default {
    namespaced: true,
    state: {
        medical_records: [],
        medical_record: {},
    },
    mutations: {
        RESET(state){
            state.medical_records = [];
            state.medical_record = {};
        },
        ALL(state, items) {
            return (state.medical_records = items);
        },
        FETCH(state, item) {
            state.medical_records.push(item);
            return (state.medical_record = item);
        },
        DELETE(state, id) {
            let index = state.medical_records.findIndex(
                item => item.id === id
            );
            state.medical_records.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.medical_records.findIndex(
                i => i.id === item.id
            );
            state.medical_records.splice(index, 1);
            state.medical_records.unshift(item);
        },
    },
    actions: {
        async all({commit}) {
            await axios
                .get(`/medical_records`)
                .then(res => {
                    console.log("get medical records ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get medical records: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/medical_records/${id}`)
                .then(res => {
                    console.log("get medical record ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get medical_records: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            axios
                .post(`/medical_records`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("get medical_record ", res.data);
                        commit("FETCH", item);
                })
                .catch(error =>
                    console.error(`Error con la insertada de medical record: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/medical_records/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE", id);
                })
                .catch(err => {
                    console.error("Error al borrar la medical records: " + err);
                });
        },
        async update({commit}, item) {
            console.log("Comienza actualizacion");
            axios
                .put(`/medical_records/${item.id}`, item)
                .then(res => {
                    if (res.data.success) commit("EDIT", item);
                })
                .catch(err => {
                    console.error("Error al modificar medical records" + err);
                });
            console.log("Sale de la actualizacion de medical records");
        },
    },
    getters: {
        medical_records(state) {
            return state.medical_records;
        },
        medical_record(state) {
            return state.medical_record;
        },
    }
};