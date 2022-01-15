<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <data-table v-bind="bindings"/>
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
        props: ['country'],
        
        computed: {
            bindings() {
                return {
                    columns: [
                        {
                            key: "title",
                            title: "Name",
                            sortable: true,
                            searchable: true,
                            index: 0
                        },
                        {
                            key: "slug",
                            title: "Email",
                            sortable: true,
                            searchable: true,
                            index: 0
                        }
                    ],
                    data: this.country,
                    allowedExports: ["xls", "csv"]
                }
            }
        },
        created() {
            console.log(this.country);
        }
    }
</script>


