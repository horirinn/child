<template>  
    <div>      
        <div>
            <div>名字</div>
            <div>{{child.lastName}}</div>
        </div>
        <div>
            <div>名前</div>
            <div>{{child.firstName}}</div>
        </div>
        <div>
            <div>性別</div>
            <div>{{child.sex}}</div>
        </div>
        <div>
            <div>生まれた日</div>
            <div>{{child.birthday}}</div>
        </div>
        <div>
            <div>母親の名字</div>
            <div>{{child.motherLastName}}</div>
        </div>
        <div>
            <div>母親の名前</div>
            <div>{{child.motherFirstName}}</div>
        </div>
        <div>
            <div>父親の名字</div>
            <div>{{child.fatherLastName}}</div>
        </div>
        <div>
            <div>父親の名前</div>
            <div>{{child.fatherFirstName}}</div>
        </div>
        <div>
            <div>生まれたときの身長</div>
            <div>{{child.height}}</div>
        </div>
        <div>
            <div>生まれたときの体重</div>
            <div>{{child.weight}}</div>
        </div>
        <div>
            <div>生まれたときの胸囲</div>
            <div>{{child.chestSize}}</div>
        </div>
        <div>
            <div>生まれたときの頭囲</div>
            <div>{{child.headSize}}</div>
        </div>
        <div>
            <div>生まれたときの病院</div>
            <div>{{child.hospital}}</div>
        </div>
        <div>
            <div>生まれたときの天気</div>
            <div>{{child.weather}}</div>
        </div>
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
    editChild() {
      var id = this.child.id;
      this.$router.push({path: `/child/${id}/edit`});
    },
  }
};
</script>