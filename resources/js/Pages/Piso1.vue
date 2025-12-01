<template>
  <v-layout>
    <v-app-bar app dark class="custom-navbar elevation-0">
      <!-- Botón de menú desplegable arriba a la izquierda -->
      <v-btn icon @click.stop="drawer = !drawer" class="mr-2">
        <v-icon>mdi-menu</v-icon>
      </v-btn>
      <v-toolbar-title>Piso 1 - Centro Lagos II</v-toolbar-title>
      <v-spacer></v-spacer>
    </v-app-bar>
    <!-- Menú lateral -->
    <v-navigation-drawer v-model="drawer" temporary>
      <v-list>
        <v-list-item>
          <div style="display: flex; flex-direction: column; gap: 8px;">
            <v-btn color="white" block @click="$inertia.visit('/inicio')">Inicio</v-btn>
            <v-btn color="white" block @click="$inertia.visit('/piso1')">Piso 1</v-btn>
            <!-- Agrega más botones si lo deseas -->
          </div>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
    <v-main class="piso1-main black-background">
      <v-container fluid>
        <v-row justify="center" align="center">
          <v-col cols="12" class="text-center mt-10">
            <v-fade-transition>
              <h1 class="text-h3 font-weight-bold titulo-azul">
                Plano del Piso 1
              </h1>
            </v-fade-transition>
          </v-col>
        </v-row>
        <v-row justify="center" align="center" style="margin-top: 30px; padding-left: 40px;">
          <v-col cols="12">
            <div class="plano-wrapper">
              <v-img
                src="/images/plano_leyenda.png"
                class="plano-full"
                alt="Plano Piso 1"
                contain
              ></v-img>
              <!-- Iconos interactivos sobre el plano -->
              <div
                v-for="(icono, idx) in iconos"
                :key="idx"
                class="icono-btn"
                :style="{ top: icono.top, left: icono.left }"
              >
                <v-btn
                  icon
                  elevation="6"
                  @click="abrirPopUp(icono)"
                  style="background: transparent;"
                >
                  <img
                    :src="icono.img"
                    :alt="icono.alt"
                    width="48"
                    height="48"
                  />
                </v-btn>
              </div>
            </div>
            <!-- Pop-up con información -->
            <v-dialog v-model="dialog" max-width="1100">
              <v-card class="popup-card">
                <v-card-title class="headline">{{ popupTitulo }}</v-card-title>
                <v-card-text>
                  <v-row>
                    <v-col cols="12" md="4" class="popup-img-block">
                      <div class="popup-img-title">IMAGEN PLANO</div>
                      <v-img
                        :src="popupImgPlano"
                        alt="Imagen plano"
                        :height="popupImgPlanoHeight"
                        width="100%"
                        class="popup-img"
                        contain
                      ></v-img>
                    </v-col>
                    <v-col cols="12" md="4" class="popup-img-block">
                      <div class="popup-img-title">IMAGEN 3D</div>
                      <v-img
                        :src="popupImg3d"
                        alt="Imagen 3D"
                        :height="popupImg3dHeight"
                        width="100%"
                        class="popup-img"
                        contain
                      ></v-img>
                    </v-col>
                    <v-col cols="12" md="4" class="popup-text-col">
                      <div class="popup-especificaciones">
                        <strong class="popup-especificaciones-title">ESPECIFICACIONES</strong>
                        <div v-html="popupTexto"></div>
                      </div>
                    </v-col>
                  </v-row>
                </v-card-text>
                <v-card-actions>
                  <v-spacer></v-spacer>
                  <v-btn color="primary" text @click="dialog = false">Cerrar</v-btn>
                </v-card-actions>
              </v-card>
            </v-dialog>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-layout>
</template>

