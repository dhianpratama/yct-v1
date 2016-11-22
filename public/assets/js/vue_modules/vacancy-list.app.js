var vue = new Vue({
    el: '#vacancylistpage',
    data: {
        scholarships: null
    },
    components: {
        VPaginator: VuePaginator
    },

    ready: function () {

    },

    methods: {

        getList: function () {
            this.$http.get('/api/public/vacancies')
                .then(function (response) {
                    var data = response.body.data.list;
                    this.scholarships = data;
                }, function (err) {
                    console.log(err);
                });
        },

        displayDate: function(date){
            var res = moment(date).format("DD MMMM YYYY");
            return res;
        }
    }
});


// to change ready function, use this !!
function init() {
    vue.getList();
};

init();

