import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { createHead } from '@vueuse/head';

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faQuoteRight } from '@fortawesome/free-solid-svg-icons'
import { faXTwitter, faInstagram, faFacebookF } from '@fortawesome/free-brands-svg-icons'; 

library.add(faQuoteRight, faXTwitter, faInstagram, faFacebookF)

const head = createHead();
const appUrlDev = import.meta.env.VITE_APP_URL_DEV;

console.log
createInertiaApp({
  resolve: name => import(`./Pages/${name}.vue`), // Add .vue extension here
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) });
    app.config.globalProperties.$appUrlDev = appUrlDev;
    app.use(plugin)
       .use(head)
       .component('FontAwesomeIcon', FontAwesomeIcon)
       .mount(el);
  },
});
