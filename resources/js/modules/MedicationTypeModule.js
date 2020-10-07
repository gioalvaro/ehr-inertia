export default {
    namespaced: true,
    state: {
        medication_types: [],
        medication_type: {},
    },
    mutations: {
        RESET(state){
            state.medication_types = [];
            state.medication_type = {};
        },
        ALL(state, items) {
            return (state.medication_types = items);
        },
        FETCH(state, item) {
            state.medication_types.push(item);
            return (state.medication_type = item);
        },
        DELETE(state, id) {
            let index = state.medication_types.findIndex(
                item => item.id === id
            );
            state.medication_types.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.medication_types.findIndex(
                i => i.id === item.id
            );
            state.medication_types.splice(index, 1);
            state.medication_types.unshift(item);
        },
    },
    actions: {
        async all({commit}) {
            await axios
                .get(`/medication_types`)
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
                .get(`/medication_types/${id}`)
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
            axios
                .post(`/medication_types`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("post medications ", res.data);
                        commit("FETCH", item);
                })
                .catch(error =>
                    console.error(`Error con la insertada de medications: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/medication_types/${id}`)
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
                .put(`/medication_types/${item.id}`, item)
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
        medication_types(state) {
            return state.medication_types;
        },
        medication_type(state) {
            return state.medication_type;
        },
    }
};