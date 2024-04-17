const { createApp } = Vue;

createApp({
  data() {
    return {
      dischi: [],
      newDisco: {
        title: '',
        author: '',
        year: '',
        poster: '',
        genre: ''
      },
      base_api_url: 'api.php',
      error: '',
    };
  },
  methods: {
    // addDisco() {
    //   axios.post(this.base_api_url, { newDisco: this.newDisco })
    //     .then(response => {
    //       console.log(response);
    //       this.dischi.push(response.data);
    //       this.newDisco = {
    //         title: '',
    //         author: '',
    //         year: '',
    //         poster: '',
    //         genre: ''
    //       };
    //     })
    //     .catch(error => {
    //       console.error('Errore nella chiamata API:', error);
    //       this.error = error.message;
    //     });
    // }
  },
  mounted() {
    axios.get(this.base_api_url)
      .then(response => {
        console.log(response);
        this.dischi = response.data;
      })
      .catch(error => {
        console.error('Errore nella chiamata API:', error);
        this.error = error.message;
      });
  }
}).mount('#app');
