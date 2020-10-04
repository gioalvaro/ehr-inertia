export default {
    namespaced: true,
    state: {
        laboratories: [],
        laboratory: {},
    },
    mutations: {
        RESET(state){
            state.laboratories = [];
            state.laboratory = {};
        },
        ALL(state, items) {
            return (state.laboratories = items);
        },
        FETCH(state, item) {
            state.laboratories.push(item);
            return (state.laboratory = item);
        },
        DELETE(state, id) {
            let index = state.laboratories.findIndex(
                item => item.id === id
            );
            state.laboratories.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.laboratories.findIndex(
                i => i.id === item.id
            );
            state.laboratories.splice(index, 1);
            state.laboratories.unshift(item);
        },
    },
    actions: {
        async all({commit}) {
            await axios
                .get(`/laboratories`)
                .then(res => {
                    console.log("get laboratories ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get laboratories: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/laboratories/${id}`)
                .then(res => {
                    console.log("get laboratories ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get laboratories: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            axios
                .post(`/laboratories`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("post laboratories ", res.data);
                        commit("FETCH", item);
                })
                .catch(error =>
                    console.error(`Error con la insertada de laboratories: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/laboratories/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE", id);
                })
                .catch(err => {
                    console.error("Error al borrar la laboratories: " + err);
                });
        },
        async update({commit}, item) {
            console.log("Comienza actualizacion");
            axios
                .put(`/laboratories/${item.id}`, item)
                .then(res => {
                    if (res.data.success) commit("EDIT", item);
                })
                .catch(err => {
                    console.error("Error al modificar laboratories" + err);
                });
            console.log("Sale de la actualizacion de laboratories");
        },
    },
    getters: {
        laboratories(state) {
            return state.laboratories;
        },
        laboratory(state) {
            return state.laboratory;
        },
    }
};