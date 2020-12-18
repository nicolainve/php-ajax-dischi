import Vue from 'vue';
import axios from 'axios';

const app = new Vue ({
    el: '#app',
    data: {
        cds: [],
        filters: [],
        actualGenre: ''
    },
    created() {
        axios.get(window.location.href + 'script/script-json.php')
        .then(response => {
            this.cds = response.data;
            this.cds.forEach(element => {
                if (!this.filters.includes(element['genre'])) {
                    this.filters.push(element['genre'])
                }
            })
        })
        .catch(error => {
            console.log(error);
        });
    },
    methods: {
        filter() {
            axios.get(window.location.href + 'script/script-json.php', {
                params: {
                    genre: this.actualGenre
                }
            })
        .then(response => {
            this.cds = response.data;
        })
        .catch(error => {
            console.log(error);
        });
        }
    }
});