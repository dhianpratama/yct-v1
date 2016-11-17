var vue = new Vue({
    el: '#indexpage',
    data: {
        events: [],
        filter: {
            categoryId: 0,
            eventTypeId: null,
            cityId: 0,
            page: 1,
            keyword: null,
            time: null,
            priceType: '0',
            dataPerPage: 4
        },
    },

    ready: function () {
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
    vue.fetchEvents();
};

init();