<script>
export default {
  name: "Piso1",
  data() {
    return {
      drawer: false,
      dialog: false,
      popupTitulo: '',
      popupTexto: '',
      popupImgPlano: '',
      popupImg3d: '',
      popupImgPlanoHeight: 260,
      popupImg3dHeight: 260,
      iconos: [
        {
          img: '/images/extintor.jpg',
          alt: 'Extintor',
          top: '44%',
          left: '21%',
          titulo: 'Extintor',
          texto: `<b>Uso:</b> Para el control inicial de incendios en etapas tempranas, antes de la propagación del fuego.<br>
                  <b>Material:</b> Acero al carbono laminado en frío, con recubrimiento anticorrosivo.<br>
                  Polvo químico seco (PQS): Multipropósito ABC.<br>
                  <b>Ubicación:</b> Hall principal.`,
          imgPlano: '/images/planto_exintor.jpg',
          img3d: '/images/extintor3d.jpg',
          planoHeight: 350,
          img3dHeight: 350,
        },
        {
          img: '/images/salida.jpg',
          alt: 'Salida',
          top: '70%',
          left: '28%',
          titulo: 'Caja de escala',
          texto: 'Salida de emergencia. Ubicación: extremo este del piso.',
          imgPlano: '/images/plano_salida.png',
          img3d: '/images/salida_3d.png',
          planoHeight: 350,
          img3dHeight: 350,
        },
        {
          img: '/images/manguera.jpg',
          alt: 'Red Seca',
          top: '56%',
          left: '31.3%',
          titulo: 'Red Húmeda',
          texto: 'Salida de emergencia. Ubicación: extremo este del piso.',
          imgPlano: '/images/red_humeda_plano.jpg',
          img3d: '/images/red_humeda_3d.jpg',
          planoHeight: 350,
          img3dHeight: 360,
        },
        {
          img: '/images/red_humeda.jpg',
          alt: 'RedHumeda',
          top: '31%',
          left: '11.6%',
          titulo: 'Red Seca',
          texto: 'Red Seca',
          imgPlano: '/images/red_seca.jpg',
          img3d: '/images/red_seca_2.jpg',
          planoHeight: 350,
          img3dHeight: 350,
        },
      ],
    };
  },
  methods: {
    abrirPopUp(icono) {
      this.popupTitulo = icono.titulo;
      this.popupTexto = icono.texto;
      this.popupImgPlano = icono.imgPlano;
      this.popupImg3d = icono.img3d;
      this.popupImgPlanoHeight = icono.planoHeight || 260;
      this.popupImg3dHeight = icono.img3dHeight || 260;
      this.dialog = true;
    },
  },
};
</script>

<style scoped>
.piso1-main {
  background: #000 !important;
  min-height: 100vh;
}
.custom-navbar {
  background-color: rgba(128, 128, 128, 0.7); 
  backdrop-filter: blur(5px); 
}
.titulo-azul {
  color: #ffffff;
  text-align: center;
}
.plano-wrapper {
  position: relative;
  width: 100vw;
  max-width: 100vw;
  height: 90vh;
  margin: 0 auto;
  overflow: hidden;
}
.plano-full {
  padding: 20rem;
  width: 90vw;
  max-width: 200vw;
  height: 90vh;
  object-fit: contain;
  margin: 0 auto;
  display: block;
  border-radius: 20px;
  box-shadow: 0 2px 16px rgba(33,150,243,0.10);
}
.icono-btn {
  position: absolute;
  z-index: 10;
  cursor: pointer;
  transition: transform 0.2s;
}
.icono-btn:hover {
  transform: scale(1.2);
}
.popup-card {
  background-color: #222e3b;
  color: #ffffff;
  border-radius: 12px;
  padding: 16px;
  box-shadow: 0 4px 24px rgba(0, 0, 0, 0.2);
}
.popup-img-block {
  margin-bottom: 16px;
  text-align: center;
}
.popup-img-title {
  font-size: 0.875rem;
  font-weight: 500;
  margin-bottom: 8px;
  text-align: center;
}
.popup-img {
  border-radius: 8px;
  overflow: hidden;
}
.popup-text-col {
  display: flex;
  justify-content: center;
  align-items: center;
}
.popup-especificaciones {
  font-size: 1rem;
  color: #ffffff;
  padding-left: 12px;
}
.popup-especificaciones-title {
  font-size: 1.125rem;
  font-weight: 600;
  margin-bottom: 12px;
}
@media (max-width: 900px) {
  .plano-full {
    max-width: 100vw;
    height: 50vh;
  }
}
</style>