<script>
$(function() {
var sidenav_diary = new Vue({
  el: '#layout',
  data: {
    body: "",
    tst: ""
  },
  methods: {
    diary_list: function (event) {
        console.log('diary_list');
        this.tst = "aaa";
    }
  }
})
});
</script>
