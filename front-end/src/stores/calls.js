import { reactive } from "vue";
import axios from "axios";
export const calls = reactive({
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
        console.log("chiamata avviata");
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
        console.log("chiamata avviata");
        axios
            .get(url)
            .then(response => {
                this.blocks = response.data.blocks
                this.weeks = response.data.weeks

                console.log(this.blocks);
            })
            .catch(error => {
                console.log(error)
                console.log('errore');
                this.errored = true
            })
            .finally(() => this.loading = false)
    }

});