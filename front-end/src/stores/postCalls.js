import { reactive } from "vue";
import axios from "axios";
export const getCalls = reactive({
    URL: 'http://localhost:8000/api',
    newBlock: null,
    postBlock() {
        const data = this.newBlock;
        axios.post(URL, data)
            .then((response) => {
                console.log(response);
            })
            .catch(error => {
                console.log(error)
                console.log('errore');
                this.errored = true
            })
    }
});