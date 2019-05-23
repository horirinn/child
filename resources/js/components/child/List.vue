<template>
  <el-table
    :data="children"
    style="width: 100%">
      <el-table-column
        prop="lastName"
        label="姓"
        width="180">
      </el-table-column>
      <el-table-column
        prop="firstName"
        label="名"
        width="180">
      </el-table-column>
      <el-table-column
        prop="sex"
        label="性別"
        width="180">
      </el-table-column>
      <el-table-column
        label="選択"
        width="180">
        <template slot-scope="scope">
          <el-button @click="handleClick(scope.$index, children)" type="text" size="small">Detail</el-button>
        </template>
      </el-table-column>
  </el-table>
</template>

<script>
export default {
  created() {
    this.fetchChildren();
  },
  data() {
    return {
      children: []
    };
  },
  methods: {
    fetchChildren() {
      this.$http.post("/api/child_all").then(res => {
        this.children = res.data;
      });
    },
    handleClick(index, rows) {
      var id = rows[index].id;
      this.$router.push({path: `/child/${id}`});
    }
  }
};
</script>