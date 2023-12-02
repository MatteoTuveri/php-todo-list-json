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
            let value = null
            const data = new FormData();
            if(this.list[index].active){
                value = false
            }else{
                value =true
            }
            data.append("index&value", JSON.stringify([index,value]));
            axios.post(this.serverUrl, data, { header: { "Content-Type": "multipart/form-data" } }).then((res) => {
                this.list = res.data
            })
        }
    },
    mounted() {
        this.readList();
    }
}).mount("#app");