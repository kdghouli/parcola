<template>
  <div>
    <h1 class="my-4">
      Table des Camions
      <small>CBGS</small>
    </h1>
    <select
      v-model="selected"
      @change="onChange($event)"
      id="select"
      class="custom-select"
    >
      <option v-for="svhl in vhls" :value="svhl.agence">
        {{ svhl.agence }}
      </option>
    </select>

    <br />
    <br />

    <table
      class="table table-bordered border-primary table-bordered table-hover table-sm"
    >
      <thead class="bg-danger text-white">
        <tr>
          <th scope="col">Matricule</th>
          <th scope="col">Marque</th>
          <th scope="col">Agence</th>
          <th scope="col">Intitule</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="vhl in vhls" :key="vhl.id" v-if="vhl.agence == selected">
          <th scope="row">{{ vhl.matricule }}</th>
          <td>{{ vhl.marque }}</td>
          <td>{{ vhl.agence }}</td>
          <td
            :class="
              vhl.intitule === 'CBGS' ? 'text-success font-weight-bold' : ''
            "
          >
            {{ vhl.intitule }}
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      vhls: {},
      selected: undefined,
    };
  },

  name: "index-camion",

  // created() {
  //     console.log("Component mounted.");
  //     this.indextation();
  // },
  mounted() {
    console.log("Component mounted.");
    this.indextation();
  },
  computed: {},
  methods: {
    indextation() {
      axios
        .get("http://localhost:8000/api/vue")
        .then((resp) => {
          this.vhls = resp.data;
        })
        .then((err) => console.log(err));
    },
    onChange(event) {
      console.log(event.target.value);
      return this.selected;
    },
    // Selectionneur(){

    //     if(this.selected === undefined){
    //         console.log("select vide");
    //     }else{
    //         console.log("select :".this.selected);
    //         return 'v-if="vhl.agence === selected"';
    //     }

    // }
  },
};
</script>
