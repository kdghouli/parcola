<template>
    <div class="container">
        <form @submit="addVhl()">
            <div class="form-group">
                <label for="examp">Matricule</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Entrer la Matricule"
                    name="matricule"
                    v-model="matricule"
                />
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            matricule: ""
        };
    },
    methods: {
        addVhl() {
            axios.post("/api/add/",{matricule:this.matricule})
            .then((resp) => {
                    console.log(matricule);
                })
                .then((err) => console.log(err));

            alert("siri");
        },
    },
};
</script>
