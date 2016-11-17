var vue = new Vue({
  el: '#eventlistpage',
  data: {
    filter: {
      categoryId: 0,
      eventTypeId: null,
      cityId: 0,
      page: 1,
      keyword: null,
      time: null,
      priceType: '0',
      dataPerPage: 9
    },
    event: { title: '', detail: '', date: '' },
    events: [],
    eventTypes: [],
    categories: [],
    cities: []
  },

  ready: function () {
    // this is not working
    // probably conflict with jquery on load
    // fuck you !!!
    console.log('vue readyyyy');
    this.fetchEvents();
  },

  methods: {

    fetchEvents: function () {
      this.$http.post('/api/public/events', this.filter)
        .then(function (response) {
          var data = response.body.data.list;
          this.events = data;
        }, function (err) {
          console.log(err);
        });
    },

    fetchEventTypes: function () {
      this.$http.get('/api/public/eventtypes')
        .then(function (response) {
          var data = response.body.data;
          this.eventTypes = data;
        }, function (err) {
          console.log(err);
        });
    },

    fetchCategories: function () {
      this.$http.get('/api/public/categories')
        .then(function (response) {
          var data = response.body.data;
          this.categories = data;
        }, function (err) {
          console.log(err);
        });
    },

    fetchCities: function () {
      this.$http.get('/api/public/cities')
        .then(function (response) {
          var data = response.body.data;
          this.cities = data;
        }, function (err) {
          console.log(err);
        });
    },

    onSelectEventType: function (id) {
      this.filter.eventTypeId = id;
      this.fetchEvents();
    },

    onChangeCategory: function (id) {
      this.filter.categoryId = id;
      //this.fetchEvents();
    },

    onChangeCity: function (id) {
      this.filter.cityId = id;
      //this.fetchEvents();
    },

    onChangePriceType: function (type) {
      this.filter.priceType = type;
      //this.fetchEvents();
    },

    onClickEventDetail: function (id) {
      window.location.assign('/event?id=' + id);
    },

    formatMoney: function (n, currency) {
      return currency + " " + n.toFixed(0).replace(/./g, function (c, i, a) {
        return i > 0 && c !== "," && (a.length - i) % 3 === 0 ? "." + c : c;
      });
    },

    displayDate: function (date) {
      var res = moment(date).format("DD MMMM YYYY");
      return res;
    }
  }
});


// to change ready function, use this !!
function init() {
  vue.fetchCities();
  vue.fetchCategories();
  vue.fetchEventTypes();
  vue.fetchEvents();
};

init();

