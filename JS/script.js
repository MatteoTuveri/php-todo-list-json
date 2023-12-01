const { createApp } = Vue;
createApp({
    data() {
        return {
            serverUrl: 'server.php',
            list: [],
            newTask: ''
        };
    },
    methods: {
        readList() {
            axios.get(this.serverUrl).then((res) => {
                console.log(res)
                this.list = res.data;
            })
        }
    },
    mounted() {
        this.readList();
    }
}).mount("#app");