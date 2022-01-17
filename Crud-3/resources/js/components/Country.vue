<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Coustom Component</div>

                    <div class="card-body">
                        <data-table v-bind="bindings" @actionTriggered="handleAction"/>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import ActionButtons from 'ActionButtions';

import ActionButtons from './ActionButtons';
    export default {
        name: "ActionButtons",
        
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
                        },
                        {
                            key: "email",
                            title: "Email",
                            sortable: true,
                            searchable: true,
                            index: 0
                        },
                        {
            key: "Action",
            
            
            component: ActionButtons,
        }
                    ],
                    data: this.country,
                    allowedExports: ["xls", "csv"],
                    
                }
            }
        },
       
        components:{
           ActionButtons
        },
        methods: {
            handleAction(actionName, data) {
                console.log(actionName, data);
                window.alert("check out the console to see the logs");
            }
        }
    }
</script>


