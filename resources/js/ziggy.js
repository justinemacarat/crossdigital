const Ziggy = {"url":"http:\/\/crossdigital.test","port":null,"defaults":{},"routes":{"contact-us":{"uri":"contact-us","methods":["POST"]},"contact-message.store":{"uri":"contact-message\/store","methods":["POST"]},"service.page":{"uri":"services","methods":["GET","HEAD"]},"storage.local":{"uri":"storage\/{path}","methods":["GET","HEAD"],"wheres":{"path":".*"},"parameters":["path"]}}};
if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
  Object.assign(Ziggy.routes, window.Ziggy.routes);
}
export { Ziggy };
