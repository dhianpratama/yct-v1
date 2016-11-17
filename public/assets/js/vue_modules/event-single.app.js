var vue = new Vue({
    el: '#eventsinglepage',
    data: {
        event: null
    },

    ready: function () {
        // this is not working
        // probably conflict with jquery on load
        // fuck you !!!
        console.log('vue readyyyy');
        this.fetchEvents();
    },

    methods: {

        getEvent: function () {
            var id = this.getParameterByName('id');
            this.$http.get('/api/public/event/' + id)
                .then(function (response) {
                    var data = response.body.data;
                    this.event = data;
                }, function (err) {
                    console.log(err);
                });
        },

        getParameterByName(name, url) {
            if (!url) {
                url = window.location.href;
            }
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        },

        formatMoney: function (n, currency) {
            return currency + " " + n.toFixed(0).replace(/./g, function (c, i, a) {
                return i > 0 && c !== "," && (a.length - i) % 3 === 0 ? "." + c : c;
            });
        }


    }
});


// to change ready function, use this !!
function init() {
    vue.getEvent();
};

init();

