new Vue({
  el: "#app",
  data: {
    albumList: []
  },
  computed: {
  mounted() {
    axios.get("db/api.php")
      .then(resp => {
        this.albumList = resp.data.data;
      })
  },
  }
});