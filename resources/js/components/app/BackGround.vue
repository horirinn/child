<template>
    <div class="title_and_detail">
        <slot></slot>
    </div>
</template>

<style lang="scss" scoped>
.title_and_detail {
    margin: 15px 0;
    border-left: solid 7px #010079;
    background: -webkit-repeating-linear-gradient(
        -45deg,
        #cce7ff,
        #cce7ff 3px,
        #e9f4ff 3px,
        #e9f4ff 7px
    );
    background: repeating-linear-gradient(
        -45deg,
        #cce7ff,
        #cce7ff 3px,
        #e9f4ff 3px,
        #e9f4ff 7px
    );
}
</style>

