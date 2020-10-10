export default {
    namespaced: true,
    state: {
        studies: [],
        study: {},
    },
    mutations: {
        RESET(state){
            state.studies = [];
            state.study = {};
        },
        ALL(state, items) {
            return (state.studies = items);
        },
        FETCH(state, item) {
            state.studies.push(item);
            return (state.study = item);
        },
        DELETE(state, id) {
            let index = state.studies.findIndex(
                item => item.id === id
            );
            state.studies.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.studies.findIndex(
                i => i.id === item.id
            );
            state.studies.splice(index, 1);
            state.studies.unshift(item);
        },
        SET(state, item){
            state.study = item;
        }
    },
    actions: {
        async all({commit}) {
            await axios
                .get(`/studies`)
                .then(res => {
                    console.log("get studies ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get studies: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/studies/${id}`)
                .then(res => {
                    console.log("get studies ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get studies: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            axios
                .post(`/studies`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("post studies ", res.data);
                        commit("FETCH", item);
                })
                .catch(error =>
                    console.error(`Error con la insertada de studies: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/studies/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE", id);
                })
                .catch(err => {
                    console.error("Error al borrar la studies: " + err);
                });
        },
        async update({commit}, item) {
            console.log("Comienza actualizacion");
            axios
                .put(`/studies/${item.id}`, item)
                .then(res => {
                    if (res.data.success) commit("EDIT", item);
                })
                .catch(err => {
                    console.error("Error al modificar studies" + err);
                });
            console.log("Sale de la actualizacion de studies");
        },
    },
    getters: {
        studies(state) {
            return state.studies;
        },
        study(state) {
            return state.study;
        },
    }
};