export default {
    namespaced: true,
    state: {
        providers: [],
        provider: {},
    },
    mutations: {
        RESET(state){
            state.providers = [];
            state.provider = {};
        },
        ALL(state, items) {
            return (state.providers = items);
        },
        FETCH(state, item) {
            state.providers.push(item);
            return (state.provider = item);
        },
        DELETE(state, id) {
            let index = state.providers.findIndex(
                item => item.id === id
            );
            state.providers.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.providers.findIndex(
                i => i.id === item.id
            );
            state.providers.splice(index, 1);
            state.providers.unshift(item);
        },
    },
    actions: {
        async all({commit}) {
            await axios
                .get(`/providers`)
                .then(res => {
                    console.log("get providers ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get providers: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/providers/${id}`)
                .then(res => {
                    console.log("get providers ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get providers: " + err);
                });
        },
        async me({commit}) {
            await axios
                .get(`/providers/myself`)
                .then(res => {
                    console.log("get providers ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get providers: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            axios
                .post(`/providers`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("post providers ", res.data);
                        commit("FETCH", item);
                })
                .catch(error =>
                    console.error(`Error con la insertada de providers: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/providers/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE", id);
                })
                .catch(err => {
                    console.error("Error al borrar la providers: " + err);
                });
        },
        async update({commit}, item) {
            console.log("Comienza actualizacion");
            axios
                .put(`/providers/${item.id}`, item)
                .then(res => {
                    if (res.data.success) commit("EDIT", item);
                })
                .catch(err => {
                    console.error("Error al modificar providers" + err);
                });
            console.log("Sale de la actualizacion de providers");
        },
    },
    getters: {
        providers(state) {
            return state.providers;
        },
        provider(state) {
            return state.provider;
        },
    }
};