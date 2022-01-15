<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
        
        computed: {
        bindings() {
            return {
                columns: [
    {
        key: "name",
        title: "Name",
        sortable: true,
        searchable: true,
        index: 0
    },
    {
        key: "email",
        title: "Email",
        sortable: true,
        searchable: true,
        index: 0
    },
    {
        key: "registered_at",
        title: "Registered at",
        sortable: true,
        searchable: true,
        index: 0
    },
    {
        key: "last_access_at",
        title: "Last access at",
        sortable: true,
        searchable: true,
        index: 0
    },
],
                data: [/*the data*/],
                allowedExports: ["xls", "csv"],
                
                /* other props...*/
            }
        }
    },
    }
</script>


