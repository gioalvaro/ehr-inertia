export default {
    namespaced: true,
    state: {
        physician_notes: [],
        physician_note: {},
    },
    mutations: {
        RESET(state){
            state.physician_notes = [];
            state.physician_note = {};
        },
        ALL(state, items) {
            return (state.physician_notes = items);
        },
        FETCH(state, item) {
            state.physician_notes.push(item);
            return (state.physician_note = item);
        },
        DELETE(state, id) {
            let index = state.physician_notes.findIndex(
                item => item.id === id
            );
            state.physician_notes.splice(index, 1);
        },
        EDIT(state, item) {
            let index = state.physician_notes.findIndex(
                i => i.id === item.id
            );
            state.physician_notes.splice(index, 1);
            state.physician_notes.unshift(item);
        },
    },
    actions: {
        async all({commit}, encounter_id) {
            await axios
                .get(`/physician_notes`,{params:{encounter_id:encounter_id}})
                .then(res => {
                    console.log("get physician_notes ", res.data.data);
                    commit("ALL", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get physician_notes: " + err);
                });
        },
        async show({commit}, id) {
            await axios
                .get(`/physician_notes/${id}`)
                .then(res => {
                    console.log("get physician_notes ", res.data.data);
                    commit("FETCH", res.data.data);
                })
                .catch(err => {
                    console.error("Error en get physician_notes: " + err);
                });
        },
        async post({commit}, item) {
            console.log("inicio de post");
            axios
                .post(`/physician_notes`, item)
                .then((res) => {
                    if (res.data.success)
                        console.log("get physician_notes ", res.data);
                        commit("FETCH", item);
                })
                .catch(error =>
                    console.error(`Error con la insertada de physician_notes: ${error}`)
                );
        },
        async delete({commit}, id) {
            console.log("Comienza borrado");
            axios
                .delete(`/physician_notes/${id}`)
                .then(res => {
                    if (res.data.success) commit("DELETE", id);
                })
                .catch(err => {
                    console.error("Error al borrar la physician_notes: " + err);
                });
        },
        async update({commit}, item) {
            console.log("Comienza actualizacion");
            axios
                .put(`/physician_notes/${item.id}`, item)
                .then(res => {
                    if (res.data.success) commit("EDIT", item);
                })
                .catch(err => {
                    console.error("Error al modificar physician_notes" + err);
                });
            console.log("Sale de la actualizacion de physician_notes");
        },
    },
    getters: {
        physician_notes(state) {
            return state.physician_notes;
        },
        physician_note(state) {
            return state.physician_note;
        },
    }
};