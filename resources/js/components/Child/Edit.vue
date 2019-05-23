<template>
    <div>
        <label-and-value label="名字" v-model="child.lastName"/>
        <label-and-value label="名前" v-model="child.firstName"/>
        <label-and-check-box label="性別" v-model="child.sex" :list="sexes"/>
        <label-and-date label="生まれた日" v-model="child.birthday"/>
        <label-and-value label="母親の名字" v-model="child.motherLastName"/>
        <label-and-value label="母親の名前" v-model="child.motherFirstName"/>
        <label-and-value label="父親の名字" v-model="child.fatherLastName"/>
        <label-and-value label="父親の名前" v-model="child.fatherFirstName"/>
        <label-and-value label="生まれたときの身長" v-model="child.height" type="number" :step="0.01"/>
        <label-and-value label="生まれたときの体重" v-model="child.weight" type="number" :step="0.01"/>
        <label-and-value label="生まれたときの胸囲" v-model="child.chestSize" type="number" :step="0.01"/>
        <label-and-value label="生まれたときの頭囲" v-model="child.headSize" type="number" :step="0.01"/>
        <label-and-value label="生まれたときの病院" v-model="child.hospital"/>
        <label-and-value label="生まれたときの天気" v-model="child.weather"/>
        <el-button type="primary" icon="el-icon-check" @click="saveChild()"></el-button>
        <el-button type="primary" icon="el-icon-close" @click="cancelChild()"></el-button>
    </div>
</template>

<script>
export default {
    created() {
        this.fetchChild();
    },
    data() {
        return {
            child: [],
            sexes: [
                {
                    label: "男",
                    value: 1
                },
                {
                    label: "女",
                    value: 2
                }
            ]
        };
    },
    methods: {
        fetchChild() {
            this.$http
                .post("/api/child_one", {
                    id: this.$route.params.id
                })
                .then(res => {
                    this.child = res.data;
                });
        },
        saveChild() {
            this.$http
                .post("/api/child_update", {
                    child: this.child
                })
                .then(res => {
                    this.sendId();
                });
        },
        cancelChild() {
            this.sendId();
        },
        sendId() {
            var id = this.child.id;
            this.$router.push({ path: `/child/${id}` });
        }
    }
};
</script>