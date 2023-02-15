<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title>BgDash</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vuetify@3.1.5/dist/vuetify.min.css" />
    </head>
    <body>
        <div id="app">
            <v-app id="inspire">
                <v-navigation-drawer
                    model-value
                    class="pt-4"
                    rail
                >
                    <v-avatar
                        v-for="n in 6"
                        :key="n"
                        :color="`grey-${n === 1 ? 'darken' : 'lighten'}-1`"
                        :size="n === 1 ? 36 : 20"
                        class="d-block text-center mx-auto mb-9"
                    ></v-avatar>
                </v-navigation-drawer>

                <v-main>
                    <v-container fluid>
                        <v-row>
                            <v-col cols="12" md="6">
                                <v-card>
                                    <v-card-title>
                                        Commands
                                    </v-card-title>

                                    <v-list lines="two">
                                        <v-list-item
                                            v-for="command in commands"
                                            :key="command.key"
                                        >
                                            <template v-slot:title>
                                                <code>
                                                    @{{ command.command }}
                                                </code>
                                            </template>

                                            <template v-slot:subtitle>
                                                <code>
                                                    Runtime: @{{ command.runtime }}
                                                </code>
                                            </template>

                                            <template v-slot:prepend>
                                                <v-avatar :color="command.failed ? 'error' : 'success'">
                                                    <v-icon color="white">
                                                        @{{ command.failed ? 'mdi-information' : 'mdi-check' }}
                                                    </v-icon>
                                                </v-avatar>
                                            </template>

                                            <template v-slot:append>
                                                <span class="text-caption">@{{ command.finishedAt }}</span>
                                                <v-btn
                                                    class="ml-3"
                                                    color="grey-lighten-1"
                                                    icon="mdi-eye"
                                                    variant="text"
                                                ></v-btn>
                                            </template>
                                        </v-list-item>
                                    </v-list>
                                </v-card>
                            </v-col>

                            <v-col cols="12" md="6">
                                <v-card>
                                    <v-card-title>
                                        Jobs
                                    </v-card-title>

                                    <v-list lines="two">
                                        <v-list-item
                                            v-for="job in jobs"
                                            :key="job.key"
                                        >
                                            <template v-slot:title>
                                                <code>
                                                    @{{ job.job }}
                                                </code>
                                            </template>

                                            <template v-slot:subtitle>
                                                <code>
                                                    Runtime: @{{ job.runtime }}
                                                </code>
                                            </template>

                                            <template v-slot:prepend>
                                                <v-avatar :color="job.failed ? 'error' : 'success'">
                                                    <v-icon color="white">
                                                        @{{ job.failed ? 'mdi-information' : 'mdi-check' }}
                                                    </v-icon>
                                                </v-avatar>
                                            </template>

                                            <template v-slot:append>
                                                <span class="text-caption">@{{ job.finishedAt }}</span>
                                                <v-btn
                                                    class="ml-3"
                                                    color="grey-lighten-1"
                                                    icon="mdi-eye"
                                                    variant="text"
                                                ></v-btn>
                                            </template>
                                        </v-list-item>
                                    </v-list>
                                </v-card>
                            </v-col>
                        </v-row>
                    </v-container>
                </v-main>
            </v-app>
        </div>

        <script type="text/javascript" src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vuetify@3.1.5/dist/vuetify.min.js"></script>

        <script>
            const { createApp } = Vue;
            const { createVuetify } = Vuetify;

            const vuetify = createVuetify({
                theme: {
                    defaultTheme: 'dark'
                }
            });

            createApp({
                data() {
                    return {
                        message: 'Hello Vue!',

                        commands: [
                            {
                                key: 0,
                                command: 'platform:invoice-worker platform',
                                finishedAt: '35 seconds ago',
                                runtime: '23 minutes',
                                failed: false,
                            },
                            {
                                key: 1,
                                command: 'platform:employee-worker platform',
                                finishedAt: '18 minutes ago',
                                runtime: '43 seconds',
                                failed: true,
                            },
                            {
                                key: 2,
                                command: 'platform:payslip-worker platform',
                                finishedAt: '5 hours ago',
                                runtime: '5 minutes',
                                failed: false,
                            },
                        ],

                        jobs: [
                            {
                                key: 0,
                                job: 'TimeRegistrationPeriodLock',
                                finishedAt: '35 seconds ago',
                                runtime: '23 minutes',
                                failed: false,
                            },
                            {
                                key: 1,
                                job: 'MakeSearchable',
                                finishedAt: '18 minutes ago',
                                runtime: '43 seconds',
                                failed: false,
                            },
                            {
                                key: 2,
                                job: 'InvoiceCreated',
                                finishedAt: '5 hours ago',
                                runtime: '5 minutes',
                                failed: true,
                            },
                        ],
                    }
                }
            }).use(vuetify).mount('#app');
        </script>
    </body>
</html>
