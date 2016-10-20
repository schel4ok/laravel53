
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

// js files can be imported without specifying extension
// libraries
require('./bootstrap');

// my components
require('./components/menutoggle');
require('./components/slider');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('callback', require('./components/callback.vue'));

// https://gist.github.com/TahaSh/99df18b049cbf2402c02
// http://taha-sh.com/blog/setting-up-ajax-validation-with-laravel-vuejs-in-no-time
const app = new Vue({
    el: 'body',

    data: {
        mymessage: "hello world!",
        formInputs: {},
        formErrors: {},

		// search
	    furnitura: [],
	    loading: false,
	    error: false,
    	query: ''

    },

    methods: {
		submitForm: function(e) {
		  var form = e.srcElement;   //  var form = e.target;
		  var action = form.action;
		  var csrfToken = form.querySelector('input[name="_token"]').value;

		  this.$http.post(action, this.formInputs, {
		    headers: {
		        'X-CSRF-TOKEN': csrfToken
		    }
		  })
		  .then(function() {
		        form.submit();
		  })
		  .catch(function (data, status, request) {
		    var errors = data.data;
		    this.formErrors = errors;
		  });
		},

	    search: function() {
	        // Clear the error message.
	        this.error = '';
	        // Empty the furnitura array so we can fill it with the new furnitura.
	        this.furnitura = [];
	        // Set the loading property to true, this will display the "Searching..." button.
	        this.loading = true;

	        // Making a get request to our API and passing the query to it.
	        this.$http.get('/api/search?q=' + this.query).then((response) => {
	            // If there was an error set the error message, if not fill the furnitura array.
	            response.body.error ? this.error = response.body.error : this.furnitura = response.body;
	            // The request is finished, change the loading to false again.
	            this.loading = false;
	            // Clear the query.
	            this.query = '';
	        });
	    }



    },

});