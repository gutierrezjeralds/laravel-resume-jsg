<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('js/app.js')}}" ></script>
<script>
    var token = $('meta[name="csrf-token"]').attr('content');
    document.cookie = "jsg-xsrf-token=" + token;
</script>