const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"sanctum.csrf-cookie":{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"]},"ignition.healthCheck":{"uri":"_ignition\/health-check","methods":["GET","HEAD"]},"ignition.executeSolution":{"uri":"_ignition\/execute-solution","methods":["POST"]},"ignition.updateConfig":{"uri":"_ignition\/update-config","methods":["POST"]},"registrar_produto":{"uri":"produtos\/novo","methods":["POST"]},"ver_produto":{"uri":"produtos\/ver\/{id}","methods":["POST"]},"alterar_produto":{"uri":"produtos\/editar\/{id}","methods":["POST"]},"excluir_produto":{"uri":"produtos\/excluir\/{id}","methods":["POST"]},"teste":{"uri":"produtos\/procurar","methods":["POST"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
