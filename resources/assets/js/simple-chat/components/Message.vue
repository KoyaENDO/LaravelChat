<template>
    <div class="message">
        <v-ons-bottom-toolbar>
            <v-ons-row>
                <v-ons-col width="80%">
                    <input
                            type="text"
                            :value="inputText"
                            @input="e => handleInput(e)"
                            @keyup.enter="send"
                            placeholder="メッセージを入力"
                            id="message-input"
                            class="col-form"
                    >
                </v-ons-col>
                <v-ons-col width="20%">
                    <v-ons-button
                            type="button"
                            @click="send"
                            class="pull-right col-form">
                        送信
                    </v-ons-button>
                </v-ons-col>
            </v-ons-row>
        </v-ons-bottom-toolbar>
    </div>
</template>

<script>
    import store from "../store";

    export default {
        props: {
            userId: Number,
            inputText: String
        },
        methods: {
            handleInput(e) {
                store.setInputText(e.target.value);
            },
            send() {
                const text = this.inputText.trim().replace(/\n$/, "");
                if (text) {
                    store.clearInputText();
                    store.appendMessage({
                        userId: this.userId,
                        message: text
                    });
                    store.postMessage(text);
                }
            }
        }
    };
</script>

<style>
    #message-input {
        width: 100%;
        font-size: 1em;
        border-radius: 20px;
        box-shadow: none;
        line-height: 32px;
    }
    .col-form {
        margin-top: 4px;
    }
</style>