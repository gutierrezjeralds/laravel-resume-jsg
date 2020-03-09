/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.file-upload-input').on('change', function(){
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.file-upload-preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
})

$('#fileUploadForm').submit(function(e) {
    e.preventDefault();

    var formData = new FormData($("#fileUploadForm")[0]);
    console.log(formData)
 
    $.ajax({
        type:'POST',
        url: "http://localhost:8000/api/set-file-upload/project",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
            this.reset();
            console.log(data)
        },
        error: function(data){
            console.log(data);
        }
    });
});