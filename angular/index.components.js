import { TablesSimpleComponent } from './app/components/tables-simple/tables-simple.component'
import { UiModalComponent } from './app/components/ui-modal/ui-modal.component'
import { UiTimelineComponent } from './app/components/ui-timeline/ui-timeline.component'
import { UiButtonsComponent } from './app/components/ui-buttons/ui-buttons.component'
import { UiIconsComponent } from './app/components/ui-icons/ui-icons.component'
import { UiGeneralComponent } from './app/components/ui-general/ui-general.component'
import { FormsGeneralComponent } from './app/components/forms-general/forms-general.component'
import { ChartsChartjsComponent } from './app/components/charts-chartjs/charts-chartjs.component'
import { WidgetsComponent } from './app/components/widgets/widgets.component'
import { UserProfileComponent } from './app/components/user-profile/user-profile.component'
import { UserVerificationComponent } from './app/components/user-verification/user-verification.component'
import { ComingSoonComponent } from './app/components/coming-soon/coming-soon.component'
import { UserEditComponent } from './app/components/user-edit/user-edit.component'
import { UserPermissionsEditComponent } from './app/components/user-permissions-edit/user-permissions-edit.component'
import { UserPermissionsAddComponent } from './app/components/user-permissions-add/user-permissions-add.component'
import { UserPermissionsComponent } from './app/components/user-permissions/user-permissions.component'
import { UserRolesEditComponent } from './app/components/user-roles-edit/user-roles-edit.component'
import { UserRolesAddComponent } from './app/components/user-roles-add/user-roles-add.component'
import { UserRolesComponent } from './app/components/user-roles/user-roles.component'
import { UserListsComponent } from './app/components/user-lists/user-lists.component'
import { DashboardComponent } from './app/components/dashboard/dashboard.component'
import { NavSidebarComponent } from './app/components/nav-sidebar/nav-sidebar.component'
import { NavHeaderComponent } from './app/components/nav-header/nav-header.component'
import { LoginLoaderComponent } from './app/components/login-loader/login-loader.component'
import { ResetPasswordComponent } from './app/components/reset-password/reset-password.component'
import { ForgotPasswordComponent } from './app/components/forgot-password/forgot-password.component'
import { LoginFormComponent } from './app/components/login-form/login-form.component'
import { RegisterFormComponent } from './app/components/register-form/register-form.component'
import { EventTypeListComponent } from './app/components/event-type/event-type-list/event-type-list.component'
import { EventTypeFormComponent } from './app/components/event-type/event-type-form/event-type-form.component'
import { EventListComponent } from './app/components/event/event-list/event-list.component'
import { EventFormComponent } from './app/components/event/event-form/event-form.component'
import { CategoryListComponent } from './app/components/category/category-list/category-list.component'
import { CategoryFormComponent } from './app/components/category/category-form/category-form.component'
import { OrganizerListComponent } from './app/components/organizer/organizer-list/organizer-list.component'
import { OrganizerFormComponent } from './app/components/organizer/organizer-form/organizer-form.component'
import { VacancyListComponent } from './app/components/vacancy/vacancy-list/vacancy-list.component'
import { VacancyFormComponent } from './app/components/vacancy/vacancy-form/vacancy-form.component'
import { VacancyTypeListComponent } from './app/components/vacancy-type/vacancy-type-list/vacancy-type-list.component'
import { VacancyTypeFormComponent } from './app/components/vacancy-type/vacancy-type-form/vacancy-type-form.component'
import { ScholarshipListComponent } from './app/components/scholarship/scholarship-list/scholarship-list.component'
import { ScholarshipFormComponent } from './app/components/scholarship/scholarship-form/scholarship-form.component'

angular.module('app.components')
  .component('tablesSimple', TablesSimpleComponent)
  .component('uiModal', UiModalComponent)
  .component('uiTimeline', UiTimelineComponent)
  .component('uiButtons', UiButtonsComponent)
  .component('uiIcons', UiIconsComponent)
  .component('uiGeneral', UiGeneralComponent)
  .component('formsGeneral', FormsGeneralComponent)
  .component('chartsChartjs', ChartsChartjsComponent)
  .component('widgets', WidgetsComponent)
  .component('userProfile', UserProfileComponent)
  .component('userVerification', UserVerificationComponent)
  .component('comingSoon', ComingSoonComponent)
  .component('userEdit', UserEditComponent)
  .component('userPermissionsEdit', UserPermissionsEditComponent)
  .component('userPermissionsAdd', UserPermissionsAddComponent)
  .component('userPermissions', UserPermissionsComponent)
  .component('userRolesEdit', UserRolesEditComponent)
  .component('userRolesAdd', UserRolesAddComponent)
  .component('userRoles', UserRolesComponent)
  .component('userLists', UserListsComponent)
  .component('dashboard', DashboardComponent)
  .component('navSidebar', NavSidebarComponent)
  .component('navHeader', NavHeaderComponent)
  .component('loginLoader', LoginLoaderComponent)
  .component('resetPassword', ResetPasswordComponent)
  .component('forgotPassword', ForgotPasswordComponent)
  .component('loginForm', LoginFormComponent)
  .component('registerForm', RegisterFormComponent)
  .component('eventTypeList', EventTypeListComponent)
  .component('eventTypeForm', EventTypeFormComponent)
  .component('eventList', EventListComponent)
  .component('eventForm', EventFormComponent)
  .component('categoryList', CategoryListComponent)
  .component('categoryForm', CategoryFormComponent)
  .component('organizerList', OrganizerListComponent)
  .component('organizerForm', OrganizerFormComponent)
  .component('vacancyList', VacancyListComponent)
  .component('vacancyForm', VacancyFormComponent)
  .component('vacancyTypeList', VacancyTypeListComponent)
  .component('vacancyTypeForm', VacancyTypeFormComponent)
  .component('scholarshipList', ScholarshipListComponent)
  .component('scholarshipForm', ScholarshipFormComponent)