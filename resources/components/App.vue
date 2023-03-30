<template>
      <div>
        <h2 class="text-center">Currency table</h2>
        <table class="table" style="border: 2px solid black; width: 50%; text-align: center; margin-left: 25%;">
            <thead>
            <tr>
                <th>Currency</th>
                <th>Value CZK</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(value, key) in currencies" :key="key">
                <td>{{ key }}</td>
                <td style="color: green">{{ value }}</td>
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
        axios.get('/currencies').then(response => {
                this.currencies = response.data;
            });
    },
  }
  </script>