import "bootstrap/dist/css/bootstrap.min.css";
import instagram from "../Assets/logo-instagram.png";
import facebook from "../Assets/logo-facebook.png";
import twitter from "../Assets/logo-twitter.png";
import ilab from "../Assets/logo-ilab.png";
import "./Footer.css";

const Footer = () => {
  return (
    <footer className="d-flex pt-5 justify-content-evenly">
      <div className="d-flex align-items-center flex-column">
        <img src={ilab} alt="" />
        <p className="text-black-50 py-5">
          Copyright © 2022. Infinite Learning
        </p>
      </div>
      <div className="d-flex flex-column">
        <h5>Service</h5>
        <a href="#" className="nav-link active">
          Email Marketing
        </a>
        <a href="#" className="nav-link active py-1">
          Campaigns
        </a>
        <a href="#" className="nav-link active py-1">
          Branding
        </a>
        <a href="#" className="nav-link active py-1">
          Offline
        </a>
      </div>
      <div className="d-flex flex-column">
        <h5>About</h5>
        <a href="#" className="nav-link active">
          Our Story
        </a>
        <a href="#" className="nav-link active py-1">
          Benefit
        </a>
        <a href="#" className="nav-link active py-1">
          Team
        </a>
        <a href="#" className="nav-link active py-1">
          Careers
        </a>
      </div>
      <div className="d-flex flex-column">
        <h5>Follow Us</h5>
        <a href="#" className="nav-link active">
          <img
            src={facebook}
            alt=""
            style={{ height: "20px", width: "10px" }}
            className="logo-facebook"
          />
          Facebook
        </a>
        <a href="#" className="nav-link active py-1">
          <img
            src={twitter}
            alt=""
            style={{ width: "16px" }}
            className="logo-twitter"
          />
          Twitter
        </a>
        <a href="#" className="nav-link active">
          <img
            src={instagram}
            alt=""
            style={{ width: "16px" }}
            className="logo-instagram"
          />
          Instagram
        </a>
      </div>
    </footer>
  );
};

export default Footer;
