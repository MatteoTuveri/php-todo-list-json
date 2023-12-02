const { createApp } = Vue;
createApp({
    data() {
        return {
            serverUrl: 'server.php',
            list: [],
            newTask: { text:'',active:true}
        };
    },
    methods: {
        readList() {
            axios.get(this.serverUrl).then((res) => {
                this.list = res.data;
            })
        },
        postItem() {
            const data = new FormData();
            data.append("newTask", JSON.stringify(this.newTask));
            axios.post(this.serverUrl, data, { header: { "Content-Type": "multipart/form-data" } }).then((res) => {
                this.list = res.data
            })
        },
        signTask(index){
            const data = new FormData();
            data.append("index", index);
            axios.post(this.serverUrl, data, { header: { "Content-Type": "multipart/form-data" } }).then((res) => {
                this.list = res.data
            })
        }
    },
    mounted() {
        this.readList();
    }
}).mount("#app");