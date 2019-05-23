<template>
    <div class="form-group row">
        <label :for="uuid" class="label">{{label}}</label>
        <input
            :id="uuid"
            class="form-control col-6"
            :type="innerType"
            ref="textRef"
            :placeholder="placeHolder"
            v-model="innerValue"
            :disabled="disabled"
        >
    </div>
</template>


<style lang="sass" scoped>
.label {
    
}
</style>

<script>
import AppLabel from "./atoms/AppLabel";

export default {
    components: {
        AppLabel
    },
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
        vFocus: false
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
