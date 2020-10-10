export default {
    namespaced: true,
    state: {
        problem_types: [],
        problem_type: {},
    },
    mutations: {
        RESET(state){
            state.problem_types = [];
            state.problem_type = {};
        },
        ALL(state, items) {
            return (state.problem_types = items);
        },
        FETCH(state, item) {
            state.problem_types.push(item);
            return (state.problem_type = item);
        },
        DELETE(state, id) {
            let index = state.problem_types.findIndex(
                item => item.id === id
            );
            state.problem_types.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.problem_types.findIndex(
                i => i.id === item.id
            );
            state.problem_types.splice(index, 1);
            state.problem_types.unshift(item);
        },
    },
    actions: {
        async all({commit}) {
            await axios
                .get(`/problem_types`)
                .then(res => {
                    console.log("get problem_types ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get problem_types: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/problem_types/${id}`)
                .then(res => {
                    console.log("get problem_types ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get problem_types: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            console.log(item);
            axios
                .post(`/problem_types`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("post problem_types ", res.data);
                        commit("FETCH", item);
                })
                .catch(error =>
                    console.error(`Error con la insertada de problem_types: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/problem_types/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE", id);
                })
                .catch(err => {
                    console.error("Error al borrar la problem_types: " + err);
                });
        },
        async update({commit}, item) {
            console.log("Comienza actualizacion");
            axios
                .put(`/problem_types/${item.id}`, item)
                .then(res => {
                    if (res.data.success) commit("EDIT", item);
                })
                .catch(err => {
                    console.error("Error al modificar problem_types" + err);
                });
            console.log("Sale de la actualizacion de problem_types");
        },
    },
    getters: {
        problem_types(state) {
            return state.problem_types;
        },
        problem_type(state) {
            return state.problem_type;
        }
    }
};