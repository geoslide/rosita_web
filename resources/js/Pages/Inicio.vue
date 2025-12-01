<template>
  <v-layout>
    <!-- Barra de navegación fija -->
    <v-app-bar app dark class="custom-navbar elevation-0">
      <!-- Botón arriba a la izquierda -->
      <v-btn icon @click.stop="drawer = !drawer" class="mr-2">
        <v-icon>mdi-menu</v-icon>
      </v-btn>
      <v-toolbar-title>Centro Lagos II</v-toolbar-title>
      <v-spacer></v-spacer>
      <div class="d-none d-md-flex">
        <v-btn text>Inicio</v-btn>
        <v-btn text>Nosotros</v-btn>
        <v-btn text>Contacto</v-btn>
      </div>
    </v-app-bar>
    <!-- Menú lateral con select de pisos -->
    <v-navigation-drawer v-model="drawer" temporary>
      <v-list>
        <v-list-item>
          <div style="display: flex; flex-direction: column; gap: 8px;">
            <Link
              v-for="piso in pisos"
              :key="piso"
              :href="getPisoUrl(piso)"
              style="text-decoration: none;"
            >
              <v-btn color="white" block>
                {{ piso }}
              </v-btn>
            </Link>
          </div>
        </v-list-item>
        <!-- Puedes agregar más opciones aquí -->
        <!-- <v-list-item title="Inicio"></v-list-item>
        <v-list-item title="Nosotros"></v-list-item>
        <v-list-item title="Contacto"></v-list-item> -->
      </v-list>
    </v-navigation-drawer>
    <!-- Contenido principal -->
    <v-main>
      <!-- Imagen Parallax ocupa toda la pantalla -->
      <v-parallax src="/images/lagos_1.webp" height="100vh">
        <div class="parallax-text-full d-flex flex-column justify-center align-center fill-height">
          <h1 class="text-h1 font-weight-bold mb-2 text-outline titulo-azul">
            Edificio Centro Lagos II
          </h1>
          <h2 class="subheading">2025 Renueva, Reinventa el Mundo.</h2>
        </div>
      </v-parallax>
      <v-container class="black-background">
        <!-- Título encima de las tarjetas -->
        <v-row class="first_tittle" justify="center" align="center">
          <v-col cols="12" class="text-center">
            <h2 class="text-h3 font-weight-bold text-white mb-4 text-outline">
              Nosotros
            </h2>
          </v-col>
        </v-row>

        <!-- Sección con tarjetas e imágenes intercaladas -->

        <v-row class="custom_top_1" justify="center" align="center">
          <!-- Tarjeta izquierda -->
          <v-col cols="12" md="5">
            <v-card class="pa-4">
              <v-card-title class="text-h5 text-center">Centro Lagos</v-card-title>
              <v-card-text class="text-h7 text-center">
                  Centro Lagos II cuenta con envolvente térmico, ventanas termopanel y sistema full eléctrico, con terminaciones 
                  de alto estándar y áreas comunes equipadas.
              </v-card-text>
            </v-card>
          </v-col>

          <!-- Imagen entre tarjetas -->
          <v-col cols="12" md="5">
            <v-img src="/images/centro_lagos.webp" alt="Reciclaje en acción" contain height="250"></v-img>
          </v-col>

          <!-- Imagen entre tarjetas -->
          <v-col cols="12" md="5">
            <v-img src="/images/gentewhite.png" alt="Materiales reciclados" contain height="250"></v-img>
          </v-col>

          <!-- Tarjeta derecha -->
          <v-col cols="12" md="5">
            <v-card class="pa-4">
              <v-card-title class="text-h5 text-center">¿Que ofrecemos?</v-card-title>
              <v-card-text class="text-h7 text-center">
                Centro Lagos II ofrece diseño moderno con acceso controlado, cámaras de seguridad y conserjería 24/7. Su estructura incorpora envolvente
                térmico y ventanas termopanel que refuerzan confort y protección. Espacios comunes seguros y bien iluminados.
              </v-card-text>
            </v-card>
          </v-col>
        </v-row>

        <v-row class="columnaservicios" justify="center" align="center">
          <v-col cols="12" class="text-center">
            <h2 class="text-h3 font-weight-bold text-white mb-4">Nuestros Servicios</h2>
            <p class="text-h6 text-grey-lighten-2">
              Nos especializamos en la compra y venta de metales. <br />
              *Solo realizamos retiro de reciclaje, no contamos con un lugar físico para entrega.*
            </p>
          </v-col>
        </v-row>

        <!-- Ciclo de servicios -->
        <v-row class="mt-5 justify-center" align="center">
          <v-col cols="12" md="3">
            <v-card class="pa-4 text-center" color="grey darken-3">
              <v-icon size="50" color="primary">mdi-phone</v-icon>
              <v-card-title class="text-h6">Contacto</v-card-title>
              <v-card-text>Nos llamas o nos envías un mensaje con los materiales que deseas reciclar.</v-card-text>
            </v-card>
          </v-col>

          <v-col cols="12" md="3">
            <v-card class="pa-4 text-center" color="grey darken-3">
              <v-icon size="50" color="secondary">mdi-truck</v-icon>
              <v-card-title class="text-h6">Retiros</v-card-title>
              <v-card-text>
                Vamos hasta tu ubicación y recogemos los materiales reciclables.
              </v-card-text>
            </v-card>
          </v-col>

          <v-col cols="12" md="3">
            <v-card class="pa-4 text-center" color="grey darken-3">
              <v-icon size="50" color="success">mdi-cash</v-icon>
              <v-card-title class="text-h6">Pago</v-card-title>
              <v-card-text>
                Te pagamos de inmediato según el peso y el tipo de metal reciclado.
              </v-card-text>
            </v-card>
          </v-col>
        </v-row>
        <!-- <v-row class="metal_tittle"justify="center" align="center">
          <v-col cols="12" class="text-center">
            <h2 class="text-h3 font-weight-bold text-white mb-4">Metales</h2>
          </v-col>
        </v-row> -->
        <!-- Galería de imágenes -->
        <!-- <v-row>
          <v-col cols="12" md="6">
            <v-img src="/images/aluminio.jpg" alt="Aluminio" contain height="200"></v-img>
            <v-img src="/images/cobre.jpg" alt="Cobre" contain height="200" class="mt-4"></v-img>
            <v-img src="/images/fierro.jpg" alt="Fierro" contain height="200" class="mt-4"></v-img>
          </v-col>
          <v-col cols="12" md="6">
            <v-img src="/images/broncee.webp" alt="Bronce" contain height="200"></v-img>
            <v-img src="/images/acero.jpg" alt="Acero" contain height="200" class="mt-4"></v-img>
            <v-img src="/images/residuoselectronicos.jpg" alt="Plomo" contain height="200" class="mt-4"></v-img>
          </v-col>
        </v-row> -->
      </v-container>
    </v-main>
  </v-layout>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
  name: "Inicio",
  components: { Link },
  data() {
    return {
      drawer: false,
      pisoSeleccionado: null,
      pisos: [
        'Piso 1',
        'Piso 2',
        'Piso 3',
        'Pisos 4 - 17',
      ],
    };
  },
  methods: {
    getPisoUrl(piso) {
      if (piso === 'Piso 1') return '/piso1';
      // Puedes agregar rutas para otros pisos aquí
      return '/inicio'; // Por defecto
    },
  },
};
</script>

