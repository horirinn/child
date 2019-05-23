<template>
    <back-ground>
        <div class="label">{{title}}</div>
        <div class="content">{{content}}</div>
    </back-ground>
</template>

<style lang="scss" scoped>
.label {
    margin: 0 10px;
    font-size: 15px;
    color: #010079;
    text-shadow: 0 0 5px white;
}
.content {
    margin: 0 20px;
    font-size: 20px;
}
</style>

<script>
export default {
    props: {
        title: {},
        content: {}
    }
};
</script>
