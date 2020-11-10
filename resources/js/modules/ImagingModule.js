export default {
    namespaced: true,
    state: {
        imagings: [],
        imaging: {},
    },
    mutations: {
        RESET(state){
            state.imagings = [];
            state.imaging = {};
        },
        ALL(state, items) {
            return (state.imagings = items);
        },
        FETCH(state, item) {
            state.imagings.push(item);
            return (state.imaging = item);
        },
        DELETE(state, id) {
            let index = state.imagings.findIndex(
                item => item.id === id
            );
            state.imagings.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.imagings.findIndex(
                i => i.id === item.id
            );
            state.imagings.splice(index, 1);
            state.imagings.unshift(item);
        },
    },
    actions: {
        async all({commit}, encounter_id) {
            await axios
                .get(`/imagings`,{params:{encounter_id:encounter_id}})
                .then(res => {
                    console.log("get imagings ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get imagings: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/imagings/${id}`)
                .then(res => {
                    console.log("get imagings ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get imagings: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            console.log(item);
            axios
                .post(`/imagings`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("post imagings ", res.data);
                        commit("FETCH", item);
                })
                .catch(error =>
                    console.error(`Error con la insertada de imagings: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/imagings/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE", id);
                })
                .catch(err => {
                    console.error("Error al borrar la imagings: " + err);
                });
        },
        async update({commit}, item) {
            console.log("Comienza actualizacion");
            axios
                .put(`/imagings/${item.id}`, item)
                .then(res => {
                    if (res.data.success) commit("EDIT", item);
                })
                .catch(err => {
                    console.error("Error al modificar imagings" + err);
                });
            console.log("Sale de la actualizacion de imagings");
        },
    },
    getters: {
        imagings(state) {
            return state.imagings;
        },
        imaging(state) {
            return state.imaging;
        }
    }
};