<style scoped>
.selamat-wrapper {
  padding: 4rem 6rem;
}
.selamat-title {
  padding: 2rem 2rem;
  padding-top: 0;
  text-align: center;
  width: 100%;
  font-size: 36px;
}
.greeting-card {
  border-radius: 6px;
}

.selamat-name {
  font-size: 24px;
}

.selamat-date {
  margin-top: .75rem;
  display: block;
  font-size: 13px;
}
.greetings-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 1rem;
}

.greeting-card {
  border: 1px solid #ccc;
  padding: 1rem;
  background-color: #fff;
  box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.1);
}

@media screen and (max-width: 768px) {
  .greetings-container {
    grid-template-columns: 1fr;
  }
  .selamat-wrapper {
    padding: 2.75rem 3rem;
  }
}
</style>

<template>
  <div class="location-wrapper">
    <div class="inv-grid grid-parent">
      <div class="inv-grid grid-parent">
        <div class="inv-grid grid-node location-info wrapper-content">
          <div class="location-titler-inv-reveal inv-reveal">Waktu dan Tempat</div>
          <div class="location-subtitler">
            <div class="inv-reveal">
              Dengan mengucap syukur atas kehadirat Allah SWT dan dengan segenap
              kerendahan hati, tanpa mengurangi rasa hormat. Kami mohon doa dan restu
              dari Bapak/Ibu/Saudara/i untuk hadir dihari bahagia Pernikahan kami yang
              akan dilaksanakan pada :
              <p>
                Kp. Manglid RT.03 RW. 01 Desa Jati
                <br />
                Kecamatan Bojongpicung Kabupaten Cianjur
              </p>
            </div>

            <div class="inv-reveal">
              <p class="wide-p">
                Akad nikah : 09:30 <span class="time"> </span>
                AM — 10:00
                <span class="time"> </span>
                PM
                <br />
                Resepsi : 10:00 AM <span class="time"> </span>
                — 15:00
                <span class="time"> </span>
                PM
              </p>
            </div>
          </div>
        </div>
        <div class="inv-grid grid-parent">
          <div class="inv-grid grid-node">
            <div class="inv-card rsvp-card inv-reveal">
              <div class="card-content">
                <span class="form-title">Konfirmasi</span>
                <span class="form-subtitle">Harap lengkapi formulir berikut</span>
                <div class="form-input">
                  <form @submit.prevent="submitGreeting">
                    <div class="inv-column-6">
                      <input
                        class="inv-input"
                        type="text"
                        placeholder="Nama"
                        v-model="newGreeting.name"
                      />
                    </div>
                    <div class="inv-column-6">
                      <input
                        class="inv-input"
                        type="email"
                        placeholder="Email"
                        v-model="newGreeting.email"
                      />
                    </div>
                    <div class="inv-column-6">
                      <div class="inv-select" style="width: 100%; margin-bottom: 1rem">
                        <select style="width: 100%" v-model="newGreeting.is_attended">
                          <option value="Akan Hadir?" selected>Akan Hadir?</option>
                          <option value="1">Hadir</option>
                          <option value="0">Tidak Hadir</option>
                        </select>
                      </div>
                    </div>
                    <div class="inv-column-6">
                      <textarea
                        class="inv-textarea"
                        placeholder="Pesan"
                        rows="5"
                        v-model="newGreeting.message"
                      ></textarea>
                    </div>
                    <button class="inv-button is-aqua is-fullwidth">Kirim</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="selamat-wrapper" id="selamat-wrapper" v-if="!error">
    <div class="inv-row">
      <div class="inv-column-6">
        <h1 class="selamat-title">Ucapan Selamat</h1>
        <div class="greetings-container">
          <div class="greeting-card" v-for="(greeting, index) in greetings" :key="index">
            <h2 class="selamat-name">{{ greeting.name }}</h2>
            <p>{{ greeting.message }}</p>
            <small class="selamat-date">{{ formatDate(greeting.created_at) }}</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Swal from 'sweetalert2';
export default {
  data() {
    return {
      greetings: [],
      error: null,
      newGreeting: { name: "", email: "", is_attended: "Akan Hadir?", message: "" },
    };
  },
  methods: {
    formatDate(timestamp) {
      const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
      const date = new Date(timestamp);
      const day = date.getDate();
      const month = months[date.getMonth()];
      const year = date.getFullYear();
      const hours = ("0" + date.getHours()).slice(-2);
      const minutes = ("0" + date.getMinutes()).slice(-2);
      return `${day} ${month} ${year} ${hours}:${minutes}`;
    },
    async fetchGreetings() {
      try {
        const response = await fetch("https://api.resepsi-digital.my.id/api/rizalnarisha");
        const data = await response.json();
        this.greetings = data;
        if (data.length == 0) this.error = true
      } catch (error) {
        this.error = error;
        console.error(error);
      }
    },
    async submitGreeting() {
      $.ajax({
        url: 'https://api.resepsi-digital.my.id/api/rizalnarisha',
        method: 'POST',
        data: JSON.stringify(this.newGreeting),
        contentType: 'application/json',
        success: (response) => {
          Swal.fire({
            icon: 'success',
            text: response.message,
          });
          this.fetchGreetings()
        },
        error: (jqXHR, textStatus, errorThrown) => {
          Swal.fire({
            icon: 'error',
            text: jqXHR.responseJSON.message,
          });
        },
      });
    }
  },
  mounted() {
    this.fetchGreetings();
  },
};
</script>
