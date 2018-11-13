<template>
    <div>
        <div v-for="child in children" :key="child.id">
            <p>{{ child.lastName }}</p>
            <p>{{ child.firstName }}</p>
            <p>{{ child.sex }}</p>
            <p>{{ child.motherLastName }}</p>
            <p>{{ child.motherFirstName }}</p>
            <p>{{ child.fatherLastName }}</p>
            <p>{{ child.fatherFirstName }}</p>
            <p>{{ child.height }}</p>
            <p>{{ child.weight }}</p>
            <p>{{ child.chestSize }}</p>
            <p>{{ child.headSize }}</p>
            <p>{{ child.hospital }}</p>
            <p>{{ child.weather }}</p>
        </div>
    </div>
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
      this.$http.get("/api/child").then(res => {
        this.children = res.data;
      });
    }
  }
};
</script>