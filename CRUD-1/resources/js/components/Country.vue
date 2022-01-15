<template>
<v-app>
    <v-main>
        <v-container>
            <h2 class="text-center">Country Vuetify</h2>
                <v-row>
                    <v-col md="3">
                        <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-data-table
                            :headers="headers"
                            :items="countries"
                            :items-per-page="5"
                            :search="search"
                            class="elevation-1"
                            
                        >
                            <template v-slot:item.actions="{ item }">

                                <v-icon
                                    small
                                    @click="deleteCountry(item)"
                                >
                                    mdi-delete
                                </v-icon>
                            </template>
                        </v-data-table>
                    </v-col>
                    
                </v-row>
                
        </v-container>
    </v-main>
</v-app>

</template>
 
<script>
    export default {
        data() {
            return {
                search:"",
                headers: [
                    {
                        text: 'Id',
                        align: 'center',
                        sortable: false,
                        value: 'id',

                    },
                    { text: 'Name', value: 'name',filterable: true },
                    { text: 'Actions', value: 'actions', sortable: false },
                    
                    
                    
                ],
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
            deleteCountry(item) { 
                this.axios
                    .delete('/api/countries/'+item.id)
                    .then(response => {
                        let i = this.countries.map(data => item).indexOf(item);
                        this.countries.splice(i, 1)
                    });
            }
        }
    }
</script>