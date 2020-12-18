import Vue from 'vue';
import axios from 'axios';

const app = new Vue ({
    el: '#app',
    data: {
        cds: [],
        filters: [],
        actualAuthor: ''
    },
    created() {
        axios.get(window.location.href + 'script/script-json.php')
        .then(response => {
            this.cds = response.data;
            this.cds.forEach(element => {
                if (!this.filters.includes(element['author'])) {
                    this.filters.push(element['author'])
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
                    author: this.actualAuthor
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