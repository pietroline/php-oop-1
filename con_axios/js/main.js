const app = new Vue({
    
    el: '#app',
    data: {
        movies: [],
    },

    mounted(){
        axios.get("http://localhost/php-oop-1/src/server.php")
            .then(response => {
                this.movies = response.data;
                console.log(this.movies);
            })
            .catch(function (error) {
                console.log(error);
            })     
            
        
    },
})