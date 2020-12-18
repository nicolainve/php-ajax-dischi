import Vue from 'vue';
import axios from 'axios';

const app = new Vue ({
    el: '#app',
    data: {
        cds: []
    },
    created() {
        axios.get(window.location.href + 'script/script-json.php')
            .then(response => {
                this.cds = response.data;
            })
            .catch(error => {
                console.log(error);
            });
    }
});