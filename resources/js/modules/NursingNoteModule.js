export default {
    namespaced: true,
    state: {
        nursing_notes: [],
        nursing_note: {},
    },
    mutations: {
        RESET(state){
            state.nursing_notes = [];
            state.nursing_note = {};
        },
        ALL(state, items) {
            return (state.nursing_notes = items);
        },
        FETCH(state, item) {
            state.nursing_notes.push(item);
            return (state.nursing_note = item);
        },
        DELETE(state, id) {
            let index = state.nursing_notes.findIndex(
                item => item.id === id
            );
            state.nursing_notes.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.nursing_notes.findIndex(
                i => i.id === item.id
            );
            state.nursing_notes.splice(index, 1);
            state.nursing_notes.unshift(item);
        },
    },
    actions: {
        async all({commit}) {
            await axios
                .get(`/nursing_notes`)
                .then(res => {
                    console.log("get nursing_notes ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get nursing_notes: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/nursing_notes/${id}`)
                .then(res => {
                    console.log("get nursing_notes ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get nursing_notes: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            axios
                .post(`/nursing_notes`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("get nursing_notes ", res.data);
                        commit("FETCH", item);
                })
                .catch(error =>
                    console.error(`Error con la insertada de nursing_notes: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/nursing_notes/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE", id);
                })
                .catch(err => {
                    console.error("Error al borrar la nursing_notes: " + err);
                });
        },
        async update({commit}, item) {
            console.log("Comienza actualizacion");
            axios
                .put(`/nursing_notes/${item.id}`, item)
                .then(res => {
                    if (res.data.success) commit("EDIT", item);
                })
                .catch(err => {
                    console.error("Error al modificar nursing_notes" + err);
                });
            console.log("Sale de la actualizacion de nursing_notes");
        },
    },
    getters: {
        nursing_notes(state) {
            return state.nursing_notes;
        },
        nursing_note(state) {
            return state.nursing_note;
        },
    }
};