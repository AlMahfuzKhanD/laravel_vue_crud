<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Laravel Vue Dependent Dropdown Example - ItSolutionStuff.com</div>
  
                    <div class="card-body">
                        <div class="form-group">
                            <label>Select Country:</label>
                            <select class='form-control' v-model='country'>
                              <option value='0' >Select Country</option>
                              <option v-for='data in countries' :value='data.id'>{{ data.name }}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
   
<script>  
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                country: 0,
                countries: []
            }
        },
        methods:{
            getCountries: function(){
              axios.get('/api/getCountries')
              .then(function (response) {
                 this.countries = response.data;
              }.bind(this));
         
            }
        },
        created: function(){
            this.getCountries()
        }
    }
</script>
