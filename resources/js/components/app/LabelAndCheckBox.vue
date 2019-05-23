<template>
    <back-ground>
        <div class="label">{{label}}</div>
        <el-radio-group class="radio_group" v-model="innerValue">
            <template v-for="item in list">
                <el-radio :label="item.value" :key="item.value">{{item.label}}</el-radio>
            </template>
        </el-radio-group>
    </back-ground>
</template>

<style lang="scss" scoped>
.label {
    margin: 0 10px;
    font-size: 15px;
    color: #010079;
    text-shadow: 0 0 5px white;
}
.radio_group {
    margin: 0 20px;
    font-size: 20px;
}
</style>


<script>
export default {
    props: {
        label: {},
        list: {},
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
