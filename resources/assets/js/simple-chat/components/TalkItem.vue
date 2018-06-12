<template>
    <div class="talk-item">
        <span class="talk-name">{{ name }}:</span>
        <span class="talk-text">
            {{talk.message}}
        </span>
    </div>
</template>

<script>
    export default {
        props: {
            talk: Object,
            userId: Number
        },
        computed: {
            name() {
                if (this.talk.name && this.talk.userId !== this.userId) {
                    return this.talk.name;
                } else {
                    return "You";
                }
            }
        }
    };
</script>
