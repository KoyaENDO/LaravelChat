<template>
    <v-ons-page>
        <v-ons-toolbar>
            <div class="center">SimpleChat</div>
        </v-ons-toolbar>

        <v-ons-tabbar
                swipeable
                tab-border
                position="top"
                :tabs="tabs"
        />
    </v-ons-page>
</template>
<script>
    import Top from "./Top";
    import Chat from "./Chat";
    export default {
        components: {Top, Chat},
        data() {
            return {
                tabs: [
                    {
                        page: Top,
                        label: 'Top'
                    },
                    {
                        page: Chat,
                        label: 'Chat'
                    }
                ]
            };
        }
    };
</script>