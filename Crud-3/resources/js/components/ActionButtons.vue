<template>
    <div class="action-buttons">
        <!-- <button class="btn btn-outline-success" @click="handleAction('view')">
            <i class="fa fa-eye"></i>
        </button>
        <button class="btn btn-outline-primary" @click="handleAction('edit')">
            <i class="fa fa-edit"></i>
        </button>
        <button class="btn btn-outline-dark" @click="handleAction('delete')">
            <i class="fa fa-trash"></i>
        </button> -->
        
    <p>Wrapper for a text input</p>
    <input type="text" placeholder="Custom input!" @change="customChange" />
 
    </div>
</template>
<script>
export default {
    name: "ActionButtons",
    methods: {
          customChange (event) {
              this.$emit("customChange", event.target.value)
          }
      },
    props: {
        data: {
            type: Object,
            required: true,
        },
    },
};
</script>