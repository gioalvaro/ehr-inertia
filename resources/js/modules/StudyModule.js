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
        ADD(state, item) {
            state.studies.push(item);
            return (state.study = item);
        },
        FETCH(state, item) {            
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
    },
    actions: {
        async all({commit}, encounter_id) {
            await axios
                .get(`/studies`,{params:{encounter_id:encounter_id}})
                .then(res => {
                    console.log("get study ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get study: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/studies/${id}`)
                .then(res => {
                    console.log("get study ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get study: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            console.log(item);
            axios
                .post(`/studies`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("post study ", res.data);
                        commit("ADD", res.data.data);
                })
                .catch(error =>
                    console.error(`Error con la insertada de study: ${error}`)
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
                    console.error("Error al borrar la study: " + err);
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
                    console.error("Error al modificar study" + err);
                });
            console.log("Sale de la actualizacion de study");
        },
    },
    getters: {
        studies(state) {
            return state.studies;
        },
        study(state) {
            return state.study;
        }
    }
};