<template>
    <back-ground>
        <label :for="uuid" class="label">{{label}}</label>
        <input
            :id="uuid"
            class="text_input"
            :type="innerType"
            ref="textRef"
            :placeholder="placeHolder"
            v-model="innerValue"
            :disabled="disabled"
            :step="step"
        >
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
.text_input {
    margin: 0 20px;
    font-size: 20px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: none;
    border: none;
    border-radius: 0;
    background: none;
}
</style>

<script>
export default {
    props: {
        label: {
            type: String
        },
        value: {},
        type: {},
        placeHolder: {},
        disabled: {
            type: Boolean,
            default: false
        },
        vFocus: false,
        step: {}
    },
    data() {
        return {
            uuid: this.$uuid.v4()
        };
    },
    mounted() {
        if (this.vFocus) {
            this.$refs.textRef.focus();
        }
    },
    computed: {
        innerValue: {
            get() {
                return this.value;
            },
            set(newValue) {
                this.$emit("input", newValue);
            }
        },
        innerType() {
            if (this.type) {
                return this.type;
            } else {
                return "text";
            }
        }
    }
};
</script>
