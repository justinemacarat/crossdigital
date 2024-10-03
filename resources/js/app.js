import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faQuoteRight } from '@fortawesome/free-solid-svg-icons'
import { faXTwitter, faInstagram, faFacebookF } from '@fortawesome/free-brands-svg-icons'; 

library.add(faQuoteRight, faXTwitter, faInstagram, faFacebookF)

createInertiaApp({
  resolve: name => import(`./Pages/${name}.vue`), // Add .vue extension here
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component('FontAwesomeIcon', FontAwesomeIcon) 
      .mount(el);
  },
});
