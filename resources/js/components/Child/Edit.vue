<template>
  <div>
    <div>
      <div>名字</div>
      <el-input v-model="child.lastName"></el-input>
    </div>
    <div>
      <div>名前</div>
      <el-input v-model="child.firstName"></el-input>
    </div>
    <div>
      <div>性別</div>
      <el-radio-group v-model="child.sex">
        <el-radio label='1'>男</el-radio>
        <el-radio label='2'>女</el-radio>
      </el-radio-group>
    </div>
    <div>
      <div>生まれた日</div>
      <el-date-picker v-model="child.birthday" type="datetime"></el-date-picker>
    </div>
    <div>
      <div>母親の名字</div>
      <el-input v-model="child.motherLastName"></el-input>
    </div>
    <div>
      <div>母親の名前</div>
      <el-input v-model="child.motherFirstName"></el-input>
    </div>
    <div>
      <div>父親の名字</div>
      <el-input v-model="child.fatherLastName"></el-input>
    </div>
    <div>
      <div>父親の名前</div>
      <el-input v-model="child.fatherFirstName"></el-input>
    </div>
    <div>
      <div>生まれたときの身長</div>
      <el-input-number :controls="false" v-model="child.height" :precision="2"></el-input-number>
    </div>
    <div>
      <div>生まれたときの体重</div>
      <el-input-number :controls="false" v-model="child.weight" :precision="2"></el-input-number>
    </div>
    <div>
      <div>生まれたときの胸囲</div>
      <el-input-number :controls="false" v-model="child.chestSize" :precision="2"></el-input-number>
    </div>
    <div>
      <div>生まれたときの頭囲</div>
      <el-input-number :controls="false" v-model="child.headSize" :precision="2"></el-input-number>
    </div>
    <div>
      <div>生まれたときの病院</div>
      <el-input v-model="child.hospital"></el-input>
    </div>
    <div>
      <div>生まれたときの天気</div>
      <el-input v-model="child.weather"></el-input>
    </div>
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
    };
  },
  methods: {
    fetchChild() {
      this.$http.post("/api/child_one", {
          id: this.$route.params.id,
      }).then(res => {
        this.child = res.data;
      });
    },
    saveChild() {
      this.$http.post("/api/child_update", {
          child: this.child,
      }).then(res => {
        this.sendId();
      })
    },
    cancelChild() {
      this.sendId();
    },
    sendId() {
      var id = this.child.id;
      this.$router.push({path: `/child/${id}`});
    },
  }
};
</script>