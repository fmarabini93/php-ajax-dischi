var app = new Vue(
    {
        el: "#app",
        data: {
            discs: []
        },
        created() {
            axios.get('http://localhost/boolean/php-ajax-dischi/server.php').then((res) => console.log(res.data));
        }
    }
);