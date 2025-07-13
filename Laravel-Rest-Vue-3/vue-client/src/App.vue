<script setup>
import {ref, onMounted} from 'vue'
import axios from './axios'

const products = ref([])
const newProduct = ref({ name:'', price:''})

const fetchProducts = async () => {
  const res = await axios.get('/products')
  products.value = res.data
}

const createProduct = async () => {
  await axios.post('/products', newProduct.value)
  newProduct.value = { name:'', price: ''}
  fetchProducts()
}

const deleteProduct = async (id) => {
  await axios.delete(`/products/${id}`)
  fetchProducts()
}

onMounted(fetchProducts)

</script>

<template>
  <main>
    <h1>Product List</h1>
    <form @submit.prevent="createProduct">
      <input v-model="newProduct.name" placeholder="Name" type="text" required>
      <input v-model="newProduct.price" type="number" placeholder="Price">
      <button type="submit">Add Product</button>
    </form>
    <ul>
      <li v-for="p in products" :key="p.id">
        {{ p.name }} - tk= {{ p.price }}
        <button @click="deleteProduct(p.id)">Delete</button>
      </li>
    </ul>
  </main>
</template>