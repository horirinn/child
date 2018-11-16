<template>
    <div>
      <div>
        {{child.lastName}}
      </div>
      <div>
        {{child.firstName}}
      </div>
      <div>
        {{child.sex}}
      </div>
      <div>
        {{child.birthday}}
      </div>
      <div>
        {{child.motherLastName}}
      </div>
      <div>
        {{child.motherFirstName}}
      </div>
      <div>
        {{child.fatherLastName}}
      </div>
      <div>
        {{child.fatherFirstName}}
      </div>
      <div>
        {{child.height}}
      </div>
      <div>
        {{child.weight}}
      </div>
      <div>
        {{child.chestSize}}
      </div>
      <div>
        {{child.headSize}}
      </div>
      <div>
        {{child.hospital}}
      </div>
      <div>
        {{child.weather}}
      </div>
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
      this.$http.get("/api/child_one", {
        params: {
          id: this.$route.params.id,
        }
      }).then(res => {
        this.child = res.data;
      });
    }
  }
};
</script>