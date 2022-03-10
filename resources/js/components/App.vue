<template>
    <div>
        <!-- <div class="nav">
            <router-link to="/vhls">PARC</router-link>  |
            <router-link to="/vhls/add">Add</router-link>  |
            <router-link to="/vhls/show">Show</router-link>  |
            <router-link to="/vhls/update">Update</router-link>
        </div> -->

        <!-- <router-view></router-view> -->
        <!-- Navigation -->



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <router-link class="navbar-brand" to="/vhl">Home</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <router-link class="nav-link m-1" to="/vhl">Parc
                            <span class="sr-only">(current)</span>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link m-1" to="/api/add">Add</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link m-1" to="/vhls/show">Show</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link m-1" to="/vhls/update">Update</router-link>
                    </li>

                    <li class="nav-item register-btn reg-login-btn m-1" data-toggle="modal" data-target="#register-modal">
                        <a class="btn btn-info nav-link" href="" data-toggle="modal"
                            data-target="#register-modal">Register</a>
                    </li>
                    <li class="nav-item reg-login-btn m-1" data-toggle="modal" data-target="#login-modal">
                        <a class="btn btn-primary text-weight nav-link" href="#">login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   <h1 class="mt-3">ahlan</h1>

<add-agence></add-agence>



    </div>
</template>


<script>
import IndexVue from "./IndexVue.vue";
import AddAgence from "./AddAgence.vue";


export default {
    mounted() {
        console.log("Component mounted.");
    },
    components: { IndexVue, AddAgence, },
};
</script>
