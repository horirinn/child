<template>
    <back-ground>
        <div class="label">{{label}}</div>
        <el-date-picker class="input_area" v-model="innerValue" type="datetime"></el-date-picker>
    </back-ground>
</template>

<style lang="scss" scoped>
.label {
    margin: 0 10px;
    font-size: 15px;
    color: #010079;
    text-shadow: 0 0 5px white;
    display: block;
}

.input_area {
    margin: 0 20px;
}
</style>


<script>
export default {
    props: {
        label: {},
        value: {}
    },
    computed: {
        innerValue: {
            get() {
                return this.value;
            },
            set(newValue) {
                this.$emit("input", newValue);
            }
        }
    }
};
</script>
