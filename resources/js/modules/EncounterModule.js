export default {
    namespaced: true,
    state: {
        encounters: [],
        encounter: {},
    },
    mutations: {
        RESET(state){
            state.encounters = [];
            state.encounter = {};
        },
        ALL(state, items) {
            return (state.encounters = items);
        },
        FETCH(state, item) {
            state.encounters.push(item);
            return (state.encounter = item);
        },
        DELETE(state, id) {
            let index = state.encounters.findIndex(
                item => item.id === id
            );
            state.encounters.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.encounters.findIndex(
                i => i.id === item.id
            );
            state.encounters.splice(index, 1);
            state.encounters.unshift(item);
        },
        SET(state, item){
            return state.encounter = item;
        }
    },
    actions: {
        select({commit}, obj){
            commit("SET", obj);
        },
        async all({commit}) {
            await axios
                .get(`/encounters`)
                .then(res => {
                    console.log("get encounters ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get encounters: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/encounters/${id}`)
                .then(res => {
                    console.log("get encounters ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get encounters: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            axios
                .post(`/encounters`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("post encounters ", res.data);
                        commit("FETCH", item);
                })
                .catch(error =>
                    console.error(`Error con la insertada de encounters: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/encounters/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE", id);
                })
                .catch(err => {
                    console.error("Error al borrar la encounters: " + err);
                });
        },
        async update({commit}, item) {
            console.log("Comienza actualizacion");
            axios
                .put(`/encounters/${item.id}`, item)
                .then(res => {
                    if (res.data.success) commit("EDIT", item);
                })
                .catch(err => {
                    console.error("Error al modificar encounters" + err);
                });
            console.log("Sale de la actualizacion de encounters");
        },
    },
    getters: {
        encounters(state) {
            return state.encounters;
        },
        encounter(state) {
            return state.encounter;
        },
    }
};