<template>
    <div>
        <title-and-detail title="名字" :content="child.lastName"/>
        <title-and-detail title="名前" :content="child.firstName"/>
        <title-and-detail title="性別" :content="child.sex"/>
        <title-and-detail title="生まれた日" :content="child.birthday"/>
        <title-and-detail title="母親の名字" :content="child.motherLastName"/>
        <title-and-detail title="母親の名前" :content="child.motherFirstName"/>
        <title-and-detail title="父親の名字" :content="child.fatherLastName"/>
        <title-and-detail title="父親の名前" :content="child.fatherFirstName"/>
        <title-and-detail title="生まれたときの身長" :content="child.height"/>
        <title-and-detail title="生まれたときの体重" :content="child.weight"/>
        <title-and-detail title="生まれたときの胸囲" :content="child.chestSize"/>
        <title-and-detail title="生まれたときの頭囲" :content="child.headSize"/>
        <title-and-detail title="生まれたときの病院" :content="child.hospital"/>
        <title-and-detail title="生まれたときの天気" :content="child.weather"/>
        <el-button type="primary" icon="el-icon-edit" @click="editChild()"></el-button>
    </div>
</template>

<script>
export default {
    created() {
        this.fetchChild();
    },
    data() {
        return {
            child: []
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
        editChild() {
            var id = this.child.id;
            this.$router.push({ path: `/child/${id}/edit` });
        }
    }
};
</script>