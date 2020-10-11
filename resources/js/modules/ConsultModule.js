export default {
    namespaced: true,
    state: {
        consults: [],
        consult: {},
    },
    mutations: {
        RESET(state){
            state.consults = [];
            state.consult = {};
        },
        ALL(state, items) {
            return (state.consults = items);
        },
        FETCH(state, item) {
            state.consults.push(item);
            return (state.consult = item);
        },
        DELETE(state, id) {
            let index = state.consults.findIndex(
                item => item.id === id
            );
            state.consults.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.consults.findIndex(
                i => i.id === item.id
            );
            state.consults.splice(index, 1);
            state.consults.unshift(item);
        },
    },
    actions: {
        async all({commit}) {
            await axios
                .get(`/consults`)
                .then(res => {
                    console.log("get consults ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get consults: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/consults/${id}`)
                .then(res => {
                    console.log("get consults ", res.data.data);
                    commit("RESET");
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get consults: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            console.log(item);
            axios
                .post(`/consults`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("post consults ", res.data.data);
                        commit("RESET");
                        commit("FETCH", res.data.data);
                })
                .catch(error =>
                    console.error(`Error con la insertada de consults: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/consults/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE", id);
                })
                .catch(err => {
                    console.error("Error al borrar la consults: " + err);
                });
        },
        async update({commit}, item) {
            console.log("Comienza actualizacion");
            axios
                .put(`/consults/${item.id}`, item)
                .then(res => {
                    if (res.data.success) commit("EDIT", item);
                })
                .catch(err => {
                    console.error("Error al modificar consults" + err);
                });
            console.log("Sale de la actualizacion de consults");
        },
    },
    getters: {
        consults(state) {
            return state.consults;
        },
        consult(state) {
            return state.consult;
        }
    }
};