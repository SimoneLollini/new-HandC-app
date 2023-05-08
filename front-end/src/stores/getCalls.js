import { reactive } from "vue";
import axios from "axios";
export const getCalls = reactive({
    URL: 'http://localhost:8000/api',
    blocks: null,
    block: null,
    weeks: null,
    week: null,
    days: null,
    day: null,
    exercises: null,
    exercise: null,
    getBlock(url) {
        console.log("chiamata block");
        console.log(url);
        axios
            .get(url)
            .then(response => {
                this.block = response.data.block
                this.weeks = response.data.weeks

                console.log(this.block);
                console.log(this.weeks);

            })
            .catch(error => {
                console.log(error)
                console.log('errore');
                this.errored = true
            })
            .finally(() => this.loading = false)
    },
    getBlocks(url) {
        console.log("chiamata blocks");
        console.log(url);
        axios
            .get(url)
            .then(response => {
                this.blocks = response.data.blocks
                console.log(this.blocks);
            })
            .catch(error => {
                console.log(error)
                console.log('errore');
                this.errored = true
            })
            .finally(() => this.loading = false)
    },
    getWeek(url) {
        console.log("chiamata week");
        console.log(url);
        axios
            .get(url)
            .then(response => {
                this.week = response.data.week
                this.days = response.data.days

                console.log(this.week);
                console.log(this.days);

            })
            .catch(error => {
                console.log(error)
                console.log('errore');
                this.errored = true
            })
            .finally(() => this.loading = false)
    }
    ,
    getDay(url) {
        console.log("chiamata day");
        console.log(url);
        axios
            .get(url)
            .then(response => {
                this.day = response.data.day
                this.exercises = response.data.exercises

                console.log(this.day);
                console.log(this.exercises);

            })
            .catch(error => {
                console.log(error)
                console.log('errore');
                this.errored = true
            })
            .finally(() => this.loading = false)
    }
});