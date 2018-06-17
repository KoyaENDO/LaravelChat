<template>
    <div class="talk-item">
        <div :class="['chat-talk', isMe? 'chat-right' : 'chat-left']">
            <span class="talk-name">{{ name }}</span>
            <div class="chat-position-clear"></div>
            <span class="message-box">
                <span class="message-text">
                    {{talk.message}}
                </span>
            </span>
        </div>
        <div class="chat-position-clear"></div>
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
            },
            isMe() {
                return this.userId === this.talk.userId;
            }
        }
    };
</script>

<style>
    .chat-talk {
        margin: 0px;
        padding: 0 14px;
        font-size: 16px;
        word-wrap: break-word;
        white-space: normal;
    }

    .chat-left {
        float: left;
        line-height: 1.3em;
    }

    .chat-right {
        float: right;
        line-height: 1.3em;
    }

    .chat-position-clear {
        clear: both;
    }

    .talk-name {
        margin-top: 20px;
        font-size: 0.5em;
    }

    .chat-left .talk-name {
        float: left;
    }

    .chat-right .talk-name {
        float: right;
    }

    .message-box {
        max-width: 100%;
    }

    .message-text {
        padding: 20px;
    }

    .chat-left .message-box {
        color: #333;
        background: #fff;
        border: 2px solid #0076ff;
        border-radius: 30px 30px 30px 0px;
        margin-right: 50px;
    }

    .chat-right .message-box {
        color: #fff;
        background: #0076ff;
        border: 2px solid #0076ff;
        border-radius: 30px 30px 0px 30px;
        margin-left: 50px;
    }
</style>