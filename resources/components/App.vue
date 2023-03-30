<template>
      <div>
        <h2 class="text-center">Currency table</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>Currency</th>
                <th>Value CZK</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="currency in currencies" :key="currency.name">
                <td>{{ currency.name }}</td>
                <td>{{ currency.value }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

  <script>
  import axios from 'axios'
  export default {
    name: 'App',
    data() {
            return {
              currencies: []
            }
        },

    created() {
        axios.get('/products').then(response => {
                console.log(response.data);
                this.currencies = response.data;
            });
    },
  }
  </script>