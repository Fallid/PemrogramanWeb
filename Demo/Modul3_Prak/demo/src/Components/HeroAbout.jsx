import "bootstrap/dist/css/bootstrap.min.css";
import "./HeroAbout.css";
const HeroAbout = () => {
  return (
    <div className="">
      <div className="container-fluid about-background"></div>
      {/* <div className="col-md-6 d-flex h-100 justify-content-center align-items-center"> */}
      <div className="container-fluid d-flex mt-2 content">
        <ul>
          <li className="ms-3 title">
            <p>Welcome to "Lab Informatika UMM"</p>
            <p className="description">
              Laboratorium Teknik Informatika berfungsi sebagai pusat
              pembelajaran praktis dan eksperimental yang dipergunakan oleh
              mahasiswa dan pelayanan untuk riset dan konsultasi keteknikan
              mencakup desain sofware untuk animasi, administrasi, grafis dll.
            </p>
          </li>
          <li className="ms-3 title">
            <p>a. Laboratorium Rekayasa Perangkat Lunak</p>
            <p className="description">
              Melakukan analisa kelayakan pembuatan, penerapan proyek perangkat
              lunak, analisa kebutuhan, perancangan, pembuatan dan penjaminan
              kualitas perangkat lunak serta melakukan rekayasa ulang perangkat
              lunak.
            </p>
          </li>
          <li className="ms-3 title">
            <p>b. Laboratorium Sistem dan Keamanan Jaringan</p>
            <p className="description">
              Menganalisis permasalahan, memberikan solusi berupa perekayasaan,
              pembuatan dan pengelolaan, serta melakukan evaluasi pada sistem
              jaringan.
            </p>
          </li>
          <li className="ms-3 title">
            <p>c. Laboratorium Game Cerdas</p>
            <p className="description">
              Bekerja dengan tim mengembangkan dan merancang video game.
              Mengkoordinasikan tugas kompleks menciptakan video game baru yang
              memiliki tugas seperti merancang karakter, level, teka-teki, art
              dan animasi. Software Engineer, Programmer, atau Computer
              Scientist yang terutama mengembangkan basis kode untuk video game
              atau perangkat lunak terkait, seperti alat-alat pengembangan game.
            </p>
          </li>
          <li className="ms-3 title">
            <p>d. Laboratorium Sains Data</p>
            <p className="description">
              Menganalisis dan mengolah data menjadi suatu informasi dan
              pengetahuan.
            </p>
          </li>
        </ul>
      </div>
      {/* <p className="title">SELAMAT DATANG</p>
          <p className="subtitle">Di Website Praktikum Pemrograman Website</p> */}
    </div>
    // </div>
  );
};
export default HeroAbout;
