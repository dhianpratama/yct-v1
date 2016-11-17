class VacancyFormController {
  constructor ($stateParams, $state, $timeout, API) {
    'ngInject'

    this.$state = $state
    this.formSubmitted = false
    this.alerts = []
    this.API = API
    this.organizers = []
    this.vacancy_types = []

    this.datepicker = {
      opened: false
    };

    if ($stateParams.alerts) {
      this.alerts.push($stateParams.alerts)
      let self = this
      $timeout(()=>{
          self.alerts = []
      },2000)
    }

    let vacancyId = $stateParams.vacancyId

    this.data = null

    API.one('vacancy/detail',vacancyId).get()
      .then((response) => {
        this.data = response.data
      })

    this.getOrganizers()
    this.getTypes()
  }

  getOrganizers(){
    let that = this
    that.API.service('organizer')
      .getList()
      .then((response) => {
        that.organizers = response.plain()
      });
  }

  getTypes(){
    let that = this
    that.API.service('vacancytype')
      .getList()
      .then((response) => {
        that.vacancy_types = response.plain()
      });
  }

  save (isValid) {
    if (isValid) {
      let self = this
      self.API.service('vacancy')
      .post(self.data)
      .then(() => {
          swal({
            title: 'Save!',
            text: 'Vacancy has been saved.',
            type: 'success',
            confirmButtonText: 'OK',
            closeOnConfirm: true
          }, function () {
            self.$state.go('app.vacancylist')
          })
        }, (response) => {
          let alert = { type: 'error', 'title': 'Error!', msg: response.data.message }
          self.$state.go(self.$state.current, { alerts: alert})
        })
    } else {
      this.formSubmitted = true
    }
  }

  $onInit () {}
}

export const VacancyFormComponent = {
  templateUrl: './views/app/components/vacancy/vacancy-form/vacancy-form.component.html',
  controller: VacancyFormController,
  controllerAs: 'vm',
  bindings: {}
}
