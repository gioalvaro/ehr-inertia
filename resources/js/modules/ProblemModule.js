export default {
    namespaced: true,
    state: {
        problems: [],
        problem: {},
    },
    mutations: {
        RESET(state){
            state.problems = [];
            state.problem = {};
        },
        ALL(state, items) {
            return (state.problems = items);
        },
        ADD(state, item) {
            state.problems.push(item);
            return (state.problem = item);
        },
        FETCH(state, item) {            
            return (state.problem = item);
        },
        DELETE(state, id) {
            let index = state.problems.findIndex(
                item => item.id === id
            );
            state.problems.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.problems.findIndex(
                i => i.id === item.id
            );
            state.problems.splice(index, 1);
            state.problems.unshift(item);
        },
    },
    actions: {
        async all({commit}) {
            await axios
                .get(`/problems`)
                .then(res => {
                    console.log("get problems ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get problems: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/problems/${id}`)
                .then(res => {
                    console.log("get problems ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get problems: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            console.log(item);
            axios
                .post(`/problems`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("post problems ", res.data);
                        commit("ADD", res.data.data);
                })
                .catch(error =>
                    console.error(`Error con la insertada de problems: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/problems/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE", id);
                })
                .catch(err => {
                    console.error("Error al borrar la problems: " + err);
                });
        },
        async update({commit}, item) {
            console.log("Comienza actualizacion");
            axios
                .put(`/problems/${item.id}`, item)
                .then(res => {
                    if (res.data.success) commit("EDIT", item);
                })
                .catch(err => {
                    console.error("Error al modificar problems" + err);
                });
            console.log("Sale de la actualizacion de problems");
        },
    },
    getters: {
        problems(state) {
            return state.problems;
        },
        problem(state) {
            return state.problem;
        }
    }
};