export default {
    namespaced: true,
    state: {
        medications: [],
        medication: {},
    },
    mutations: {
        RESET(state){
            state.medications = [];
            state.medication = {};
        },
        ALL(state, items) {
            return (state.medications = items);
        },
        FETCH(state, item) {
            state.medications.push(item);
            return (state.medication = item);
        },
        DELETE(state, id) {
            let index = state.medications.findIndex(
                item => item.id === id
            );
            state.medications.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.medications.findIndex(
                i => i.id === item.id
            );
            state.medications.splice(index, 1);
            state.medications.unshift(item);
        },
    },
    actions: {
        async all({commit}, encounter_id) {
            await axios
                .get(`/medications`,{params:{encounter_id:encounter_id}})
                .then(res => {
                    console.log("get medications ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get medications: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/medications/${id}`)
                .then(res => {
                    console.log("get medications ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get medications: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            console.log(item);
            axios
                .post(`/medications`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("post medications ", res.data);
                        
                })
                .catch(error =>
                    console.error(`Error con la insertada de medications: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/medications/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE", id);
                })
                .catch(err => {
                    console.error("Error al borrar la medications: " + err);
                });
        },
        async update({commit}, item) {
            console.log("Comienza actualizacion");
            axios
                .put(`/medications/${item.id}`, item)
                .then(res => {
                    if (res.data.success) commit("EDIT", item);
                })
                .catch(err => {
                    console.error("Error al modificar medications" + err);
                });
            console.log("Sale de la actualizacion de medications");
        },
    },
    getters: {
        medications(state) {
            return state.medications;
        },
        medication(state) {
            return state.medication;
        },
    }
};