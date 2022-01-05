<template>
    <div>
        <h2 class="text-center">Country Vuetify</h2>

    <v-data-table
    :headers="headers"
    :items="countries"
    :items-per-page="10"
    class="elevation-1"
  ></v-data-table>
 
     
    
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                
                headers: [
                    {
                        text: 'Id',
                        align: 'start',
                        sortable: false,
                        value: 'id',
                    },
                    { text: 'Name', value: 'name' }
                ],
                countries: [],
                page:[5,10,'All']
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