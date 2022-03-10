<template>
    <div class="container">
        <form @submit.prevent="addVhl()">
            <div class="form-group">
                <label for="examp">Agence</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Entrer de l'agence"
                    v-model="nom"
                />
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            nom: ""
        };
    },
    methods: {
      async addVhl() {


            await axios.post("http://localhost:8000/pago",{nom:this.nom})
            .then((resp) => console.log('salamo'))
                .then((err) => console.log(err.message));

            alert("siri");
        },
    },
};
</script>
