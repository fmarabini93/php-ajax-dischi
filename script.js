var app = new Vue(
    {
        el: "#app",
        data: {
            discs: []
        },
        created() {
            axios.get('http://localhost/boolean/php-ajax-dischi/database.php').then((res) => this.discs = res.data);
        }
    }
);