const { createApp } = Vue

  createApp({
    data() {
      return {
          apiUrl: 'server.php',
          discArray: [],
      }
    },
    mounted() {
      this.showDisks()
    },
    methods: {
      showDisks(){
          axios.get(this.apiUrl)
              .then((response) => {
                  console.log( response.data )
                  this.discArray = response.data
              })       
      }
    },
}).mount('#app')