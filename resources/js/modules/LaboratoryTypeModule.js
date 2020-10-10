export default {
    namespaced: true,
    state: {
        laboratory_types: [],
        laboratory_type: {},
    },
    mutations: {
        RESET(state){
            state.laboratory_types = [];
            state.laboratory_type = {};
        },
        ALL(state, items) {
            return (state.laboratory_types = items);
        },
        FETCH(state, item) {
            state.laboratory_types.push(item);
            return (state.laboratory_type = item);
        },
        DELETE(state, id) {
            let index = state.laboratory_types.findIndex(
                item => item.id === id
            );
            state.laboratory_types.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.laboratory_types.findIndex(
                i => i.id === item.id
            );
            state.laboratory_types.splice(index, 1);
            state.laboratory_types.unshift(item);
        },
    },
    actions: {
        async all({commit}) {
            await axios
                .get(`/laboratory_types`)
                .then(res => {
                    console.log("get laboratory_types ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get laboratory_types: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/laboratory_types/${id}`)
                .then(res => {
                    console.log("get laboratory_types ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get laboratory_types: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            axios
                .post(`/laboratory_types`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("post laboratory_types ", res.data);
                        commit("FETCH", item);
                })
                .catch(error =>
                    console.error(`Error con la insertada de laboratory_types: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/laboratory_types/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE", id);
                })
                .catch(err => {
                    console.error("Error al borrar la laboratory_types: " + err);
                });
        },
        async update({commit}, item) {
            console.log("Comienza actualizacion");
            axios
                .put(`/laboratory_types/${item.id}`, item)
                .then(res => {
                    if (res.data.success) commit("EDIT", item);
                })
                .catch(err => {
                    console.error("Error al modificar laboratory_types" + err);
                });
            console.log("Sale de la actualizacion de laboratory_types");
        },
    },
    getters: {
        laboratory_types(state) {
            return state.laboratory_types;
        },
        laboratory_type(state) {
            return state.laboratory_type;
        },
        hematologic(state){
            return _.filter(state.laboratory_types, row => {
                return row.laboratory_group_id === 1;
            });
        },
        blood_plasma_serum(state){
            return _.filter(state.laboratory_types, row => {
                return row.laboratory_group_id === 2;
            });
        },
        lipids(state){
            return _.filter(state.laboratory_types, row => {
                return row.laboratory_group_id === 3;
            });
        },
        genetics(state){
            return _.filter(state.laboratory_types, row => {
                return row.laboratory_group_id === 4;
            });
        },
        endo(state){
            return _.filter(state.laboratory_types, row => {
                return row.laboratory_group_id === 5;
            });
        },
        urine(state){
            return _.filter(state.laboratory_types, row => {
                return row.laboratory_group_id === 6;
            });
        },
        cerebrospinal_fluid(state){
            return _.filter(state.laboratory_types, row => {
                return row.laboratory_group_id === 7;
            });
        },
        infectious_disease(state){
            return _.filter(state.laboratory_types, row => {
                return row.laboratory_group_id === 8;
            });
        },
        others(state){
            return _.filter(state.laboratory_types, row => {
                return row.laboratory_group_id === 9;
            });
        }

    }
};