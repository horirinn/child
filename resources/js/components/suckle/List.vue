<template>  
    <el-table
        :data="suckles"
        style="width: 100%">
        <el-table-column
            prop="startTime"
            label="授乳開始時間"
            width="180">
        </el-table-column>
        <el-table-column
            prop="endTime"
            label="授乳終了時間"
            width="180">
        </el-table-column>
        <el-table-column
            prop="amount"
            label="授乳量"
            width="180">
        </el-table-column>
    </el-table>
</template>

<script>
export default {
  created() {
    this.fetchSuckles();
  },
  data() {
    return {
      suckles: [],
    };
  },
  methods: {
    fetchSuckles() {
      this.$http.post("/api/suckle_all", {
          childId: this.$route.params.id,
      }).then(res => {
        this.suckles = res.data;
      });
    },
  }
};
</script>