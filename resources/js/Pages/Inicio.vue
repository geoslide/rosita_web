<template>
  <v-app>
    <!-- Barra de navegación fija -->
    <v-app-bar app dark class="custom-navbar elevation-0">
      <v-app-bar-nav-icon @click="drawer = !drawer" class="d-md-none"></v-app-bar-nav-icon>
      <v-toolbar-title>Reciclajes Rositas</v-toolbar-title>
      <v-spacer></v-spacer>
      <div class="d-none d-md-flex">
        <v-btn text>Inicio</v-btn>
        <v-btn text>Metales</v-btn>
        <v-btn text>Nosotros</v-btn>
        <v-btn text>Contacto</v-btn>
      </div>
    </v-app-bar>
    <!-- Menú lateral en móviles -->
    <v-navigation-drawer v-model="drawer" app temporary>
      <v-list>
        <v-list-item @click="drawer = false">
          <v-list-item-title>Inicio</v-list-item-title>
        </v-list-item>
        <v-list-item @click="drawer = false">
          <v-list-item-title>Metales</v-list-item-title>
        </v-list-item>
        <v-list-item @click="drawer = false">
          <v-list-item-title>Nosotros</v-list-item-title>
        </v-list-item>
        <v-list-item @click="drawer = false">
          <v-list-item-title>Contacto</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
    <!-- Contenido principal -->
    <v-main>
        <!-- Imagen Parallax -->
            <v-parallax src="/images/reciclo1bw.jpg">
              <div class="parallax-text d-flex flex-column fill-height justify-center align-center text-white">
               <!-- Texto más grande y negrita -->
               <h1 class="text-h2 font-weight-bold mb-4 top: -50 ">Reciclajes Rosita</h1>
                 <h4 class="subheading"> Renueva, Recicla, Reinventa el Mundo. </h4>
              </div>
            </v-parallax>
        <v-container class="black-background">
  <!-- Título encima de las tarjetas -->
  <v-row class="first_tittle" justify="center" align="center">
    <v-col cols="12" class="text-center">
      <h2 class="text-h3 font-weight-bold text-white mb-4">Nosotros</h2>
    </v-col>
  </v-row>

  <!-- Sección con tarjetas e imágenes intercaladas -->
  <v-row class="custom_top_1" justify="center" align="center">    
    <!-- Tarjeta izquierda -->
    <v-col cols="12" md="5">
      <v-card class="pa-4">
        <v-card-title class="text-h5 text-center">¿Quiénes somos?</v-card-title>
        <v-card-text class="text-h7 text-center">
          Nos dedicamos al reciclaje de metales y otros materiales.
          Nuestra misión es contribuir al medio ambiente y ofrecer los mejores precios por tus materiales reciclables.
        </v-card-text>
      </v-card>
    </v-col>

    <!-- Imagen entre tarjetas -->
    <v-col cols="12" md="5">
      <v-img src="/images/gentewhite.png" alt="Reciclaje en acción" contain height="250"></v-img>
    </v-col>

    <!-- Imagen entre tarjetas -->
    <v-col cols="12" md="5">
      <v-img src="/images/scrapwhite.png" alt="Materiales reciclados" contain height="250"></v-img>
    </v-col>

    <!-- Tarjeta derecha -->
    <v-col cols="12" md="5">
      <v-card class="pa-4">
        <v-card-title class="text-h5 text-center">¿Qué materiales reciclamos?</v-card-title>
        <v-card-text class="text-h7 text-center">
          Recibimos una amplia variedad de metales, incluyendo aluminio, cobre, fierro y más. 
          Contáctanos para conocer nuestros precios y condiciones de nuestro reciclaje.
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
        <v-card-title class="text-h6">Retiro</v-card-title>
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
  <v-row class="metal_tittle"justify="center" align="center">
            <v-col cols="12" class="text-center">
              <h2 class="text-h3 font-weight-bold text-white mb-4">Metales</h2>
            </v-col>
          </v-row>
          <!-- Galería de imágenes -->
          <v-row>
            <v-col cols="12" md="6">
              <v-img src="/images/aluminio.jpg" alt="Aluminio" contain height="200"></v-img>
              <v-img src="/images/cobre.jpg" alt="Cobre" contain height="200" class="mt-4"></v-img>
              <v-img src="/images/fierro.jpg" alt="Fierro" contain height="200" class="mt-4"></v-img>
            </v-col>
            <v-col cols="12" md="6">
              <v-img src="/images/broncee.jpg" alt="Bronce" contain height="200"></v-img>
              <v-img src="/images/acero.jpg" alt="Acero" contain height="200" class="mt-4"></v-img>
              <v-img src="/images/plomo.jpg" alt="Plomo" contain height="200" class="mt-4"></v-img>
            </v-col>
          </v-row>
</v-container>
    </v-main>
  </v-app>
</template>

<script>
export default {
  name: "Inicio",
  data() {
    return {
      drawer: false, // menu movil
    };
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
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center; 
  margin-top: -65px; 
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
}
</style>