<template>
    <div>
        <h2 class="text-center">Country Bootstrap</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>

                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="country in countries" :key="country.id">
                <td>{{ country.id }}</td>
                <td>{{ country.name }}</td>
                <!-- <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: product.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteCountry(product.id)">Delete</button>
                    </div>
                </td> -->
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                countries: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/countries/')
                .then(response => {
                    this.countries = response.data;
                    // console.log('hi');
                });
        },
        methods: {
            // deleteCountry(id) { 
            //     this.axios
            //         .delete(`http://localhost:8000/api/countries/${id}`)
            //         .then(response => {
            //             let i = this.country.map(data => data.id).indexOf(id);
            //             this.country.splice(i, 1)
            //         });
            // }
        }
    }
</script>