<style scoped>
v-main {
  padding-top: 64px;
}

.custom-navbar {
  background-color: rgba(128, 128, 128, 0.7); 
  backdrop-filter: blur(5px); 
}

.parallax-text {
  background: rgba(0,0,0,0.3); /* Fondo semitransparente para mejor contraste */
  padding: 32px 16px;
  border-radius: 12px;
  text-align: center;
  color: #fff;
  margin-top: -10;
  width: 100%;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}

.parallax-text-full {
  background: rgba(0,0,0,0.5); /* Fondo más oscuro para el texto en pantalla completa */
  padding: 64px 32px;
  border-radius: 0;
  text-align: center;
  color: #fff;
  width: 100%;
}

.black-background {
  background-color: black; /* Fondo negro */
  color: white; /* Texto blanco para mejor contraste */
  padding: 0; /* Elimina el padding */
}

.columnaservicios { 
  margin-top: 5cm; 
}

.custom_top_1 {
  margin-top: 3cm; 
}
  
.first_tittle {
  margin-top: 3cm; 
  margin-bottom: -2cm;
}

.metal_tittle  { 
  margin-top: 9cm; 
}

.text-outline {
  text-shadow:
    -1px -1px 0 #4a5052,  
     1px -1px 0 #4a5052,
    -1px  1px 0 #4a5052,
     1px  1px 0 #4a5052;
}

.titulo-azul {
  color: #ffffff; /* Azul amigable, puedes ajustar el tono si lo deseas */
}

.edificio-img {
  max-width: 350px;
  width: 100%;
  height: 320px;
  object-fit: contain;
  margin: 0 auto;
  display: block;
}

@media (max-width: 600px) {
  .parallax-text {
    margin-top: 0; 
    font-size: 1rem; 
  }
  .parallax-text h1 {
    font-size: 1.5rem; 
  }
  .parallax-text h4 {
    font-size: 0.8rem; 
  }
  .edificio-img {
    max-width: 220px;
    height: 180px;
  }
}
</style>