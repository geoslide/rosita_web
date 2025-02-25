import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';

// Importar estilos de Vuetify
import 'vuetify/styles';

// Importar Material Design Icons
import '@mdi/font/css/materialdesignicons.css';

// Importar Font Awesome (opcional, solo si lo necesitas)
import '@fortawesome/fontawesome-free/css/all.css';

// Configuración de Vuetify
export default createVuetify({
    components,
    directives,
    theme: {
        defaultTheme: 'dark',
        themes: {
            dark: {
                colors: {
                    background: '#000000', // Negro
                    surface: '#121212', // Fondo de tarjetas
                    primary: '#1e88e5', // Color principal
                    secondary: '#ff9800', // Color secundario
                },
            },
        },
    },
    icons: {
        defaultSet: 'mdi', // Configura Vuetify para usar Material Design Icons
        aliases: {
            google: 'material-icons', // Permite usar íconos de Google
        },
    },
    defaults: {
        global: {
            font: {
                family: 'Montserrat', // Fuente predeterminada de Google Fonts
            },
        },
    },
});
