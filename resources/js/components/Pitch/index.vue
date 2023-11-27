<template>
    <div class="container-fluid">
        Pitch Page
        <div>
            Session Key: {{ sessionKey }}
            <pre>{{ authUser }}</pre>
        </div>
    </div>
</template>

<script>
export default {
    name: "Pitch",
    props: {
        sessionKey: String,
        authUser: Object
    },
    data() {
        return {};
    }
};
</script>
