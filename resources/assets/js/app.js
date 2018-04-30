
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./inspinia');
require('print-js');

window.Vue = require('vue');

window.events = new Vue();
window.flash = function (message, level = 'success', timeOut = 5000) {
	window.events.$emit('flash', { message, level, timeOut});
};

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 /**VUEX */
 import store from './store/index';

import VueFormWizard from 'vue-form-wizard';
import 'vue-form-wizard/dist/vue-form-wizard.min.css';
Vue.use(VueFormWizard);

import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueSweetalert2);

// import VeeValidate from 'vee-validate';
// Vue.use(VeeValidate);


import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

import vSelect from 'vue-select'
Vue.component('v-select', vSelect)

Vue.component('v-select', vSelect)

import VueCurrencyFilter from 'vue-currency-filter';

Vue.use(VueCurrencyFilter,
{
	symbol: 'Bs',
	thousandsSeparator: ',',
	fractionCount: 2,
	fractionSeparator: '.',
	symbolPosition: 'front',
	symbolSpacing: true
});

import ElementUI from "element-ui";

Vue.use(ElementUI);
Vue.filter('percentage', function (value) {
	return `${value.toFixed(4)} %`;
});


Vue.component('flash', require('./components/Flash.vue'));

//setting files
Vue.component('ret-fun-procedure', require('./components/setting/RetFunProcedure.vue'));

Vue.component('affiliate-index', require('./components/affiliate/Index.vue'));
Vue.component('affiliate-show', require('./components/affiliate/ShowAffiliate.vue'));
Vue.component('affiliate-police', require('./components/affiliate/Police.vue'));
Vue.component('spouse-show', require('./components/spouse/ShowSpouse.vue'));
//retirement Fund

Vue.component('ret-fun-index', require('./components/ret_fun/Index.vue'));
Vue.component('ret-fun-form', require('./components/ret_fun/Form.vue'));
Vue.component('ret-fun-create-info', require('./components/ret_fun/CreateInfo.vue'));
Vue.component('ret-fun-step1-requirements', require('./components/ret_fun/Step1Requirements.vue'));
Vue.component('ret-fun-step2-applicant', require('./components/ret_fun/Step2Applicant.vue'));
Vue.component('ret-fun-step3-beneficiaries', require('./components/ret_fun/Step3Beneficiaries.vue'));
Vue.component('ret-fun-beneficiary-list', require('./components/ret_fun/BeneficiaryList.vue'));
Vue.component('ret-fun-beneficiary', require('./components/ret_fun/Beneficiary.vue'));
Vue.component('ret-fun-info', require('./components/ret_fun/Info.vue'));
Vue.component('ret-fun-beneficiaries-show', require('./components/ret_fun/ShowBeneficiaries.vue'));
Vue.component('ret-fun-qualification', require('./components/ret_fun/Qualification.vue'));
Vue.component('ret-fun-date-interval', require('./components/ret_fun/DateInterval.vue'));
Vue.component('ret-fun-qualification-group', require('./components/ret_fun/QualificationGroup.vue'));


// Quota Aid Mortuaries
Vue.component('quota-aid-mortuary-index', require('./components/quota_aid/Index.vue'));

//quota_aid
Vue.component('quota-aid-step1-requirements', require('./components/quota_aid/Step1Requirements.vue'));
Vue.component('quota-aid-step2-applicant', require('./components/quota_aid/Step2Applicant.vue'));
Vue.component('quota-aid-step3-beneficiaries', require('./components/quota_aid/Step3Beneficiaries.vue'));

//user
Vue.component('show-password', require('./components/user/ShowPassword.vue'));
//permission
Vue.component('nom-module', require('./components/permission/NomModule.vue'));

//contributions
Vue.component('contribution-create', require('./components/contribution/CreateContribution.vue'));
Vue.component('contribution-commitment', require('./components/contribution/Commitment.vue'));
Vue.component('contribution-select', require('./components/contribution/SelectContributions.vue'));

//aid-contributions
Vue.component('aid-contribution-create', require('./components/contribution/CreateAidContribution.vue'));
Vue.component('contribution-aid-commitment',require('./components/contribution/AidCommitment.vue'));
const app = new Vue({
	el: '#app',
	store
    
});